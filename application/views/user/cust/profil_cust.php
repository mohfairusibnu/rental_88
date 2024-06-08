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
                        <a class="nav-link" href="<?= base_url('dashboard_cust') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_cust/about') ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard_cust/contac') ?>">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Selamat Datang <b> <?= $this->session->nama_panggilan_cust; ?> </b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('cust') ?>">Profil Saya</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('sewa/detail_sewa/') ?>">Riwayat Sewa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('autentifikasi_cust/logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row ml-5">
                    <div class="col-md-3">
                        <!-- Begin Page Content -->
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="card card-dark card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/LTE/'); ?>dist/img/user2-160x160.jpg" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center"><b><?= $cust['nama_lengkap_cust'];
                                                                            ?></b></h3>
                                <p class="text-muted text-center"><?= $cust['email_cust']; ?></p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Tanggal Aktif Customer</b> <?=
                                                                        $cust['tanggal_input_cust']; ?>
                                    </li>

                                </ul>
                                <a href="<?= base_url('cust/ubahprofil'); ?>" class="btn btn-dark btn-block"><b>Ubah Profil</b></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                    <!-- End of Main Content -->
                    <!-- /.content -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

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

</html>\