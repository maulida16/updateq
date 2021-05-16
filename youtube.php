<?php 
include('koneksi.php');

?>

<?php include('header.php');?>

<main id="main">

    <!-- ======= Blog Section ======= -->
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
                <h1 data-aos="fade-up" data-aos-delay="">UpdateQ</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berita Ter Up-to-Date dari Seluruh Sosial Media</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    
    <section class="section">
      <div class="container mr-6">
      <div class="row mb-5">
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM tb_berita, tb_admin WHERE tb_berita.id_admin=tb_admin.id_admin AND tb_berita.id_kategori='4'"); 
        while($row = mysqli_fetch_array($data)){
        ?>
        <div class="col-md-4">
          <div class="post-entry">
          <a href="artikel.php?id=<?php echo $row['id_berita'];?>" class="d-block mb-4">
            <img src="assets/images/berita/<?=$row['gambar'];?>" alt="<?=$row['judul'];?>" class="img-fluid" style="height:350px; weight:350px;">
          </a>
          <div class="post-text">
            <span class="post-meta"><?= $row['tgl_posting'];?> &bullet; By <?= $row['nama_lengkap']?></span>
            <h3><a href="artikel.php?id=<?php echo $row['id_berita'];?>"><?=$row['judul'];?></a></h3>
            <p><?= substr($row['text_berita'],0,200);?>...</p>
            <p><a href="artikel.php?id=<?php echo $row['id_berita'];?>" class="readmore">Read more</a></p>
          </div>
          </div>
        </div>
        <?php } ?>
      </div>
      </div>
  </section>

    <div class="row">
          <div class="col-12 text-center">
            <span class="p-3 active text-primary">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
          </div>
        </div>
      </div>

    </main><!-- End #main -->

  <?php include('footer.php');?>

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