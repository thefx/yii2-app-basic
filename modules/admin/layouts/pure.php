<?php
/* @var $this View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;

$this->beginContent(__DIR__ . '/template.php'); ?>

<?= $this->render('left') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">

                <?= Breadcrumbs::widget([
                    'links' => $this->params['breadcrumbs'] ?? [],
                    'options' => ['class' => 'breadcrumb breadcrumb-caret'],
                    'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n",
                    'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n",
                ]) ?>

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <?= $this->params['title_btn'] ?? null ?>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">

                <?= Alert::widget() ?>

                <?= $content ?>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $this->endContent() ?>