<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

$this->title = 'Detail Buku';
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-view">

<h1>Detail Buku</h1>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting Peminjaman', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Peminjaman',['peminjaman/index', 'id' => $model->id], ['class' => 'btn btn-warning'])?>
        </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
        [
            'attribute' => 'id_buku',
            'value'=> function($data){
                return $data->idBuku->nama;
            },
            ],
            [
            'attribute' => 'id_user',
            'value'=> function($data){
                return $data->idUser->nama;
            },
            ],
            'waktu_dipinjam',
            'waktu_pengembalian',
        ],
    ]) ?>

</div>
