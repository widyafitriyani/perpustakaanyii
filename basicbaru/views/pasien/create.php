<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = "Tambah Pasien";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pasiens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
