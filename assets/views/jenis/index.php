<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-index box box-primary">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <div class="box-header">
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Jenis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            'jenis_buku',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
