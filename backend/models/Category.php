<?php


namespace backend\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public function rules()
    {
        return
            [
                [['title'], 'required', 'message' => 'Formalar to\'ldirilishi majburiy'],
            ];
    }
}