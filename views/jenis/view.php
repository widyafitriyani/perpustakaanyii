<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Buku;

/* @var $this yii\web\View */
/* @var $model app\models\Jenis */

$this->title = $model->jenis_buku;
$this->params['breadcrumbs'][] = ['label' => 'Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-view">

<h1>Detail Buku</h1>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Sunting Buku', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i> Daftar Buku', ['jenis/index', 'id' => $model->id], ['class' => 'btn btn-warning'])?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           
            'jenis_buku',
        ],
    ]) ?>

</div>

<table class="table table-bordered table-hover table-striped">
<thead>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis</th>
    <th>Penulis</th>
    <th>Cover</th>
    </tr>
</thead>
<?php
$i=1;

foreach (Buku::find()->where(['id_jenis' => $model->id])->all() as $data) { ?>
<td><?= $i; ?></td>
<td><?= $data->nama ?></td>
<td><?= $data->idJenis->jenis_buku ?></td>
<td><?= $data->idPenulis->nama; ?></td>
<td><?= $data->cover ?></td>
</tr>
<?php $i++; } ?>
</table>

<?php
?>