<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index box box-primary">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <div class="box-header">
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Buku', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-print"></i> Export Excel Buku', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>
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
</div>
