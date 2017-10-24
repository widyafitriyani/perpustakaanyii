<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TagPenyakit */

$this->title = "Sunting Tag Penyakit";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tag Penyakits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Sunting');
?>
<div class="tag-penyakit-update">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
