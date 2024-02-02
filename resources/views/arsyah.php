<?php 

require 'functions.php';
$menu = query("SELECT * FROM menu");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kuliner Situbondo</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/SAVE_20201125_205928.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="asset/css/newstyle.css"> -->

  <!-- =======================================================
  * Template Name: Restaurantly - v1.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">KULINER SITUBONDO</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#menu">Macam-macam Makanan</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Web KULINER SUTUBONDO</span></h1>
          <div>Memasak dulu kawan</div>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Macam-macam Makanan</a>
          </div>
        </div>
        

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/Untitled-1.png" alt="" >
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Tentang Situbondo :</h3>
            <p class="font-italic">
               Kebhupatèn Situbondo adalah sebuah kabupaten di Jawa Timur, Indonesia dengan pusat pemerintahan dan ibu kota kabupaten terletak di Kecamatan Situbondo.

            Kabupaten ini terletak di daerah pesisir utara pulau Jawa, di kawasan Tapal Kuda dan dikelilingi oleh perkebunan tebu, tembakau, hutan lindung Baluran dan lokasi usaha perikanan. Dengan letaknya yang strategis, di tengah jalur transportasi darat Jawa-Bali, kegiatan perekonomiannya tampak aktif. Situbondo mempunyai pelabuhan Panarukan yang terkenal sebagai ujung timur dari Jalan Raya Pos Anyer-Panarukan di pulau Jawa yang dibangun oleh Daendels pada era kolonial Belanda.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i>Situbondo adalah kota santri.</li>
              <li><i class="icofont-check-circled"></i>Situbondo kaya dengan Sumber Daya Alam.</li>
              <li><i class="icofont-check-circled"></i>Situbondo kaya akan adat istiadat.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Macam-macam</h2>
          <p>Makanan Khas Situbondo</p>
        </div>

        

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <?php foreach ( $menu as $row ) : ?>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="img/<?= $row["gambar"]; ?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="menu+.php?id=<?= $row["id_menu"]; ?>""><?= $row["nama_menu"]; ?></a>
            </div> 
            <div class="menu-ingredients">
              <?= $row["keterangan"]; ?>
            </div>
          </div>

          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Menu Section -->

   
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Wisata Situbondo</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata1.png" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata2.png" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata4.png" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata4.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/wisata8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/wisata8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8019365469936!2d114.02027701477752!3d-7.704391894446276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd72913794cd71b%3A0xf2c109858d295d0d!2sSMKN%201%20Panji!5e0!3m2!1sid!2sid!4v1606311434633!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>


      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Jl. Gunung Arjuno No.17, Mimbaan Tengah, Mimbaan, Kec. Panji, Kabupaten Situbondo, Jawa Timur 68322</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>arsasaja2@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>081335000775</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  

    
       </div><div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>aarsyah0</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href=>Arsyah</a> 
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>