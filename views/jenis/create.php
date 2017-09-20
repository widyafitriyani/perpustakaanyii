<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenis */

$this->title = 'Tambah Jenis Buku';
$this->params['breadcrumbs'][] = ['label' => 'Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-create box box-primary">
<div class="box-header">
      <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
