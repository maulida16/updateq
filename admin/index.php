<?php 
    error_reporting(0);
    session_start();
    include('../koneksi.php');

    $sesiadmin = $_SESSION['owner'];
    if(isset($sesiadmin)){
        header('location:home.php');
    }
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $passmd5 = md5($pass); 

    if(isset($_POST['submit'])){
        if($user == ""){
            $user_error = "<span style='color:#fff;'>User wajib diisi</span>";
        } elseif($pass == ""){
            $pass_error = "<span style='color:#fff;'>Password wajib diisi</span>";
        } else {
            $cekadmin = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$user' AND password='$passmd5'");
            $row = mysqli_fetch_array($cekadmin);
            $idadmin = $row['id_admin'];
            $ada = mysqli_num_rows($cekadmin);
            if($ada > 0){
                $_SESSION['webportal'] = $user;
                $_SESSION['owner'] = $idadmin;
                echo "<script>alert('Selamat Datang!');document.location='home.php'</script>";
            } else {
                $pass_error = "<span style='color:#fff;'>User dan Password Salah!</span>";
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
          <h1 class="mb-0 site-logo"><a href="../index.php" class="mb-0">UpdateQ</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
          <li class="active"><a href="../index.php" class="nav-link">Home</a></li>
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
                <h1 data-aos="fade-up" data-aos-delay="">Login Admin</h1>
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

            <h2>Login</h2>
            <p class="mb-0">Anda bukan admin UpdateQ? Mohon minggir duls.</p>
          </div>

        </div>
        
          <table class="login">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="" method="POST">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="name">User</label>
                  <input type="text" name="user" class="form-control" placeholder="Masukkan User Admin" class="input" value="<?=$user;?>">
                  <?= $user_error;?>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Masukkan Password Admin" class="input" value="<?=$pass;?>">
                  <?= $pass_error;?>
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" name="submit" class="btn btn-primary d-block w-100">LOGIN</a>
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

<?php include('../footer.php');?>

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