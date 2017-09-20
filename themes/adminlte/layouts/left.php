<?php
use yii\helpers\Html;
?>


<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/polindra.png'; ?>" class="img-circle" alt="User Image"/>
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
                    ['label' => 'Penerbit', 'icon' => 'refresh', 'url' => ['penerbit/index']],
                    ['label' => 'Peminjaman', 'icon' => 'clock-o', 'url' => ['peminjaman/index']],
                    ['label' => 'Penulis', 'icon' => 'clock-o', 'url' => ['penulis/index']],

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
               <img src="<?= Yii::getAlias('@web').'/images/polindra.png'; ?>" class="img-circle" alt="User Image"/>
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
                     [
                        'label' => 'Master Buku',
                        'icon' => 'th',
                        'url' => '#',
                        'items' => [
                     ['label' => 'Buku', 'icon' => 'circle-o', 'url' => ['buku/index']],
                     ['label' => 'Peminjaman', 'icon' => 'circle-o', 'url' => ['peminjaman/index']],
                     ['label' => 'Penerbit', 'icon' => 'circle-o', 'url' => ['penerbit/index']],
                     ['label' => 'Penulis', 'icon' => 'circle-o', 'url' => ['penulis/index']],
                     ['label' => 'Jenis', 'icon' => 'circle-o', 'url' => ['jenis/index']],
                     
                     ['label' => 'SISTEM','options' => ['class' => 'header']],
                      [
                        'label' => 'Sistem',
                        'icon' => 'th',
                        'url' => '#',
                        'items' => [
                     ['label' => 'User', 'icon' => 'user', 'url' => ['/user'],],
                     ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],  
                ],
                ],
                ],
                ],
            ]
            ]
        ) ?>

    </section>

</aside>
