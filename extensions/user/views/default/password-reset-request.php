<?php

use thefx\user\forms\PasswordResetRequestForm;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model PasswordResetRequestForm */

$this->title = 'Запрос на восстановление пароля';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="password-reset-request-form">

    <h4 class="mb-4"><?= Html::encode($this->title) ?></h4>

    <div class="alert alert-info">Напишите Ваш Email в поле ниже. Ссылка на сброс пароля придет по указанному адресу.</div>

    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>