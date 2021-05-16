<?php 
    error_reporting(0);
    session_start();
    include('../koneksi.php');
    
    $sesiadmin = $_SESSION['owner'];
    if(!isset($sesiadmin)){
        header('location:index.php');
    }
    $admin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin = '$sesiadmin'"));

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
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
      <h1 class="mb-0 site-logo"><a href="home.php" class="mb-0">UpdateQ</a></h1>
    </div>

    <div class="col-12 col-md-10 d-none d-lg-block">
      <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
          <li class="active"><a href="home.php" class="nav-link">Home</a></li>
          <li><a href="berita.php" class="nav-link">Berita</a></li>
          <li><a href="logout.php" class="nav-link">Logout</a></li>
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
          <div class="col-md-7 text-center hero-text">
            <h1 data-aos="fade-up" data-aos-delay="">Admin Space</h1>
            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Selamat Datang, <?= $admin['nama_lengkap']?> [<?= $admin['username']?>] di Ruang Admin</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h2>List Berita</h2>
            <p class="mb-0"><a href="inputberita.php" title="Tambah berita">Tambah Berita</a></p>
          </div>
        </div>
      <div class="container">
        <table border="1" width="100%">
        <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Judul</center></th>
                        <th><center>Kategori</center></th>
                        <th><center>Deskripsi</center></th>
                        <th><center>Penulis</center></th>
                        <th><center>Tanggal Posting</center></th>
                        <th><center>Gambar</center></th>
                        <th><center>Actions</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tb_berita, tb_kategori, tb_admin WHERE tb_berita.id_kategori=tb_kategori.id_kategori AND tb_berita.id_admin=tb_admin.id_admin");
                        while($row=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                      <td><center><?=$row['id_berita'];?></center></td>
                      <td><center><?=$row['judul'];?></center></td>
                      <td><center><?=$row['kategori'];?></center></td>  
                      <td><center><?=$row['text_berita'];?></center></td>  
                      <td><center><?=$row['username'];?></center></td>  
                      <td><center><?=$row['tgl_posting'];?></center></td>   
                      <td><center><img src="../assets/images/berita/<?=$row['gambar'];?>" style="width:80px; height:80px;"></center></td>
                      <td><center><a href="editberita.php?id=<?= $row['id_berita'];?>" title="Edit">Edit</a><br><a href="hapusberita.php?id=<?= $row['id_berita'];?>" title="Hapus">Hapus</a></center></td>   
                    <tr>
                    <?php } ?>
                </tbody>
         </div>
    </div>
</section>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>