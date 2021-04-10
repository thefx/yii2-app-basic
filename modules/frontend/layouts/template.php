<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\modules\frontend\assets\Frontend\FrontendAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use \yii\bootstrap4\Breadcrumbs;

FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
<?php
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-md navbar-light bg-light',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => [
        ['label' => 'Home', 'url' => ['/']],
        ['label' => 'About', 'url' => ['/about']],
        ['label' => 'Contact', 'url' => ['/contact']],
        Yii::$app->user->isGuest ? (
        ['label' => 'Login', 'url' => ['/login']]
        ) : (
            '<li>'
            . Html::beginForm(['/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>'
        )
    ],
]);
NavBar::end();
?>
</header>

<main role="main" class="container">
    <?= Breadcrumbs::widget([
        'links' => $this->params['breadcrumbs'] ?? [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
