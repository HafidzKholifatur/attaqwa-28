<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kontak - MI Attaqwa 28</title>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
        width: 12px;
        height: 12px;
        background-color: #007bff; /* Warna indikator */
        opacity: 1;
        border-radius: 50%;
        margin: 0 5px;
    }

    .swiper-pagination-bullet-active {
        background-color: #0056b3; /* Warna indikator aktif */
    }

    /* css form */
    .contact .form-kontak {
      height: 100%;
    }

    .contact .form-kontak .error-message {
      background: #df1529;
      color: #ffffff;
      text-align: left;
      padding: 15px;
      margin-bottom: 24px;
      font-weight: 600;
    }

    .contact .form-kontak .sent-message {
      color: #ffffff;
      background: #059652;
      text-align: center;
      padding: 15px;
      margin-bottom: 24px;
      font-weight: 600;
    }

    .contact .form-kontak input[type=text],
    .contact .form-kontak input[type=email],
    .contact .form-kontak textarea {
      font-size: 14px;
      padding: 10px 15px;
      box-shadow: none;
      border-radius: 0;
      color: var(--default-color);
      background-color: color-mix(in srgb, var(--background-color), transparent 50%);
      border-color: color-mix(in srgb, var(--default-color), transparent 80%);
    }

    .contact .form-kontak input[type=text]:focus,
    .contact .form-kontak input[type=email]:focus,
    .contact .form-kontak textarea:focus {
      border-color: var(--accent-color);
    }

    .contact .form-kontak input[type=text]::placeholder,
    .contact .form-kontak input[type=email]::placeholder,
    .contact .form-kontak textarea::placeholder {
      color: color-mix(in srgb, var(--default-color), transparent 70%);
    }

    .contact .form-kontak button[type=submit] {
      color: var(--contrast-color);
      background: var(--accent-color);
      border: 0;
      padding: 10px 30px 12px 30px;
      transition: 0.4s;
      border-radius: 50px;
    }

    .contact .form-kontak button[type=submit]:hover {
      background: color-mix(in srgb, var(--accent-color), transparent 20%);
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

<body class="contact-page">

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
                  <li><a href="<?= base_url('/galeri') ?>">Galeri</a></li>
                  <li><a href="<?= base_url('/kontak') ?>" class="active">Kontak</a></li>
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
      <!-- <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contact</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div> -->
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li class="current">Kontak</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4902796151187!2d106.94292791152051!3d-6.330464261917282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69931b986e2371%3A0x68afd26c9d0c6bd5!2sMI%20Attaqwa%2028!5e0!3m2!1sid!2sid!4v1716908323954!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Kp. Cakung Payangan RT01 RW05 Jatiasih, Jl. Wibawa Mukti II, RT.001/RW.005, Jatisari, Kec. Jatiasih, Kota Bks, Jawa Barat 17426</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>0851-6363-5223</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>miattaqwa28@gmail.com</p>
              </div>
            </div>
            <!-- End Info Item -->

          </div>

          <div class="col-lg-8 form-kontak">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="sent-message">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($validation)) : ?>
                    <div class="error-message">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
            <form action="/kontak/send" method="post">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Nama Kamu" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Kamu" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subjek" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" id="message" name="message" rows="6" placeholder="Isi Pesan" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                
                  <!-- <div class="loading">Loading</div> -->
                  <!-- <div class="error-message" style="display: none;"></div>
                  <div class="sent-message" style="display: none;"></div> -->
                  
                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/62881012238545" target="_blank" class="whatsapp-float">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppButtonGreenSmall.png') ?>" alt="Chat on WhatsApp" class="native-image">
      <img src="<?= base_url('ChatOnWhatsAppButton/WhatsAppSquare1.png') ?>" alt="Chat on WhatsApp" class="responsive-image">
    </a>

  </main>

  <?= view('layouts/footer') ?>