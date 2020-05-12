<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="#" class="logo">
                    <img src="<?= base_url(); ?>assets/assets/images/logo fix.png" height="35" alt="JSOFT Admin" />
                    | PPDB SMK ATM
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#"><i class="fa fa-power-off"></i> Ganti Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="<?= base_url(); ?>siswa_dash/index">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="#">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        <span>Detail Siswa</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="<?= base_url(); ?>siswa_dash/pengumuman">
                                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                        <span>Pengumuman</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="#">
                                        <i class="fa fa-fax" aria-hidden="true"></i>
                                        <span>Cetak Formulir</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="<?= base_url('download/lakukan_download'); ?>">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <span>Download Panduan</span>
                                    </a>
                                </li>

                            </ul>
                        </nav>

                        <hr class="separator" />

                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="#">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <hr class="separator" />
                    </div>

                </div>

            </aside>