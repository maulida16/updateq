<?php

include('koneksi.php');

// membaca id artikel
$idberita = $_GET['id'];

// membaca data detail artikel berdasarkan id artikel
$hasil = mysqli_query($koneksi, "SELECT * FROM tb_berita, tb_admin, tb_kategori WHERE tb_berita.id_admin=tb_admin.id_admin AND id_berita = '$idberita'");
$data  = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UpdateQ | Situs Berita ter-Update</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand - v2.2.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 <!-- ======= Mobile Menu ======= -->
 <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ======= Header ======= -->
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">UpdateQ</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="index.php" class="nav-link">Home</a></li>
              <li><a href="admin/index.php" class="nav-link">Login Admin</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>

  <main id="main">

    <!-- ======= Single Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-10 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay=""><?= $data['judul']; ?></h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?= $data['tgl_posting']; ?> &bullet; By <a href="#" class="text-white"><?=$data['nama_lengkap']?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="site-section mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
            <div class="row mb-5">
              <div class="col-md-6">
                <figure><img src="assets/images/berita/<?=$data['gambar'];?>" alt="<?= $data['judul']; ?>" class="img-fluid">
                  <figcaption>This is an image caption</figcaption>
                </figure>
              </div>
            </div>
            <p><?=$data['text_berita']?></p>
              <div class="pt-5">
              <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
            </div>

            <div class="pt-5">
              <ul class="comment-list">
            </div>

          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="tiktok.php">TikTok</a></li>
                <li><a href="instagram.php">Instagram</a></li>
                <li><a href="twitter.php">Twitter</a></li>
                <li><a href="youtube.php">Youtube</a></li>
                <? } ?>
              </div>
            </div>
            <div class="sidebar-box">
              <h3>About The Author</h3>
              <p>Author mungkin tidak seterkenal Siti Badriah, Ayu Ting-Ting, maupun Upin dan Ipin. Akan tetapi, author pasti terkenal banget dihati kalian kan?? Kyaa >.< <br>#jadimaloe</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include('footer.php'); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>