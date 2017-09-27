<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Peminjaman;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view box box-primary">
<div class="box-header">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'username',
            'password',
            'role',
        ],
    ]) ?>

</div>
<table class="table table-bordered table-hover table-striped">
<thead>
    <tr>
    <th>No</th>
    <th>Nama Buku</th>
    <th>Nama User</th>
    <th>Waktu Dipinjam</th>
    <th>Waktu Pengembalian</th>
    </tr>
</thead>
<?php
$i=1;

foreach (Peminjaman::find()->where(['id_user' => $model->id])->all() as $data) { ?>
<td><?= $i; ?></td>
<td><?= $data->idBuku->nama ?></td>
<td><?= $data->idUser->nama ?></td>
<td><?= $data->waktu_dipinjam ?></td>
<td><?= $data->waktu_pengembalian ?></td>
</tr>
<?php $i++; } ?>
</table>
<div>
