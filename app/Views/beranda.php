<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MI Attaqwa 28</title>
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

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: May 18 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
        <img src="<?= base_url('dashboard/img/logo.png') ?>" alt="">
        <h1 class="sitename">MI ATTAQWA 28</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('/') ?>" class="active">Beranda<br></a></li>
          <li><a href="<?= base_url('/profil') ?>">Profil</a></li>
          <li><a href="<?= base_url('/kegiatan') ?>">Kegiatan</a></li>
          <li><a href="<?= base_url('/galeri') ?>">Galeri</a></li>
          <li><a href="<?= base_url('/kontak') ?>">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <?php if (session()->has('isLoggedIn')) { ?>
        <a class="btn-getstarted" href="<?= base_url('/admin') ?>">Dashboard</a>
      <?php } ?>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <!-- <img src="<?= base_url('/img/hero-bg.jpg') ?>" alt="" data-aos="fade-in"> -->
      <img src="<?= base_url('/img/banner/attaqwa-28-banner.jpg') ?>" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100" class="">Unggul Dalam Prestasi,<br>Mulia Dalam Berakhlak</h2>
        <!-- <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p> -->
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="<?= base_url('/profil') ?>" class="btn-get-started">Profil MI ATTAQWA 28</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section" style="padding-bottom: 0px;">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="<?= base_url('/img/mi-attaqwa-28-field.jpg') ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3 class="mb-4">Profil Singkat MI ATTAQWA 28</h3>
            <p class="mb-4" style="text-align: justify;">
            MI Attaqwa 28, didirikan oleh Yayasan Attaqwa pada tahun 1991, adalah sebuah Madrasah Ibtidaiyah yang menggabungkan pendidikan agama, umum, dan akhlak. Mengikuti kurikulum pemerintah dengan tambahan mata pelajaran agama, sekolah ini bertujuan mengajarkan kaidah-kaidah Islam kepada siswa-siswinya. Selain itu, MI Attaqwa 28 menawarkan berbagai kegiatan ekstrakurikuler untuk mendukung pembelajaran di luar kelas. Sekolah ini terus berupaya meningkatkan fasilitas dan kinerjanya demi memberikan pengajaran yang lebih baik di masa depan.
            <br><br>
            MI Attaqwa beralamat di Kp. Cakung Payangan RT01 RW05 Jatiasih, Jl. Wibawa Mukti II, RT.001/RW.005, Jatisari, Kec. Jatiasih, Kota Bks, Jawa Barat 17426.
            </p>
            <a href="<?= base_url('/profil') ?>" class="read-more"><span>Profil Lengkap</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Keunggulan<br>MI ATTAQWA 28</h3>
              <p style="text-align: justify;">
                Sebagai Madrasah Ibtidaiyah (MI) yang setingkat dengan Sekolah Dasar (SD), MI Attaqwa 28 memiliki keunggulannya sendiri sebagai pencerminan dari visi dan misi yang ditetapkan oleh sekolah.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-star"></i>
                  <h4>Akreditasi A</h4>
                  <p>MI Attaqwa 28 memiliki <b>Akreditasi A</b> yang telah diverifikasi oleh KEMDIKBUD.</p><br>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Pembelajaran Agama</h4>
                  <p>MI Attaqwa 28 menerapkan pembelajaran agama, umum dan aqidah akhlak.</p><br>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Penyaluran Bakat</h4>
                  <p>MI Attaqwa 28 menyalurkan bakat dan motivasi siswa sesuai dengan potensi yang mereka miliki dan minati.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Ekskul</h2>
        <p class="">Ekstrakurikuler</p>
      </div>
      <!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-compass" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Pramuka</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-yelp" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">Bulu tangkis</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-noise-reduction" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Futsal</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-flag" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">Paskibra</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-brilliance" style="color: #47aeff;"></i>
              <h3><a href="" class="stretched-link">Pencak Silat</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-browser-chrome" style="color: #ffa76e;"></i>
              <h3><a href="" class="stretched-link">Basket</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-music-note-beamed" style="color: #11dbcf;"></i>
              <h3><a href="" class="stretched-link">Marching Band</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-dribbble" style="color: #4233ff;"></i>
              <h3><a href="" class="stretched-link">Voli</a></h3>
            </div>
          </div><!-- End Feature Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kegiatan</h2>
        <p class="">Kegiatan MI Attaqwa 28</p>
      </div><!-- End Section Title -->

      <div class="container">

      <?php if (!empty($beritaBaru)): ?>
        <div class="row">
          <?php foreach ($beritaBaru as $news): ?>
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

    </section><!-- /Courses Section -->

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/62881012238545" target="_blank" class="whatsapp-float">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png') ?>" alt="Chat on WhatsApp" class="native-image">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppSquare1.png') ?>" alt="Chat on WhatsApp" class="responsive-image">
    </a>

  </main>

  <?= view('layouts/footer') ?>