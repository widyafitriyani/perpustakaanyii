<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenulisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penulis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Penulis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            'nama',
             [
            'attribute' => 'id_jenis_kelamin',
            'value' => function($data){
                return $data->idJenisKelamin->nama;
                },           
            ],

           
            'alamat',
            'jumlah',
            // 'lat',
            // 'lng',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
