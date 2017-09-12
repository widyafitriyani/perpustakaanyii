<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penerbit */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penerbit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerbit-view">

    <h1>Detail Penerbit</h1>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting Penerbit',['update', 'id' => $model->id], ['class' => 'btn btn-primary'])?>
           <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Penerbit',['penerbit/index', 'id' => $model->id], ['class' => 'btn btn-warning'])?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'alamat',
            'latitude',
            'longitude',
        ],
    ]) ?>

</div>
