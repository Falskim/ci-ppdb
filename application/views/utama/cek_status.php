<div class="colorlib-blog colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center colorlib-heading animate-box">
                <h2>Status Pendaftar</h2>
                <div class="table-responsive">
                    <table id="cek_status" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th onclick="sortTable(0)">Nama Siswa</th>
                                <th onclick="sortTable(1)">NISN</th>
                                <th>Prodi</th>
                                <th>Asal Sekolah</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($siswa as $ssw) : ?>
                                <tr>
                                    <td><?= $ssw['Nama_Siswa'] ?></td>
                                    <td><?= $ssw['NISN'] ?></td>
                                    <td><?= $ssw['Prodi'] ?></td>
                                    <td><?= $ssw['Asal_Sekolah'] ?></td>
                                    <td>
                                        <a class="btn" href="<?= base_url(); ?>home/detail_pendaftar/<?= $ssw['id']; ?>">Detail</a>
                                    </td>
                                    <td>
                                        <a class="btn-cta" href="#verif">Lulus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>