<?php

use yii\widgets\ActiveForm;
?>

    <?php $form = ActiveForm::begin();?>
    <?= $form->field($model,'bulim') ?>
    <?= $form->field($model,'fio') ?>
    <button type="submit">Yubor</button>
    <?php $form::end();?>


<!--<table class="table table-bordered table-hover">-->
<!--    <tr>-->
<!--        <td>#</td>-->
<!--        <td>bulim</td>-->
<!--        <td>fio</td>-->
<!--        <td>hnomi</td>-->
<!--        <td>hyili</td>-->
<!--        <td>birligi</td>-->
<!--        <td>holati</td>-->
<!--        <td>izox</td>-->
<!--        <td>masul</td>-->
<!--        <td>sana</td>-->
<!--    </tr>-->
<!--    --><?php //foreach ($model as $item) {
//        echo "<tr><td>$item->id</td>";
//        echo "<td>$item->bulim</td>";
//        echo "<td>$item->fio</td>";
//        echo "<td>$item->hnomi</td>";
//        echo "<td>$item->hyili</td>";
//        echo "<td>$item->birligi</td>";
//        echo "<td>$item->holati</td>";
//        echo "<td>$item->izoh</td>";
//        echo "<td>$item->masul</td>";
//        echo "<td>$item->sana</td></tr>";
//
//        if ($item->id==5)
//        {
//            break;
//        }
//    } ?>
<!--</table>-->