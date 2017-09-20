<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = 'Tambah Buku';
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-create box box-primary">
 <div class="box-header">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
