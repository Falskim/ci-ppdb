<section role="main" class="content-body">
    <header class="page-header">
        <h2>Set Pengumuman</h2>
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
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
            </div>

            <h2 class="panel-title">Upload Panduan</h2>
        </header>
        <div class="panel-body">
            <form method="post" action="<?= base_url('admin_dash/tambah_data'); ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="w4-panduan">Upload Panduan:</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control" name="panduan" id="panduan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>