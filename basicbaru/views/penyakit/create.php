<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */

$this->title = "Tambah Penyakit";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Penyakits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-create">

    <?= $this->render('_form', [
        'model' => $model,
        
    ]) ?>

</div>
