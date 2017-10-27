<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pertanyaan */

$this->title = "Tambah Pertanyaan";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pertanyaans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
