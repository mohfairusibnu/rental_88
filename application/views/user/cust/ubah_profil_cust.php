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
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid m-4">

                        <div class="row">
                            <div class="col-lg-9">

                                <form> <?= form_open_multipart('cust/ubahprofil/' . $cust['id_cust']); ?>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email_cust" name="email_cust" value="<?= $cust['email_cust']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama_lengkap_cust" name="nama_lengkap_cust" value="<?= $cust['nama_lengkap_cust']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama Panggilan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama_panggilan_cust" name="nama_panggilan_cust" value="<?= $cust['nama_panggilan_cust']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="alamat_cust" name="alamat_cust" value="<?= $cust['alamat_cust']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email_cust" name="email_cust" value="<?= $cust['jenis_kelamin_cust']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <label for="password_cust" class="col-sm-2 col-form-label">Kata Sandi Baru</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="password_cust" name="password_cust" value="<?= $cust['password_tidak_enkripsi']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <div class="row">
                                            <div class="col-sm-3" align="center">
                                                <img src="<?= base_url('assets/img/profile/') . $cust['image_cust'];  ?>" class="img-thumbnail" alt="">
                                            </div>
                                            <input type="hidden" name="old_img" value="<?= $cust['image_cust']; ?>">
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control form-control-user" id="image_cust" name="image_cust">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i>Ubah</button>
                                        <a href="<?= base_url('cust'); ?>" type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-double-left mr-2"></i>Kembali</a>
                                    </div>
                                </form>
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