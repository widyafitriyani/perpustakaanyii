<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tambah Peminjaman';
$this->title = 'Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            //cara pertama di view
            [
            'attribute' => 'id_buku',
            'value' => function($data){
                return $data->idBuku->nama;
                },           
            ],
            
            [
             'attribute' => 'id_user',
             'value' => function($data){
                // $data = variable, ->namaRelasi-namaField
                return $data->idUser->nama;
            },
            ],
            'waktu_dipinjam',
            'waktu_pengembalian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
