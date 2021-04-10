<?php

/* @var $this View */
/* @var $model Page */

use thefx\pages\models\Page;
use yii\helpers\Html;
use yii\web\View;

$this->title = Html::encode($model->title);

?>

<div class="site-page">
    <h1 class="mt-5"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= $model->text ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
