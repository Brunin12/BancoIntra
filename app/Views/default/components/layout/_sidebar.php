<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
        <img src="<?= base_url('android-chrome-512x512.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Banco Intra</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="<?= base_url() ?>" class="nav-link <?= isset($active_menu) &&$active_menu === 'Páginas' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Páginas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>" class="nav-link <?= isset($active_page) && $active_page === 'inicio' ? 'active' : '' ?>">
                                <i class="fas fa-rocket nav-icon "></i>
                                <p>Início</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('profile') ?>" class="nav-link <?= isset($active_page) && $active_page === 'perfil' ? 'active' : '' ?>">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Perfil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url() ?>" class="nav-link <?= isset($active_menu) &&$active_menu === 'Movimentação' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-money-bill-alt"></i>
                        <p>
                            Movimentação
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('register/movement') ?>" class="nav-link <?= isset($active_page) && $active_page === 'registrar' ? 'active' : '' ?>">
                                <i class="fas fa-pen nav-icon "></i>
                                <p>Registrar</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>