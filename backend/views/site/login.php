<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>
<!--<div class="site-login">-->
<!--    <div class="mt-5 offset-lg-3 col-lg-6">-->
<!--        <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--        <p>Please fill out the following fields to login:</p>-->
<!---->
<!---->
<!---->
<!---->
<!--            <div class="form-group">-->
<!--                --><?php //= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
<!--            </div>-->
<!---->
<!--        --><?php //ActiveForm::end(); ?>
<!--    </div>-->
<!--</div>-->
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options'=>['class'=>'user']
            ]); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class' => 'form-control form-control-user']) ?>

            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-user']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'form-control form-control-user']) ?>


            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>


            <?php ActiveForm::end() ?>
            <hr>
            <div class="text-center">
                <a class="small" href="<?php echo \yii\helpers\Url::to(['/site/forgot-password'])?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>