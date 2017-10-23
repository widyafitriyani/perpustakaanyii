<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenyakitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Penyakit');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-index box box-primary">

    <div class="box-header">
        <?= Html::a('<i class="fa fa-plus"></i> Tambah Penyakit', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
        <?= Html::a('<i class="fa fa-print"></i> Export Excel Penyakit', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>

    </div>

    <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' => ['style' => 'text-align:center']
            ],
            [
                'attribute' => 'id_penyakit',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_tag_penyakit',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'isi',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'solusi',
                'format' => 'raw',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
            'attribute' => 'gambar',
            'format' => 'raw',
            'headerOptions' => ['style' => 'width:100px'],
            'value' => function($data){
                    return $data->getPhoto(['class'=>'img-responsive']);
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center;width:80px']
            ],
        ],
    ]); ?>
    </div>
</div>
