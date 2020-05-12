<section role="main" class="content-body">
    <header class="page-header">
        <h2>Ubah Password</h2>


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
    <div class="col-md-6">
        <form id="form1" class="form-horizontal">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Email: </label>
                    <div class="col-sm-8">
                        <input type="email" name="email_user" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Password Lama: </label>
                    <div class="col-sm-8">
                        <input type="text" name="pw1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Password Baru: </label>
                    <div class="col-sm-8">
                        <input type="text" name="pw2" class="form-control">
                    </div>
                </div>
            </div>
            <footer class="panel-footer">
                <button type="reset" class="btn btn-default">Reset</button>
            </footer>
        </form>
    </div>