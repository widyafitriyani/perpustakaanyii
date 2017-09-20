<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
//
use app\models\Jenis;
use app\models\Penulis;
/* @var $this yii\web\View */
/* @var $model app\models\Buku */
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

<div class="buku-form">
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis')->widget(Select2::classname(), [
    	//
    'data' => Jenis::getList(),
    'language' => 'de',
    'options' => ['placeholder' => 'Pilih Jenis Buku'],
    'pluginOptions' => [
     'allowClear' => true
    ],
	]); ?>

    <?= $form->field($model, 'penulis')->widget(Select2::classname(), [
    	//
    'data' => Penulis::getList(),
    'language' => 'de',
    'options' => ['placeholder' => 'Pilih Penulis Buku'],
    'pluginOptions' => [
     'allowClear' => true
    ],
	]); ?>

    <?= $form->field($model, 'file')->fileInput(['maxlength' => true]) ?>

        <div class="col-sm-offset-2 col-sm-3">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
