<?php

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
                    <h1 class="m-0">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kategoriyalar</li>
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
                            <div>Bu Category</div>
                        </div>
                        <div class="card-header border-0">
                            <div>Bu read</div>
                            <?php foreach ($categories as $category): ?>
                                <a href="/category/update?id=<?= $category->id ?>"><?= $category->title ?></a>
                                <a href="/category/update?id=<?= $category->id ?>" ><button name="edit" class="btn btn-info"> Edit </button></a>
                            <a href="/category/delete?id=<?= $category->id ?>"> <button name="delete" class="btn btn-info"> Delete </button></a></br>
                            <?php endforeach; ?>
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

