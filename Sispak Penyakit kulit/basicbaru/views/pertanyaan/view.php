<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pertanyaan */

$this->title = "Detail Pertanyaan";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pertanyaan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Pertanyaan</h3>
    </div>

    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            [
                'attribute' => 'id_penyakit',
                'format' => 'raw',
                'value' => $model->id_penyakit,
            ],
            [
                'attribute' => 'isi_pertanyaan',
                'format' => 'raw',
                'value' => $model->isi_pertanyaan,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Pertanyaan', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Pertanyaan', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
