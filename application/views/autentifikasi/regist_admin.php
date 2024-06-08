<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rental 88 | <?= $judul; ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/'); ?>css/bootstrap.min.css">
  <link rel="shortcut icon" href="<?= base_url('assets/LTE/'); ?>dist/img/logo1.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/LTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/LTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page" style="background-image: url('assets/img/upload/bg_auth.jpg'); background-size: cover">
  <div class="register-box">
    <div class="register-logo">
      <b>REGISTER ADMIN</b>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Silahkan Melakukan Registrasi Untuk Membuat Akun Admin</p>

        <form class="user" action="<?= base_url('autentifikasi_admin/register') ?>" method="post">

          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-user" value="<?=
                                                                              set_value('nama_lengkap_admin'); ?>" id="nama_lengkap_admin" name="nama_lengkap_admin" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <p>
            <?= form_error(
              'nama_lengkap_admin',
              '<small class="text-danger pl-2">',
              '</small>'
            ); ?>
          </p>

          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-user" value="<?=
                                                                              set_value('nama_panggilan_admin'); ?>" id="nama_panggilan_admin" name="nama_panggilan_admin" placeholder="Nama Panggilan">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <p>
            <?= form_error(
              'nama_panggilan_admin',
              '<small class="text-danger pl-2">',
              '</small>'
            ); ?>
          </p>

          <div class="input-group mb-3">
            <select name="transmisi" class="form-select form-select-user">
              <option value="">- Pilih Jenis Kelamin -</option>
              <option value="lk">Laki-Laki</option>
              <option value="pr">Perempuan</option>
            </select>
          </div>
          <p>
            <?= form_error(
              'jenis_kelamin_admin',
              '<small class="text-danger pl-2">',
              '</small>'
            ); ?>
          </p>

          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-user" value="<?=
                                                                              set_value('alamat_admin'); ?>" id="alamat_admin" name="alamat_admin" placeholder="Alamat Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
            </div>
          </div>
          <p>
            <?= form_error(
              'alamat_admin',
              '<small class="text-danger pl-2">',
              '</small>'
            ); ?>
          </p>

          <div class="input-group mb-3">
            <input type="email" class="form-control form-control-user" value="<?=
                                                                              set_value('email_admin'); ?>" id="email_admin" name="email_admin" placeholder="Email Admin">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <p>
            <?= form_error(
              'email_admin',
              '<small class="text-danger pl-2">',
              '</small>'
            ); ?>
          </p>

          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-user" id="password_admin" name="password_admin" placeholder="Kata Sandi">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <p>
            <?= form_error(
              'password_admin',
              '<small class="text-danger pl-2">',
              '</small>'
            ); ?>
          </p>

          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-user" id="confirm_password_admin" name="confirm_password_admin" placeholder="Ulangi Kata Sandi">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <p>
            <?= form_error(
              'confirm_password_admin',
              '<small class="text-danger pl-2">',
              '</small>'
            ); ?>
          </p>

          <div class="row">
            <div class="col-8">
              <span>Sudah Punya Akun Admin ?</span>
              <a href="<?=
                        base_url('autentifikasi_admin'); ?>" class="text-center">Silahkan Login</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/LTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/LTE/dist/js/adminlte.min.js"></script>
</body>

</html>