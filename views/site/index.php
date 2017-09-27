<?php

/* @var $this yii\web\View */
    use app\models\Buku;
    use app\models\Peminjaman;
    use app\models\Penerbit;
    use app\models\Penulis;
    use yii\helpers\Html;
    use yii\helpers\Url;
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
            <p>Jumlah Buku</p>
            <div class="icon">
                <i class="fa fa-book"></i>
           </div>
            <h3><?= Buku::getCount(); ?> </h3>
            <span style="font-size: 30px"></span>
            </div>
            <a class="small-box-footer" href="<?= Url::to(['buku/index']); ?>">More info</a>
            </div>
            </div>
             <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-red">
                <div class="inner">
                <p>Jumlah Penerbit</p>
                <div class="icon">
                <i class="fa fa-user"></i>
                </div>
                <h3><?= Penerbit::getCount(); ?></h3>
                <span style="font-size: 30px"></span>
                </div>
                <a class="small-box-footer" href="<?= Url::to(['penerbit/index']); ?>">More info</a>
            </div>
            </div>
            <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-purple">
            <div class="inner">
            <p>Jumlah Peminjaman</p>
            <div class="icon">
            <i class="fa fa-clock-o"></i>
            </div>
            <h3><?= Peminjaman::getCount(); ?></h3>
            <span style="font-size: 30px"></span>
            </div>
               <a class="small-box-footer" href="<?= Url::to(['peminjaman/index']); ?>">More info</a>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-sm-6">
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Grafik Penulis</h3>
            </div>
            <div class="box-body">
            <?= $this->render('_grafikBukuPerPenulis'); ?>
        </div>
    </div>
</div>
<div class="col-sm-6">
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Grafik Peminjaman</h3>
            </div>
            <div class="box-body">
        <?= $this->render('_grafikPeminjamanPerBuku'); ?>
        </div>
    </div>
</div>
