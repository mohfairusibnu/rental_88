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
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/profile/') . $profil_admin['image_admin']; ?>" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><b><?= $profil_admin['nama_lengkap_admin'];
                                                                        ?></b></h3>
                            <p class="text-muted text-center"><?= $profil_admin['email_admin']; ?></p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Mulai Aktif Admin</b> <a class="float-right"><?=
                                                                                    $profil_admin['tanggal_input_admin']; ?></a>
                                </li>

                            </ul>
                            <a href="<?= base_url('admin/ubahprofil'); ?>" class="btn btn-dark btn-block"><b>Ubah Profil</b></a>
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