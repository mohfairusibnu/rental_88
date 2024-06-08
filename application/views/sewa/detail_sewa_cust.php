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

    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-head-fixed text-nowrap">
                    <tr>
                        <td>Kode Sewa</td>
                        <td>:</td>
                        <td>
                            <?= $sewa['kode_sewa']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><?= $sewa['nama_lengkap_cust'] ?></td>
                    </tr>
                    <tr>
                        <td>Merk Mobil</td>
                        <td>:</td>
                        <td><?= $sewa['merk_mobil'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Mobil</td>
                        <td>:</td>
                        <td><?= $sewa['nama_mobil'] ?> </td>
                    </tr>
                    <tr>
                        <td>Harga Sewa</td>
                        <td>:</td>
                        <td><?= $sewa['harga_sewa'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Sewa</td>
                        <td>:</td>
                        <td><?= $sewa['tgl_sewa'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kembali</td>
                        <td>:</td>
                        <td><?= $sewa['tgl_kembali'] ?></td>
                    </tr>
                    <tr>
                        <td>Denda/Hari/Kerusakan</td>
                        <td>:</td>
                        <td><?= $sewa['denda'] ?></td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>:</td>
                        <td><?= $sewa['total_bayar'] ?></td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td><?= $sewa['nama_mp'] ?></td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td><?php
                            if ($sewa['total_bayar'] == "0") {
                                echo "<span class='badge badge-danger'> BELUM LUNAS </span>";
                            } else {
                                echo "<span class='badge badge-success'> SUDAH LUNAS </span>";
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Penyewaan</td>
                        <td>:</td>
                        <?php if ($sewa['status'] == "Dibooking")
                            $status = "warning";
                        else
                            $status = "info";
                        ?>
                        <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $sewa['status']; ?></i>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <td><a href="#" onclick="window.history.go(-1)" class="btn btn-default float-right"><i class="fas fa-fw fa-reply"></i> Kembali</a></td>
    </div>

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