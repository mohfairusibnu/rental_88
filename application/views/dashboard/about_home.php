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

    <main id="main">
        <section>
            <div class="container px-4 px-lg-5 mt-5" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">Tentang Kami</h1>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="d-md-flex post-entry-2 half">
                        <a href="#" class="me-4 thumbnail">
                            <img src="assets/img/Company Profile.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="ps-md-5 mt-4 mt-md-0">
                            <h2 class="mb-4 display-4">Profil Perusahaan</h2>

                            <p>Rental 88 adalah situs website yang bergerak dibidang jasa pelayanan dan persewaan mobil yang dibentuk pada tahun 2023 di BSD </p>
                            <p>Komitmen kami adalah memberikan pengalaman sewa mobil yang menyenangkan, mudah, dan terpercaya untuk memuaskan pelanggan dengan berbagai jenis mobil sewa yang telah disediakan oleh kami.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="mb-5 bg-light py-5">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-between align-items-lg-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <h2 class="display-4 mb-4">Katalog Mobil</h2>
                        <p>kami menyediakan beberapa merk mobil yang dapat anda sewa untuk keperluan sehari-hari, mudik, dan bepergian bersama keluarga disaat weekend</p>

                        <p><a href="<?= base_url('dashboard_home') ?>" class="more">Lihat Katalog Mobil</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6">
                                <img src="assets/img/baju_hitam_tentangkami.jpg" alt="" class="img-fluid mb-4">
                            </div>
                            <div class="col-6 mt-4">
                                <img src="assets/img/baju_putih_tentangkami.jpg" alt="" class="img-fluid mb-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h1 class="display-4">Tim Kami</h1>
                                <p>Rental 88 memiliki anggota team untuk merancang website dalam rangka mempromosikan produk-produk terbaru serta meng update produk-produk yang tersedia di Belikuy.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="assets/img/VIKAA.png" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>IRSANDA HATTA P R</h4>
                        <h5>19210369</h5>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="assets/img/IRSANDAAA.png" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>M RAFA ALFITO</h4>
                        <h5>19210721</h5>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="assets/img/LENYY.png" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>M FAIRUS IBNU</h4>
                        <h5>19210509</h5>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="assets/img/FAIRUSSS.png" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>NIKEN AYU DARA</h4>
                        <h5>19210363</h5>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="assets/img/RATRII.png" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>NOVA DWI MAELANI</h4>
                        <h5>19210917</h5>
                    </div>
                    <div class="col-lg-4 text-center mb-5">
                        <img src="assets/img/RATRII.png" alt="" class="img-fluid rounded-circle w-50 mb-4">
                        <h4>SHIFA KHAIRUL NISAH</h4>
                        <h5>19210512</h5>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

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