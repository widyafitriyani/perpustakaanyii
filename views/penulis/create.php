<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penulis */

$this->title = 'Tambah Penulis';
$this->params['breadcrumbs'][] = ['label' => 'Penulis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-create box box-primary">
<div class="box-header">
      <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
