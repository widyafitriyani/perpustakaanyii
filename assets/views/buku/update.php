<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = 'Sunting Buku : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Sunting';
?>
<div class="buku-update box box-primary">
 <div class="box-header">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>

</div>
