<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Tambah User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create box box-primary">
<div class="box-header">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
