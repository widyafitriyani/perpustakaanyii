<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\user\Pengguna */

$this->title = 'Update Pengguna: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengguna-update box box-primary">
<div class="box-header">
      <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
