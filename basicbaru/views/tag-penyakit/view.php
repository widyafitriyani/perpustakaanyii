<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TagPenyakit */

$this->title = "Detail Tag Penyakit";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tag Penyakit'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-penyakit-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Tag Penyakit</h3>
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
                'attribute' => 'slogan',
                'format' => 'raw',
                'value' => $model->slogan,
            ],
        ],
    ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-pencil"></i> Sunting Tag Penyakit', ['update', 'id' => $model->id], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-list"></i> Daftar Tag Penyakit', ['index'], ['class' => 'btn btn-warning btn-flat']) ?>
    </div>

</div>
