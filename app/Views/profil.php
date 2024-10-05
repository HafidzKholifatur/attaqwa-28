<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profil - MI Attaqwa 28</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('/img/logo-mi-28.png') ?>" rel="icon">
  <link href="<?= base_url('/img/logo-mi-28.png') ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('/css/main.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: May 18 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>

    /* Floating WhatsApp Button */
    .whatsapp-float {
      position: fixed;
      bottom: 80px;
      right: 20px;
      z-index: 100;
    }

    .whatsapp-float .native-image {
      width: auto;
      height: 50px;
      /* border-radius: 50%; */
    }

    .whatsapp-float .responsive-image {
      display: none;
    }

    @media (max-width: 991px) {
      .sitename {
        display: none;
      }

      .whatsapp-float .native-image {
        display: none;
      }

      .whatsapp-float .responsive-image {
        width: auto;
        height: 50px;
        display: block;
      } 
    }

  </style>
</head>

<body class="about-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
        <img src="<?= base_url('dashboard/img/logo.png') ?>" alt="">
        <h1 class="sitename">MI ATTAQWA 28</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('/') ?>">Beranda<br></a></li>
          <li><a href="<?= base_url('/profil') ?>" class="active">Profil</a></li>
          <li><a href="<?= base_url('/kegiatan') ?>">Kegiatan</a></li>
          <li><a href="<?= base_url('/galeri') ?>">Galeri</a></li>
          <li><a href="<?= base_url('/kontak') ?>">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <?php if (session()->has('isLoggedIn')) { ?>
        <a class="btn-getstarted" href="<?= base_url('/admin') ?>">Dashboard</a>
      <?php } ?>
      <!-- <a class="btn-getstarted" href="courses.html">Get Started</a> -->

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li class="current">Profil<br></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Profil Sejarah -->
    <section id="about-us" class="section about-us pt-5">
        <div class="container">
            <div class="row gy-4">
                <!-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?= base_url('/img/about-2.jpg')?>" class="img-fluid" alt="">
                </div> -->
                <div class="col-lg-12 order-2 order-lg-1 content text-center" data-aos="fade-up" data-aos-delay="200">
                    <h3>Profil MI Attaqwa 28</h3><br>
                    <p class="">
                        MI Attaqwa beralamat di Kp. Cakung Payangan RT01 RW05 Jatiasih, Jl. Wibawa Mukti II, RT.001/RW.005, Jatisari, Kec. Jatiasih, Kota Bks, Jawa Barat 17426.
                        <br><br>
                        MI Attaqwa 28, didirikan oleh Yayasan Attaqwa pada tahun 1991, adalah sebuah Madrasah Ibtidaiyah yang menggabungkan pendidikan agama, umum, dan akhlak. Mengikuti kurikulum pemerintah dengan tambahan mata pelajaran agama, sekolah ini bertujuan mengajarkan kaidah-kaidah Islam kepada siswa-siswinya. Selain itu, MI Attaqwa 28 menawarkan berbagai kegiatan ekstrakurikuler untuk mendukung pembelajaran di luar kelas. Sekolah ini terus berupaya meningkatkan fasilitas dan kinerjanya demi memberikan pengajaran yang lebih baik di masa depan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Profil Sejarah -->

    <!--Visi & Misi -->
    <section id="about-us" class="section about-us" style="padding-top: 0px;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?= base_url('/img/attaqwa-28.jpg')?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-2 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Visi & Misi</h3>
                    <hr>
                    <h5 class="fw-bold">Visi</h5>
                    <p class="fst-italic">
                        "Unggul dalam Prestasi dan Mulia dalam Berakhlak."
                    </p>
                    <h5 class="fw-bold">Misi</h5>
                    <ul>
                        <li><i class="bi bi-circle"></i> <span>Meningkatkan pembelajaran agama, umum dan aqidah akhlak.</span></li>
                        <li><i class="bi bi-circle"></i> <span>Menerapkan akhlakul karimah dalam lingkungan sekolah, keluarga dan masyarakat.</span></li>
                        <li><i class="bi bi-circle"></i> <span>Meningkatkan motivasi dan kreatifitas siswa dalam belajar.</span></li>
                        <li><i class="bi bi-circle"></i> <span>Menyalurkan bakat dan motivasi siswa sesuai dengan potensi yang mereka miliki.</span></li>
                        <li><i class="bi bi-circle"></i> <span>Membiasakan hidup disiplin dalam belajar, berpakaian dan keluar sekolah.</span></li>
                        <li><i class="bi bi-circle"></i> <span>Bertekad untuk meningkatkan dan merealisasikan program sekolah.</span></li>
                        <li><i class="bi bi-circle"></i> <span>Membekali para siswa dengan ilmu pengetahuan dan teknologi serta iman dan taqwa.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Visi & Misi -->

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/62881012238545" target="_blank" class="whatsapp-float">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png') ?>" alt="Chat on WhatsApp" class="native-image">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppSquare1.png') ?>" alt="Chat on WhatsApp" class="responsive-image">
    </a>

  </main>

  <?= view('layouts/footer') ?>