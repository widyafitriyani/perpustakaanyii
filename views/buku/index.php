<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Buku', ['create'], ['class' => 'btn btn-success']) ?>
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
            'nama',
            [
            'attribute' => 'id_jenis',
            'value' => function($data){
                return $data->getRelationField('idJenis','jenis_buku');
            },
            ],
            //cara kedua di view
            [
            'attribute' => 'penulis',
            'value'=> function($data){
                //$data = variable, ->namaRelasi-namaField
                return $data->idPenulis->nama;
            },

            ],
            'cover',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
