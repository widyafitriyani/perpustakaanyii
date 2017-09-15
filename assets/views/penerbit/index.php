<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenerbitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penerbit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerbit-index box box-primary">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <div class="box-header">
        <?= Html::a('Tambah Penerbit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            
            'nama',
            'alamat',
            'latitude',
            'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
