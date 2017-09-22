<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use app\models\Buku;
use app\models\User;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
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

<div class="peminjaman-form">
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id_buku')->widget(Select2::classname(), [
    'data' => Buku::getList(),
    'language' => 'de',
    'options' => ['placeholder' => 'Pilih Buku'],
    'pluginOptions' => [
     'allowClear' => true
    ],
	]); ?>

    <?= $form->field($model, 'id_user')->widget(Select2::classname(), [
    'data' => User::getList(),
    'language' => 'de',
    'options' => ['placeholder' => 'pilih user'],
    'pluginOptions' => [
     'allowClear' => true
    ],
    ]); ?>
    <?= $form->field($model, 'waktu_dipinjam')->widget(
    DatePicker::classname(),[
    'model' => $model,
    'attribute' => 'date',
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
]);?>

     <?= $form->field($model, 'waktu_pengembalian')->widget(
    DatePicker::classname(),[
    'model' => $model,
    'attribute' => 'date',
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
]);?>

    <div class="col-sm-offset-2 col-sm-3">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
