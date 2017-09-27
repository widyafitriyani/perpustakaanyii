<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use app\models\Buku;
use app\models\User;
use kartik\date\DatePicker;

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

    <?= $form->field($model, 'waktu_dipinjam')->widget(
    DatePicker::classname(),[
    'removeButton' => false,
    'options' => ['placeholder' => 'Tanggal'],
    'pluginOptions' => [
    'autoclose' =>true,
    'format' => 'yyyy-mm-dd'
        ]
]);?>

     <?= $form->field($model, 'waktu_pengembalian')->widget(
    DatePicker::classname(),[
   'removeButton' => false,
    'options' => ['placeholder' => 'Tanggal'],
    'pluginOptions' => [
    'autoclose' =>true,
    'format' => 'yyyy-mm-dd'
        ]
]);?>

    <div class="col-sm-offset-2 col-sm-3">
        <?= Html::submitButton($model->isNewRecord ? 'Pinjam' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
