<?php

use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard v3</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v3</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                        <div>Maqolalar kiritish</div>
                        <div class="col-md-8">
                            <?php
                                $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
                                echo $form->field($model,'title');
                                echo $form->field($model,'description')->textarea(['rows' => 4]);
                                echo  $form->field($model, 'content')->widget(TinyMce::className(), [
                                'options' => ['rows' => 6],
                                'language' => 'ru',
                                'clientOptions' => [
                                    'plugins' => [
                                        "advlist autolink lists link charmap print preview anchor",
                                        "searchreplace visualblocks code fullscreen",
                                        "insertdatetime media table contextmenu paste"
                                    ],
                                    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                                   ]
                                 ]);
                                echo $form->field($model, 'date')->widget(DatePicker::classname(), [
                                    'options' => ['placeholder' => 'Enter birth date ...'],
                                    'pluginOptions' => [
                                        'autoclose'=>true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                echo $form->field($model,'image')->fileInput();
                                echo $form->field($model,'user_id')->dropdownList($foydalanuvchi, ['prompt'=>'Select Category']);
                                echo $form->field($model,'status');
                                echo $form->field($model, 'category_id')->dropdownList($kategoriya,
                                    ['prompt'=>'Select Category']
                                );
                                echo Html::submitButton('Yubor',['class'=>'btn btn-success']);
                                $form::end();
                                ?>
                        </div>

                        </div>

                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

