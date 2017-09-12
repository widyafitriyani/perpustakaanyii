<?php

/* @var $this yii\web\View */
    use app\models\Buku;
    use yii\helpers\Html;
    use yii\helpers\Url;
?>

<?php print Html::a('link',['site/index']);
print Url::to(['site/index']); 
  ?>
  

<div class="site-index">

  <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Berita 1</h2>

                 <div class="kotak">
                 <?= Buku::getCount(); ?>
                    <span style="font-size: 20px">Jumlah Buku</span>
                </div>
                 <a class="btn btn-default" href="<?= Url::to(['buku/index']); ?>"> Buku </a>

            </div>
             <div class="col-lg-4">
                <h2>Berita 2</h2>

                <div class="kotak">
                    80
                    <span style="font-size: 20px">Jumlah Penerbit</span>
                </div>

                <a class="btn btn-default" href="<?= Url::to(['penerbit/index']); ?>"> Penerbit </a>

            </div>

            <div class="col-lg-4">
                <h2>Berita 3</h2>

                <div class="kotak">
                    80
                    <span style="font-size: 20px">Jumlah Peminjaman</span>
                </div>

                <a class="btn btn-default" href="<?= Url::to(['penerbit/index']); ?>"> Peminjaman </a>
            </div>
        </div>

    </div>
</div>
