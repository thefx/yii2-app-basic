<?php

use yii\helpers\Url;

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/" class="brand-link">
        <span class="brand-text font-weight-light">Административная панель</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact-" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-header text-uppercase">Страницы</li>

                <li class="nav-item">
                    <a href="<?= Url::to('/pages/') ?>" class="nav-link">
                        <i class="fas fa-file nav-icon"></i>
                        <p>Страницы</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase">Разделы</li>

                <?php foreach ($blocks as $block) : ?>
                    <li class="nav-item">
                        <a href="<?= Url::to(['/blocks/block-category/index', 'parent_id' => $block->category->id]) ?>" class="nav-link">
                            <i class="fas fa-folder-open nav-icon"></i>
                            <p><?= $block->title ?></p>
                        </a>
                    </li>
                <?php endforeach; ?>

                <li class="nav-header text-uppercase">Администрирование</li>

                <li class="nav-item">
                    <a href="<?= Url::to('/blocks/block/index') ?>" class="nav-link">
                        <i class="fas fa-cog nav-icon"></i>
                        <p>Настройка блоков</p>
                    </a>
                </li>
                <li class="nav-header text-uppercase">Пользователь</li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/user/default/logout']) ?>" class="nav-link" data-method="post">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Выйти
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>