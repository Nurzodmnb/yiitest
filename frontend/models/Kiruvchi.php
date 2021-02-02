<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class Kiruvchi extends ActiveRecord
{
   public function rules()
   {
       return [
           [['fio', 'string'], 'required'],
           ['bulim', 'string'],
       ];
   }
//   public function attributeLabels()
//   {
//       return [
//           'fio'=>'Ismini to\'liq kiriting '
//             ];
//   }
}