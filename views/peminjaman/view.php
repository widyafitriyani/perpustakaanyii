<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

$this->title = 'Detail Buku';
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-view box box-primary">
 <div class="box-header">
      <div class="box-body">
    
    <?= DetailView::widget([
        'model' => $model,
        'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
        'attributes' => [
        [
            'attribute' => 'id_buku',
            'value'=> function($data){
                return $data->idBuku->nama;
            },
            ],
            [
            'attribute' => 'id_user',
            'value' => function($data){
                return $data->idUser->nama;
            },
            ],
            /*'value'=> function($data){
                return $data->idUser->nama;
            },*/
            'waktu_dipinjam',
            'waktu_pengembalian',
        ],
    ]) ?>

</div>
<div>
<p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting Peminjaman', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Peminjaman',['peminjaman/index', 'id' => $model->id], ['class' => 'btn btn-warning'])?>
        <?= Html::a('<i class="fa fa-file"></i> Export PDF', ['view-export-pdf', 'id' => $model->id], ['target' => '_blank', 'class' => 'btn btn-success btn-flat']) ?>
        </p>
        </div>
