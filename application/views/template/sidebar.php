<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= base_url('vendor/dist/')?>index.html"><img src="<?= base_url('vendor/dist/')?>assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="<?= base_url('vendor/dist/')?>#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active ">
                            <a href="<?= base_url('vendor/dist/')?>index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= base_url('vendor/dist/')?>index.html" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Tulis</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('vendor/dist/')?>#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Surat</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>component-alert.html">Surat Masuk</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>component-badge.html">Surat Keluar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('vendor/dist/')?>#" class='sidebar-link'>
                                <i class="bi bi-file-check-fill"></i>
                                <span>Approval</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>component-alert.html">Approval Surat</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>component-badge.html">Dalam Proses</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('vendor/dist/')?>#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Disposisi</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>extra-component-avatar.html">Disposisi Masuk</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>extra-component-sweetalert.html">Disposisi Keluar</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="<?= base_url('vendor/dist/')?>#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Draft</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>layout-default.html">Draft</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>layout-vertical-1-column.html">Dalam Pengajuan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?= base_url('vendor/dist/')?>layout-vertical-navbar.html">Ditolak</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= base_url('vendor/dist/')?>" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>