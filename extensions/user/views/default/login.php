<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model LoginForm */

use thefx\user\forms\LoginForm;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss('
    .radio label, .checkbox label {
        padding-left: 0;
    }
');
?>

<div class="login-box">
    <div class="login-logo">
        <?= Html::encode($this->title) ?>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'email', [
                'errorOptions' => ['encode' => false, 'class' => 'invalid-feedback'],
                'inputOptions' => ['placeholder' => 'Email'],
//      'inputTemplate' => '<div class="form-group has-feedback">{input}{error}<span class="glyphicon glyphicon-envelope form-control-feedback"></span></div>'
            ])->textInput(['autofocus' => true])->label(false) ?>

            <?= $form->field($model, 'password', [
                'inputOptions' => ['placeholder' => 'Пароль'],
            ])->passwordInput()->label(false) ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>

            <div>
                <a href="/password-reset-request">Забыли пароль?</a>
            </div>

            <div>
                <a href="/register">Регистрация</a>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
