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
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
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

  <!-- Header-->
  <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="lead fw-bolder text-white-50 mb-0">Selamat Datang Di <b><?= $cust; ?></b></h1>
        <h1 class="display-4 fw-bolder">Butuh Sewa Mobil ?</h1>
        <p class="lead fw-normal text-white-50 mb-0">Rental 88 Solusi nya</p>
      </div>
    </div>
  </header>

  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

        <?php foreach ($mobil as $m) : ?>

          <div class="col mb-5">
            <div class="card h-100">
              <!-- Product image-->
              <img class="card-img-top" src="<?= base_url('assets/img/upload/') . $m->image ?>" alt="..." />
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder"><?php echo $m->merk_mobil ?> <?php echo $m->nama_mobil ?></h5>
                  <h5 class="fw-bolder"><?php echo $m->tahun_rilis ?></h5>
                  <!-- Product price-->
                  <span><?php echo $m->harga_sewa ?> /Hari</span>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                  <?php
                  if ($m->stok == "0") {
                    echo "<span class='btn btn-outline-dark mt-auto py-2 mr-1'> Tidak Tersedia </span>";
                  } else {
                    echo anchor('autentifikasi_cust', "<span class='btn btn-outline-dark mt-auto py-2 mr-1'> Sewa </span>");
                  } ?>

                  <a href="<?php echo base_url('mobil/detail_mobil_home/') . $m->id_mobil ?>" class="btn btn-outline-dark py-2 ml-1">Detail</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <div class="modal fade" id="sewaBaruModal" tabindex="-1" role="dialog" aria-labelledby="sewaBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sewaBaruModalLabel"><b>Form Sewa Mobil</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('admin/datacust'); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="namacust" name="namacust" placeholder="Masukkan Nama Customer">
            </div>

            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="alamatcust" name="alamatcust" placeholder="Masukkan Alamat Customer">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="emailcust" name="emailcust" placeholder="Masukkan Email Customer">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="passwordcust" name="passwordcust" placeholder="Masukkan Password Customer">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="passwordcust" name="passwordcust" placeholder="Ulangi Password Customer">
            </div>

            <div class="form-group">
              <input type="file" class="form-control form-control-user" id="image" name="image">
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-ban"></i> Tutup</button>
            <button type="submit" class="btn btn-dark"><i class="fas fa-plus-circle"></i> Sewa</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End of Modal Tambah Menu -->

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