<?php
use app\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
AppAsset::register($this);

$hide = "$('.hide-alert').animate({opacity: 1.0}, 3000).fadeOut('slow')";
$this->registerJs($hide, $this::POS_END, '');

$this->registerCssFile(Yii::$app->request->baseUrl.'/css/login.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-page">

<?php foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
            echo '<div class="alert hide-alert alert-' . $key . '" style="border-radius:0px;margin-bottom:0px">' . $message . '</div>';
        } ?>
    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
