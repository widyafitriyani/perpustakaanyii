<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TagPenyakit */

$this->title = "Tambah Tag Penyakit";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tag Penyakits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-penyakit-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
