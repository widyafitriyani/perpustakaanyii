<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tentang */

$this->title = "Tambah Tentang";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tentangs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentang-create">

    <?= $this->render('_form', [
        'model' => $model,
        'referrer'=> $referrer
    ]) ?>

</div>
