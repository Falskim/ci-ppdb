<body>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="<?= base_url(); ?>home/index" class="logo pull-left">
                <img src="<?= base_url(); ?>assets/assets/images/logo fix.png" height="54" alt="Porto Admin" />
                | PPDB SMK ATM
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Log In</h2>
                </div>
                <div class="panel-body">
                    <form action="<?= base_url(); ?>home/index" method="post">
                        <div class="form-group mb-lg">
                            <label>Username</label>
                            <div class="input-group input-group-icon">
                                <input name="username" type="text" class="form-control input-lg" />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <label class="pull-left">Password</label>
                                <a href="<?= base_url(); ?>auth/ubah_pw" class="pull-right">Lupa Password?</a>
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="pwd" type="password" class="form-control input-lg" />
                                <span class="input-group-addon">
                                    <span class="icon icon-lg">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 text-left">
                                <button type="submit" class="btn btn-primary hidden-xs">Log In</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Log In</button>
                            </div>
                        </div>
                        <p class="text-center">Belum Punya Akun? <a href="<?= base_url(); ?>auth/form_daftar">Silakan Isi Form Sebagai Calon Siswa!</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end: page -->