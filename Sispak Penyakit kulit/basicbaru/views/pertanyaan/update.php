<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pertanyaan */

$this->title = "Sunting Pertanyaan";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pertanyaans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="pertanyaan-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
