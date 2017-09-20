<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = 'Detail Buku';
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-view box box-primary">
    <div class="box-header">
      <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [

            'nama',
            [
            'attribute' => 'id_jenis',
            'value'=> function($data){
                return $data->idJenis->jenis_buku;
            },
            ],
            
            [
            'attribute' => 'penulis',
            'value'=> function($data){
                //$data = variable, ->namaRelasi-namaField
                return $data->idPenulis->nama;
            },
        ],
        'cover',
        ],
    ]) ?>

</div>
<div>
   <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting Buku',['update', 'id' => $model->id], ['class' => 'btn btn-primary'])?>
           <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Buku',['buku/index', 'id' => $model->id], ['class' => 'btn btn-warning'])?>
</div>
