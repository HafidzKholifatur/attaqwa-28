<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Galeri - MI Attaqwa 28</title>
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

  <!-- Ajax Galeri -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: May 18 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .news-item img {
        margin-right: 15px;
    }

    .news-item .card-title {
        font-size: 1.125rem;
        font-weight: 500;
        margin-bottom: 0.25rem;
    }

    .news-item .card-text {
        font-size: 0.875rem;
        color: #666;
    }

    .news-item hr {
        width: 100%;
        margin: 1rem 0;
    }

    .gallery-item img {
        /* width: 100%;
        height: auto; */
        display: block;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .gallery-item img:hover {
        transform: scale(1.05);
    }

    /* Style for Swiper Pagination */
    .swiper-pagination {
        text-align: center;
        padding-top: 20px;
    }

    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #007bff; /* Warna indikator */
        opacity: 1;
        border-radius: 50%;
        margin: 0 5px;
    }

    .swiper-pagination-bullet-active {
        background-color: #0056b3; /* Warna indikator aktif */
    }

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
                  <li><a href="<?= base_url('/kegiatan') ?>">Kegiatan</a></li>
                  <li><a href="<?= base_url('/galeri') ?>" class="active">Galeri</a></li>
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
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li class="current">Galeri</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Courses Course Details Section -->
    <!-- <section id="courses-course-details" class="section">

      <div class="container" data-aos="fade-up">
        

    </section> -->
    <!-- /Courses Course Details Section -->

    <!-- Gallery Section -->
<section id="gallery" class="gallery section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Galeri</h2>
  <p class="">Galeri Gambar</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 20
          },
          "768": {
            "slidesPerView": 2,
            "spaceBetween": 30
          },
          "1200": {
            "slidesPerView": 3,
            "spaceBetween": 30
          }
        }
      }
    </script>
    <div class="swiper-wrapper">
    <style>
        .swiper-slide img {
            /* width: 100%;
            height: auto; */
            width: 420px;
            height: 275px;
        }
    </style>

      <?php foreach ($galeri as $gambar): ?>
      <div class="swiper-slide">
        <div class="gallery-item">
            <a href="#" data-title="<?= htmlspecialchars($gambar['desc']) ?>" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-img="<?= base_url('/uploads/'.$gambar['image']) ?>">
            <img src="<?= base_url('/uploads/'.$gambar['image']) ?>" class="img-fluid mb-4 mt-4" alt="Gambar Galeri" style="box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);">
          </a>
        </div>
      </div>
      <?php endforeach; ?>
      <!-- End gallery item -->
    </div>
    <!-- Paginasi ditempatkan di luar swiper-wrapper -->
    <div class="swiper-pagination"></div>
  </div>

</div>

</section>
<!-- /Gallery Section -->

  <!-- Floating WhatsApp Button -->
  <a href="https://wa.me/62881012238545" target="_blank" class="whatsapp-float">
    <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png') ?>" alt="Chat on WhatsApp" class="native-image">
    <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppSquare1.png') ?>" alt="Chat on WhatsApp" class="responsive-image">
  </a>

<!-- Modal -->
<div class="modal fade fade-up" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" style="">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Judul Gambar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="" class="img-fluid modal-gambar" alt="Gambar" style="object-fit: cover; width: -webkit-fill-available;">
      </div>
    </div>
  </div>
</div>

<script>
  var myModal = document.getElementById('exampleModal');
  myModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var imgSrc = button.getAttribute('data-bs-img');
    var modalImg = myModal.querySelector('.modal-gambar');

    var title = button.getAttribute('data-title'); // Ambil data judul dari atribut data-title

    // Ubah judul modal sesuai dengan judul gambar yang dipilih
    var modalTitle = document.getElementById('exampleModalLabel');
    modalTitle.innerText = title; // Ubah teks judul modal

    modalImg.src = imgSrc;
  });
</script>




  </main>

  <?= view('layouts/footer') ?>