<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */

$this->title = "Sunting Penyakit";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Penyakits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="penyakit-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
