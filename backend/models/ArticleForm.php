<?php
namespace backend\models;

use yii\db\ActiveRecord;

class ArticleForm extends ActiveRecord
{

    public static function tableName()
    {
        return 'article';
    }

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['title', 'description', 'status', 'content'], 'required', 'message' => 'Formalar to\'ldirilishi majburiy'],
            [['date', 'user_id','category_id'], 'required', 'message' => 'Formalar to\'ldirilishi majburiy']
        ];
    }

    public function attributeLabels()
    {
        return  [
            'title' => 'Sarlavha',
            'content' => 'To\'liq matn',
            'description' => 'Qisqacha matni',
            'category_id' => 'Kategoriyani tanlang',
            'user_id' => 'Kim kirityapdi'
              ];
    }

    public function upload()
    {
        $file = md5(time() . $this->image->baseName) . '.' . $this->image->extension;
        if ($this->validate()) {
            $this->image->saveAs('uploads/' . $file);
            return $file;
        } else {
            return false;
        }
    }
}