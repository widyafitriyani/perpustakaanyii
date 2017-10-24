<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Diagnosa */

$this->title = "Detail Diagnosa";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnosa'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Diagnosa</h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'value' => $model->id,
            ],
            [
                'attribute' => 'id_penyakit',
                'format' => 'raw',
                'value' => $model->id_penyakit,
            ],
            [
                'attribute' => 'id_pertanyaan',
                'format' => 'raw',
                'value' => $model->id_pertanyaan,
            ],
            [
                'attribute' => 'id_pasien',
                'format' => 'raw',
                'value' => $model->id_pasien,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Diagnosa', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Diagnosa', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
