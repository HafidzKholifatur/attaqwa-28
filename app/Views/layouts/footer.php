<footer id="footer" class="footer position-relative">
<?php foreach ($info as $info): ?>
<div class="container footer-top">
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
            <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
                <span class="sitename"><?= $info['nama_sekolah'] ?></span>
            </a>
        <div class="footer-contact pt-3">
            <p><?= $info['alamat'] ?></p>
            <p class="mt-3"><strong>Telepon:</strong> <span>+62 851-6363-5223</span></p>
            <p><strong>Email:</strong> <span><?= $info['email'] ?></span></p>
        </div>
        <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/miattaqwa28"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/mi_attaqwa_jatisari/"><i class="bi bi-instagram"></i></a>
        </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
        <h4>Menu</h4>
            <ul>
                <li><a href="<?= base_url('/') ?>">Beranda<br></a></li>
                <li><a href="<?= base_url('/profil') ?>">Profil</a></li>
                <li><a href="<?= base_url('/kegiatan') ?>">Kegiatan</a></li>
                <li><a href="<?= base_url('/galeri') ?>">Galeri</a></li>
                <li><a href="<?= base_url('/kontak') ?>">Kontak</a></li>
            </ul>
        </div>

        <div class="col-lg-6 col-md-12 footer-newsletter">
            <h4>Alamat</h4>
            <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4902796151187!2d106.94292791152051!3d-6.330464261917282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69931b986e2371%3A0x68afd26c9d0c6bd5!2sMI%20Attaqwa%2028!5e0!3m2!1sid!2sid!4v1716908323954!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename"><?= $info['nama_sekolah'] ?></strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you've purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
<?php endforeach; ?>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('/vendor/swiper/swiper-bundle.min.js') ?>"></script>

<!-- Main JS File -->
<script src="<?= base_url('/js/main.js') ?>"></script>

<!-- Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

</body>
</html>