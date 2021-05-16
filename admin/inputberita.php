<?php 
    error_reporting(0);
    session_start();
    include('../koneksi.php');
    
    $sesiadmin = $_SESSION['owner'];
    if(!isset($sesiadmin)){
        header('location:index.php');
    }
    $admin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin = '$sesiadmin'"));
    
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);

    $foto = $_FILES['gambar']['tmp_name']; //temporary
    $namafoto = $_FILES['gambar']['name']; //nama gambar

    $ext = strtolower(end(explode(".", $namafoto)));
    $namabaru = $judul .'.'. $ext;

    if(isset($_POST['submit'])){
        if($judul == ""){
            $judul_error = "<span style='color:red;'>Judul Wajib Diisi</span>";
        } elseif($kategori == ""){
            $kategori_error = "<span style='color:red;'>Kategori wajib diisi</span>";
        } elseif($isi == ""){
            $isi_error = "<span style='color:red;'>Deskripsi wajib diisi</span>";
        } elseif(empty($foto)){
            $gambar_error = "<span style='color:red;'>Gambar wajib diisi</span>";
        } else{
            //simpan gambar ke dalam folder gambar
            move_uploaded_file($foto, '../assets/images/berita/' .$namabaru);
            //simpan dalam database
            $tgl = date('Y-m-d H:i:s');
            $sql = mysqli_query($koneksi, "INSERT INTO tb_berita (judul, text_berita, id_admin, id_kategori, tgl_posting, dilihat, gambar)
            VALUES ('$judul','$isi','$sesiadmin','$kategori','$tgl','1','$namabaru')");
            if($sql){
                echo "<script>alert('Input Berhasil!');document.location='berita.php'</script>";
            } else{
                $gambar_error = "<span style='color:red;'>Terjadi kesalahan sistem, silakan coba lagi</span>";
            }
        }
    }
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
          <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">UpdateQ</a></h1>
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
                <h1 data-aos="fade-up" data-aos-delay="">Input Berita</h1>
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

            <h2>UpdateQ</h2>
            <p class="mb-0">Silakan input berita Anda</p>
          </div>

        </div>
        
          <div class="konten">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="name">Judul Berita</label>
                  <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" class="input" value="<?=$judul;?>">
                  <?= $judul_error;?>
                </div>
                <div class="col-md-8 form-group">
                <label for="name">Kategori Berita</label>
                </div>
                <div class="row-md-12">
                    <select name="kategori">
                        <option value="" class="form-control">-- Pilih Kategori --</option>
                            <?php
                            $sql = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                            while($row=mysqli_fetch_array($sql)){
                                if($row['id_kategori']==$kategori){
                            ?>
                            <option value="<?= $row['id_kategori'];?>" selected="selected"><?= $row['kategori'];?></option>
                        <?php } else{
                            ?>
                        <option value="<?= $row['id_kategori'];?>"><?= $row['kategori'];?></option>
                        <?php
                            }
                        }
                        ?>
                        </select>
                        <?= $kategori_error;?>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Deskripsi Berita</label>
                  <textarea class="form-control" name="isi" cols="30" rows="10" data-rule="required" placeholder="Isi Berita"><?=$isi;?></textarea>
                  <?= $isi_error;?>
                </div>
                <div class="col-md-8">
                <label for="name">Sampul Berita</label>
                </div>
                <div class="col-md-8">
                  <input type="file" name="gambar" accept=".jpg, .png, .JPEG, .JPG, .PNG">
                  <?= $gambar_error;?>
                </div>
                <div>
                <div class="col-md-16 form-group">
                  <button type="submit" name="submit" class="btn btn-primary d-block w-100">SIMPAN</a>
                </div>
                    </div> 
            </div>
            </form>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

 <?php include('footer.php'); ?>

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