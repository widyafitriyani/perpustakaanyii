<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diagnosa */

$this->title = "Tambah Diagnosa";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagnosas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
