<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
        <img src="<?= base_url('android-chrome-512x512.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Code Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="<?= base_url() ?>" class="nav-link <?= $active_menu === 'Páginas' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Páginas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>" class="nav-link <?= $active_page === 'inicio' ? 'active' : '' ?>">
                                <i class="fas fa-rocket nav-icon "></i>
                                <p>Início</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('starter') ?>" class="nav-link <?= $active_page === 'starter' ? 'active' : '' ?>">
                                <i class="fas fa-play-circle nav-icon"></i>
                                <p>Starter</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url() ?>" class="nav-link <?= $active_menu === 'Componentes' ? 'active' : '' ?>">
                        <i class="nav-icon nav-icon fas fa-th"></i>
                        <p>
                            Componentes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('components/card') ?>" class="nav-link <?= $active_page === 'card' ? 'active' : '' ?>">
                                <i class="fas fa-address-card nav-icon "></i>
                                <p>Card</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('components/cardbox') ?>" class="nav-link <?= $active_page === 'cardbox' ? 'active' : '' ?>">
                                <i class="fas fa-box nav-icon"></i>
                                <p>Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('components/carousel') ?>" class="nav-link <?= $active_page === 'carousel' ? 'active' : '' ?>">
                                <i class="fas fa-sliders-h nav-icon"></i>
                                <p>Carousel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('components/alert') ?>" class="nav-link <?= $active_page === 'alert' ? 'active' : '' ?>">
                                <i class="fas fa-exclamation-circle nav-icon"></i>
                                <p>Alert</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('components/table') ?>" class="nav-link <?= $active_page === 'table' ? 'active' : '' ?>">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('components/social') ?>" class="nav-link <?= $active_page === 'social' ? 'active' : '' ?>">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Social</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/Brunin12" target="_blank" class="nav-link">
                        <i class="nav-icon fab fa-github"></i>
                        <p>
                            Github
                            <span class="right badge badge-danger">Projects</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>