<?php
/* @var $this View */
/* @var $content string */

use app\modules\backend\widgets\leftBar\LeftBarWidget;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;

$this->beginContent(__DIR__ . '/template.php'); ?>

    <!--    --><?//= $this->render('left') ?>
<?= LeftBarWidget::widget() ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?= Html::encode($this->title) ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                        <?= Breadcrumbs::widget([
                            'tag' => 'ol',
                            'homeLink' => ['label'=> 'Главная', 'url' => '/admin/'],
                            'links' => $this->params['breadcrumbs'] ?? [],
                            'options' => ['class' => 'breadcrumb float-sm-right'],
                            'itemTemplate' => "<li class=\"breadcrumb-item\">{link}</li>\n",
                            'activeItemTemplate' => "<li class=\"breadcrumb-item active\">{link}</li>\n",
                        ]) ?>

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">

                <?= $this->params['title_btn'] ?? null ?>

                <?= Alert::widget() ?>

                <?= $content ?>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $this->endContent() ?>