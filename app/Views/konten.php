<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Kegiatan - MI Attaqwa 28</title>
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
    .konten {
        width: 850px;
    }
    .konten img{
        max-width: 850px;
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

      .konten {
        width: 100%; /* Adjust the width for smaller screens */
      }

      .konten img {
        max-width: 100%; /* Ensure images are responsive */
        height: auto; /* Maintain aspect ratio */
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
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li class="current">Detail Kegiatan</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="section">

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <!-- <img src="<?= base_url('/img/course-details.jpg') ?>" class="img-fluid" alt=""> -->
            <h3><?= $news['title']; ?></h3><br>
            <div class="konten col-lg-8">
                <?= $news['content']; ?>
            </div>
            <!-- <p>
              Qui et explicabo voluptatem et ab qui vero et voluptas. Sint voluptates temporibus quam autem. Atque nostrum voluptatum laudantium a doloremque enim et ut dicta. Nostrum ducimus est iure minima totam doloribus nisi ullam deserunt. Corporis aut officiis sit nihil est. Labore aut sapiente aperiam.
              Qui voluptas qui vero ipsum ea voluptatem. Omnis et est. Voluptatem officia voluptatem adipisci et iusto provident doloremque consequatur. Quia et porro est. Et qui corrupti laudantium ipsa.
              Eum quasi saepe aperiam qui delectus quaerat in. Vitae mollitia ipsa quam. Ipsa aut qui numquam eum iste est dolorum. Rem voluptas ut sit ut.
            </p> -->
          </div>

            <!-- berita lainnya -->
            <div class="col-lg-4">
                <h4>Berita Lainnya</h4><br>
                <div class="card">
                    <div class="card-body">
                        <?php foreach($relatedNews as $newsItem): ?>
                            <div class="news-item d-flex mb-4">
                                <img src="<?= base_url('uploads/thumbnail/' . $newsItem['thumbnail']) ?>" class="img-thumbnail me-3" alt="..." style="width: 100px; height: auto;">
                                <div>
                                    <h5 class="card-title mb-1"><?= $newsItem['title'] ?></h5>
                                    <p class="card-text text-muted"><?= date('d M Y', strtotime($newsItem['created_at'])) ?></p>
                                </div>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>



            <!-- <div class="col-lg-4">
                <h4>Berita Lainnya</h4><br>
                <div class="card">
                    <div class="card-body">
                        <div class="news-item d-flex mb-4">
                            <img src="<?= base_url('/img/course-1.jpg') ?>" class="img-thumbnail me-3" alt="..." style="width: 100px; height: auto;">
                            <div>
                                <h5 class="card-title mb-1">Judul Berita 1 Judul Berita 1 Judul Berita 1 Judul Berita 1</h5>
                                <p class="card-text text-muted">27 Mei 2024</p>
                            </div>
                        </div>
                        <hr>
                        <div class="news-item d-flex mb-4">
                            <img src="<?= base_url('/img/course-2.jpg') ?>" class="img-thumbnail me-3" alt="..." style="width: 100px; height: auto;">
                            <div>
                                <h5 class="card-title mb-1">Judul Berita 2</h5>
                                <p class="card-text text-muted">20 Mei 2024</p>
                            </div>
                        </div>
                        <hr>
                        <div class="news-item d-flex mb-4">
                            <img src="<?= base_url('/img/course-3.jpg') ?>" class="img-thumbnail me-3" alt="..." style="width: 100px; height: auto;">
                            <div>
                                <h5 class="card-title mb-1">Judul Berita 3</h5>
                                <p class="card-text text-muted">15 Mei 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end berita lainnya -->

      </div>

    </section><!-- /Courses Course Details Section -->
    
    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/62881012238545" target="_blank" class="whatsapp-float">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png') ?>" alt="Chat on WhatsApp" class="native-image">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppSquare1.png') ?>" alt="Chat on WhatsApp" class="responsive-image">
    </a>

  </main>

  <?= view('layouts/footer') ?>