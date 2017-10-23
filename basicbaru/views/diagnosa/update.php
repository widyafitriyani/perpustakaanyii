<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diagnosa */

$this->title = "Sunting Diagnosa";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnosas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="diagnosa-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
