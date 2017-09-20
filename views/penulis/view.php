<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penulis */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penulis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-view box box-primary">
<div class="box-header">
      <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
            'nama',
            [
            'attribute' => 'id_jenis_kelamin',
            'value'=> function($data){
                return $data->idJenisKelamin->nama;
            },
            ],
            'alamat',
            'jumlah',
            'lat',
            'lng',
        ],
    ]) ?>

</div>
<div>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting Penulis', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Penulis', ['penulis/index', 'id' => $model->id], ['class' => 'btn btn-warning'])?>
    </p>
    </div>
    