<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\user\Pengguna */

$this->title = 'Tambah Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-create box box-primary">
<div class="box-header">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
