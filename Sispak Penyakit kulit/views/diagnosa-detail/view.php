<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DiagnosaDetail */

$this->title = "Detail Diagnosa Detail";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnosa Detail'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-detail-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Diagnosa Detail</h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id_pasien',
                'format' => 'raw',
                'value' => $model->id_pasien,
            ],
            [
                'attribute' => 'id_penyakit',
                'format' => 'raw',
                'value' => $model->id_penyakit,
            ],
            [
                'attribute' => 'id_diagnosa',
                'format' => 'raw',
                'value' => $model->id_diagnosa,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Diagnosa Detail', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Diagnosa Detail', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
