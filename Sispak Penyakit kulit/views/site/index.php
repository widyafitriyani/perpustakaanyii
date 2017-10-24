<?php
    use app\models\Penyakit;
    use app\models\Pasien;
    use app\models\Diagnosa;
    use yii\helpers\Html;
    use yii\helpers\Url;

/* @var $this yii\web\View */
?>

<?php print Html::a('link',['site/index']);
print Url::to(['site/index']); 
  ?>
<div class="site-index">
  <div class="box-header with-border">
  <div class="body-content">
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                 <div class="small-box bg-aqua">
            <div class="inner">
            <p>Jumlah Penyakit Kulit</p>
            <div class="icon">
                <i class="fa fa-book"></i>
           </div>
           <span style="font-size: 30px"></span>
            </div>
           <a class="small-box-footer" href="<?= Url::to(['penyakit/index']); ?>">More info</a>
            </div>
            </div>

   <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-red">
                <div class="inner">
                <p>Jumlah Pasien</p>
                <div class="icon">
                <i class="fa fa-user"></i>
                </div>
                <span style="font-size: 30px"></span>
            </div>
                <a class="small-box-footer" href="<?= Url::to(['pasien/index']); ?>">More info</a>
            </div>
          </div>
        </div>
    </div>
</div>