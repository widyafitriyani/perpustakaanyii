<?php
    use app\models\PenyakitKulit;
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\helpers\Url;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/pakar.jpg'; ?>" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> 
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['site/index'],],
                    ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['admin/index']],
                    ['label' => 'Penyakit', 'icon' => 'refresh', 'url' => ['penyakit/index']],
                
                    ['label' => 'SISTEM','options' => ['class' => 'header']],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/user'],],
                    ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            <img src="<?= Yii::getAlias('@web').'/images/pakar.jpg'; ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
              <p><?= Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                     ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['site/index'],],
                     ['label' => 'Anggota', 'icon' => 'circle-o', 'url' => ['anggota/index']],
                     ['label' => 'Penyakit', 'icon' => 'circle-o', 'url' => ['penyakit/index']],
                     ['label' => 'Pertanyaan', 'icon' => 'circle-o', 'url' => ['pertanyaan/index']],
                     ['label' => 'Diagnosa', 'icon' => 'circle-o', 'url' => ['diagnosa/index']],
                     ['label' => 'Pasien', 'icon' => 'circle-o', 'url' => ['pasien/index']],
                     ['label' => 'Diagnosa Detail', 'icon' => 'circle-o', 'url' => ['diagnosa-detail/index']],
                     ['label' => 'Jenis Kelamin', 'icon' => 'circle-o', 'url' => ['jenis-kelamin/index']],
                     ['label' => 'Tentang', 'icon' => 'circle-o', 'url' => ['tentang/index']],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/user'],],
                    ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],

                ],
                ]
      
            
    )?>
    </section>

</aside>

