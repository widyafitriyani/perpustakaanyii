<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DiagnosaDetail */

$this->title = "Tambah Diagnosa Detail";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnosa Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-detail-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
