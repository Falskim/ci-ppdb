<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="<?= base_url(); ?>admin_dash/index">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
            </ol>
        </div>
    </header>
    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-dark">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-dark">
                                        <i class="fa fa-list-ol"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <div class="info">
                                            <strong class="amount">Pendaftar</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="<?= base_url(); ?>admin_dash/pendaftar">(Lihat)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-warning">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-warning">
                                        <i class="fa fa-bullhorn"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <div class="info">
                                            <a href="<?= base_url(); ?>pengumuman.php"></a>
                                            <strong class="amount">Edit Pengumuman</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(Lihat)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="alert alert-info fade in nomargin">
            <h4>Akses Pendaftaran</h4>
            <button class="btn btn-info mt-xs mb-xs" type="button">Buka Pendaftaran</button>
            <button class="btn btn-danger mt-xs mb-xs" type="button">Tutup Pendaftaran</button>
            <h6>Status Pendaftaran dibuka</h6>
            </p>
        </div>
    </div>
    <!-- end page -->
</section>
</div>


</section>