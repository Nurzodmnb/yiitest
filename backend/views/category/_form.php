<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
echo $form->field($model, 'title');
echo Html::submitButton('Yubor', ['class' => 'btn btn-success']);
$form::end();
?>