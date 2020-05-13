<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />


<section role="main" class="content-body">
    <header class="page-header">
        <h2>Data Pendaftar</h2>
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
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Data Pendaftar</h2>
        </header>
        <?php if ($this->session->flashdata('flash')) : ?>
            <!-- <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="alert alert-succes alert-dismissible fade show" role="alert">
                            Data <strong>Berhasil</strong> <?= $this->session->flashdata(); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>-->
        <?php endif; ?>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <p><a href="<?= base_url(); ?>admin_dash/tambah_daftar" class="btn btn-primary">Add <i class="fa fa-plus"></i></a></p>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="pendaftar" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">Nama Siswa</th>
                            <th onclick="sortTable(1)">NISN</th>
                            <th>Prodi</th>
                            <th>Asal Sekolah</th>
                            <th>Action</th>
                            <th colspan="2">Status Lolos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $ssw) : ?>
                            <tr>
                                <td><?= $ssw['Nama_Siswa'] ?></td>
                                <td><?= $ssw['NISN'] ?></td>
                                <td><?= $ssw['Prodi'] ?></td>
                                <td><?= $ssw['Asal_Sekolah'] ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>admin_dash/detail/<?= $ssw['id']; ?>"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url(); ?>admin_dash/edit/<?= $ssw['id']; ?>"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url(); ?>admin_dash/hapus/<?= $ssw['id']; ?>" onclick="return confirm('Yakin untuk menghapus ?');"><i class="fa fa-trash-o"></i></a>
                                </td>

                                <!-- 'status_lolos' pending (0)-->
                                <?php if ($ssw['status_lolos'] == 0) : ?>
                                    <td class="text-center">
                                        <span class="text-warning"> Pending </span>
                                    </td>
                                    <td>
                                        <a class="mb-xs mt-xs mr-xs btn-sm modal-basic btn btn-warning" name="verif" href="#verif" onclick="updateStudentID(this)" data-student="<?= $ssw['id'] ?>">Verifikasi</a>
                                    </td>
                                    <!-- 'status_lolos' = lolos (1)-->
                                <?php else : ?>
                                    <td class="text-center">
                                        <span class="text-success"> Lolos </span>
                                    </td>
                                    <td>
                                        <a class="mb-xs mt-xs mr-xs btn-sm modal-basic btn btn-success">Approved</a>
                                    </td>
                                <?php endif ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="verif" class="modal-block modal-header-color modal-block-warning mfp-hide">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Apakah anda yakin ?</h2>
                </header>
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-question-circle"></i>
                        </div>
                        <div class="modal-text">
                            <h4>Verifikasi</h4>
                            <p>Apakah anda yakin untuk memverifikasi ?</p>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="<?= base_url(); ?>admin_dash/detail/<?= $ssw['id']; ?>">
                                <form id="modal-test" class="approval" action="<?= base_url('admin_dash/approve_siswa/'); ?>">
                                    <input type="submit" name="" value="SETUJUI">
                                </form>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
    </section>
    <!-- end: page -->
    <script>
        function updateStudentID(el) {
            document.getElementById('modal-test').action = document.getElementById('modal-test').action + el.dataset.student;
        }
    </script>
</section>