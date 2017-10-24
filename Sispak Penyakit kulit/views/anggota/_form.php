<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\JenisKelamin;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'layout'=>'horizontal',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

<div class="anggota-form box box-primary">

    <div class="box-header">
        <h3 class="box-title">Form Anggota</h3>
    </div>
	<div class="box-body">

        <?= $form->errorSummary($model); ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'photo')->fileInput() ?>

        <?= $form->field($model, 'id_jenis_kelamin')->widget(Select2::classname(),[
            'data' => JenisKelamin::getList(),
            'options' => ['placeholder' => 'Pilih Jenis Kelamin',
            ]
            ]); ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tanggal_lahir')->widget(
    DatePicker::classname(),[
   'removeButton' => false,
    'options' => ['placeholder' => 'Tanggal'],
    'pluginOptions' => [
    'autoclose' =>true,
    'format' => 'yyyy-mm-dd'
        ]
]);?>

	</div>
    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
            <?= Html::submitButton('<i class="fa fa-check"></i> Simpan',['class' => 'btn btn-success btn-flat']) ?>
        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>
