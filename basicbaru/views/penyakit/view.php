<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */

$this->title = "Detail Penyakit";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Penyakit'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Penyakit</h3>
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
                'attribute' => 'id_tag_penyakit',
                'format' => 'raw',
                'value' => $model->id_tag_penyakit,
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
                'attribute' => 'solusi',
                'format' => 'raw',
                'value' => $model->solusi,
            ],
            [
                'attribute' => 'id_penyakit',
                'format' => 'raw',
                'value' => $model->id_penyakit,
            ],
            [
                'attribute' => 'gambar',
                'format' => 'raw',
                'value' => Html::img('@web/uploads/'.$model->gambar,['width'=>'100px']),
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Penyakit', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Penyakit', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
