<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DiagnosaDetail */

$this->title = "Sunting Diagnosa Detail";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnosa Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="diagnosa-detail-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
