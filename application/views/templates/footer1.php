<footer id="colorlib-footer">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 colorlib-widget">
                <h4>Keterangan</h4>
                <p>Bila menemukan kesulitan dalam melakukan pendaftaran. Silakan hubungi
                    kontak kami yang telah tersedia. Klik icon dibawah ini atau pada navbar
                    paling atas.
                </p>
                <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                </p>
            </div>
            <div class="col-md-3 colorlib-widget">
                <h4>Quick Links</h4>
                <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="<?= base_url(); ?>home/index"><i class="icon-check"></i> Home</a></li>
                        <li><a href="<?= base_url(); ?>home/info_ppdb"><i class="icon-check"></i> Info PPDB</a></li>
                        <li><a href="#"><i class="icon-check"></i> Tentang Sekolah</a></li>
                        <li><a href="<?= base_url(); ?>home/panduan"><i class="icon-check"></i> Panduan Singkat</a></li>
                        <li><a href="<?= base_url(); ?>home/kontak_kami"><i class="icon-check"></i> Kontak Kami</a></li>
                    </ul>
                </p>
            </div>

            <div class="col-md-3 colorlib-widget">
                <h4>Kontak Info</h4>
                <ul class="colorlib-footer-links">
                    <li>Jl.Babakan Randu, RT 05, RW 02, Desa Lemah Sugih, Kecamatan Lemah Sugih,
                        Kabupaten Majalengka </li>
                    <li><a href="<?= base_url('assets/'); ?>tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a>
                    </li>
                    <li><a href="#"><i class="icon-envelope"></i>
                            info@yoursite.com</a></li>
                    <li><a href="#"><i class="icon-location4"></i>
                            yourwebsite.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?= base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?= base_url('assets/'); ?>js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="<?= base_url('assets/'); ?>js/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="<?= base_url('assets/'); ?>js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="<?= base_url('assets/'); ?>js/jquery.countTo.js"></script>
<!-- Main -->
<script src="<?= base_url('assets/'); ?>js/main.js"></script>

<!--datatables-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#cek_status').DataTable();
    })
</script>

</body>

</html>