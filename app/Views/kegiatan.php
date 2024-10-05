<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kegiatan - MI Attaqwa 28</title>
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

<body class="courses-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
                <img src="<?= base_url('dashboard/img/logo.png') ?>" alt="">
                <h1 class="sitename">MI ATTAQWA 28</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= base_url('/') ?>">Beranda<br></a></li>
                    <li><a href="<?= base_url('/profil') ?>">Profil</a></li>
                    <li><a href="<?= base_url('/kegiatan') ?>" class="active">Kegiatan</a></li>
                    <li><a href="<?= base_url('/galeri') ?>">Galeri</a></li>
                    <li><a href="<?= base_url('/kontak') ?>">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <!-- <a class="btn-getstarted" href="courses.html">Get Started</a> -->
            <?php if (session()->has('isLoggedIn')) { ?>
                <a class="btn-getstarted" href="<?= base_url('/admin') ?>">Dashboard</a>
            <?php } ?>
        </div>
    </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?= base_url('/') ?>">Beranda</a></li>
                    <li class="current">Kegiatan</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title --> 

    <!-- Courses Section -->
    <section id="courses" class="courses section pt-4">
        <div class="container">
            
            <?php if (!empty($listBerita)): ?>
            <div class="row">
            <?php foreach ($listBerita as $news): ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                    <a href="<?= base_url('kegiatan/' . esc($news['slug'])) ?>">
                        <img src="<?= esc('uploads/thumbnail/' . $news['thumbnail']) ?>" class="img-fluid" alt="Gambar Thumbnail Kegiatan" style="height: 300px; object-fit: cover; width: -webkit-fill-available;">
                    </a>
                    <div class="course-content">
                        <h3><a href="<?= base_url('kegiatan/' . esc($news['slug'])) ?>"><?= esc($news['title']) ?></a></h3>
                        <p class="description"><?= esc($news['summary']) ?></p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('kegiatan/' . esc($news['slug'])) ?>" class="category"><span>Selengkapnya </span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    </div>
                </div> 
            <?php endforeach; ?>
            <!-- End Course Item-->
            
            </div>
            <?php else: ?>
                <p>Tidak ada berita terbaru.</p>
            <?php endif; ?>

        </div>
    </section>
    <!-- /Courses Section -->

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/62881012238545" target="_blank" class="whatsapp-float">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png') ?>" alt="Chat on WhatsApp" class="native-image">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppSquare1.png') ?>" alt="Chat on WhatsApp" class="responsive-image">
    </a>

  </main>

  <?= view('layouts/footer') ?>