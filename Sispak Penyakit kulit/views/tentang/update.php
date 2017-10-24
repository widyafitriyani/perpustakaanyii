<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tentang */

$this->title = "Sunting Tentang";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tentangs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="tentang-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
