<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental 88 | <?= $judul; ?></title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/LTE/'); ?>dist/img/logo1.png">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(''); ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url('dashboard_home') ?>">Rental 88</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_home') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_home/about') ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_home/contac') ?>">Kontak</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Masuk/ Daftar
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('autentifikasi_admin') ?>">Admin</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('autentifikasi_cust') ?>">Customer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Kontak Kami</h1>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="info-item info-item-borders">
                        <i class="bi bi-whatsapp"></i>
                        <h3>WhatsApp</h3>
                        <p><a href="tel:+628221392295">+62 822 1392 2954</a></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item">
                        <i class="bi bi-envelope-fill"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:rental_88@gmail.com">rental_88@gmail.com</a></p>
                    </div>
                </div><!-- End Info Item -->
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Rental 88 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(''); ?>assets/js/scripts.js"></script>

</body>

</html>