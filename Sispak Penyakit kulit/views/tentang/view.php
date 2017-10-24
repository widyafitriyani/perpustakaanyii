<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tentang */

$this->title = "Detail Tentang";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tentang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentang-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Tentang</h3>
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
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => $model->nama,
            ],
            [
                'attribute' => 'isi',
                'format' => 'raw',
                'value' => $model->isi,
            ],
            [
                'attribute' => 'gambar',
                'format' => 'raw',
                'value' => $model->gambar,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Tentang', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Tentang', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
