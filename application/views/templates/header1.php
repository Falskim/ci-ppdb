<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $judul; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.theme.default.min.css">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <!-- Modernizr JS -->
    <script src="<?= base_url(); ?>assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- datatables -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <Script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

</head>

<body>

    <div class="colorlib-loader"></div>
    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="upper-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>Penerimaan Peserta Didik Baru Online SMK Auliya Teladan Mandiri</p>
                        </div>
                        <div class="col-xs-6 col-md-push-2 text-right">
                            <p>
                                <ul class="colorlib-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </p>
                            <p class="btn-apply"><a href="<?= base_url(); ?>home/kontak_kami">Kontak Kami</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="colorlib-logo">
                                <a href="<?= base_url(); ?>home/index"><img alt="Gambar Logo" src="<?= base_url('assets/'); ?>images/logo fix.png" height="45" width="45" /> | PPDB ONLINE SMK ATM</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-right menu-1">
                            <ul>
                                <li><a href="<?= base_url(); ?>home/index">Home</a></li>
                                <li><a href="<?= base_url(); ?>home/info_ppdb">Info PPDB</a></li>
                                <li><a href="<?= base_url(); ?>home/cek_status">Cek Status</a></li>
                                <li><a href="<?= base_url(); ?>home/kontak_kami">Kontak Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>