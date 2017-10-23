<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */
dmstr\web\AdminLteAsset::register($this);
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div  class="login-pages">
            <div class="login-logo">
              <p style="font-weight: bold; color: #2eb5a6">Sistem Pakar Diagnosa Penyakit Kulit</p>
              <p class="txt-l" style="font-weight: bold">Rumah Sakit Kab Indramayu</p>

            </div>

<div class="login-box">
    <div class="login-box-body">
    <p class="login-box-msg">Silahkan login terlebih dahulu</p>
        <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-signin'],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])->label(false); ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false); ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <div class="col-xs-4">

                <?= Html::submitButton('Login',
                    [
                        'id' => 'btnLogin',
                        'class' => 'btn btn-flat btn-primary btn-block btn-signin',
                        'name' => 'login-button'
                    ]) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
