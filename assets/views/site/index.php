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
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                 <div class="small-box bg-aqua">
            <div class="inner">
            <p>Jumlah Buku</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
           </div>
            <h3> <?= Buku::getCount(); ?> </h3>
            <a href="<?= Url::to(['buku/index']); ?>" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div>
             <div class="col-lg-4 col-xs-6">
                <div class="small-box bg-red">
                <div class="inner">
                <p>Jumlah Penerbit</p>
                </div>
                <div class="icon">
                <i class="fa fa-user"></i>
                </div>
                <h3> <?= Penerbit::getCount(); ?> </h3>
                 <a href="<?= Url::to(['penerbit/index']); ?>" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-purple">
            <div class="inner">
            <p>Jumlah Peminjaman</p>
            </div>
            <div class="icon">
            <i class="fa fa-clock-o"></i>
            </div>
            <h3> <?= Peminjaman::getCount(); ?> </h3>
               <a href="<?= Url::to(['peminjaman/index']); ?>" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
               </div>
        </div>
    </div>
</div>
