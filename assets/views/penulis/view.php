<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penulis */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penulis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting Penulis', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Penulis', ['penulis/index', 'id' => $model->id], ['class' => 'btn btn-warning'])?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            [
            'attribute' => 'id_jenis_kelamin',
            'value'=> function($data){
                return $data->idJenisKelamin->nama;
            },
            ],
            'alamat',
            'jumlah',
            'lat',
            'lng',
        ],
    ]) ?>

</div>
