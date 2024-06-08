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

<body class="hold-transition login-page" style="background-image: url('assets/img/upload/bg_auth.jpg'); background-size: cover">

    <div class="login-box">
        <div class="card">
            <div class="login-logo">
                <span class="brand-text text-center font-weight-dark"><b>LOGIN CUSTOMER</b></span>
            </div>
        </div>
    </div>

    <!-- /.login-logo -->
    <div class="login-box mt-5">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Masukkan Email & Password Anda</p>

                <?= $this->session->flashdata('pesan'); ?>

                <form class="user" action="<?= base_url('autentifikasi_cust') ?>" method="post">

                    <div class="input-group mb-3">
                        <input type="email" name="email_cust" class="form-control form-control-user" value="<?=
                                                                                                            set_value('email_cust'); ?>" id="email_cust" placeholder="Email Customer">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        <?= form_error(
                            'email_cust',
                            '<small class="text-danger pl-2">',
                            '</small>'
                        ); ?>
                    </p>

                    <div class="input-group mb-3">
                        <input type="password" id="password_cust" name="password_cust" class="form-control form-control-user" placeholder="Password Customer">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        <?= form_error(
                            'password_cust',
                            '<small class="text-danger pl-2">',
                            '</small>'
                        ); ?>
                    </p>

                    <div class="row">
                        <div class="col-8">
                            <span>Belum Punya Akun Customer ?</span>
                            <a href="<?=
                                        base_url('autentifikasi_cust/register'); ?>" class="text-center">Silahkan Registrasi</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/LTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/LTE/dist/js/adminlte.min.js"></script>
</body>

</html>