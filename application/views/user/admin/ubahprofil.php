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

							<form> <?= form_open_multipart('admin/ubahprofil'); ?>

								<div class="form-group row">
									<label for="email_admin" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="email_admin" name="email_admin" value="<?= $profil_admin['email_admin']; ?>" readonly>
									</div>
								</div>


								<div class="form-group row">
									<label for="nama_lengkap_admin" class="col-sm-2 col-form-label">Nama Lengkap</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="nama_lengkap_admin" name="nama_lengkap_admin" value="<?= $profil_admin['nama_lengkap_admin']; ?>">
										<?= form_error(
											'nama_lengkap_admin',
											'<small class="text-danger pl-2">',
											'</small>'
										); ?>
									</div>
								</div>


								<div class="form-group row">
									<label for="nama_panggilan_admin" class="col-sm-2 col-form-label">Nama Panggilan</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="nama_panggilan_admin" name="nama_panggilan_admin" value="<?= $profil_admin['nama_panggilan_admin']; ?>">
										<?= form_error(
											'nama_panggilan_admin',
											'<small class="text-danger pl-2">',
											'</small>'
										); ?>
									</div>
								</div>


								<div class="form-group row">
									<label for="jenis_kelamin_admin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="jenis_kelamin_admin" name="jenis_kelamin_admin" value="<?= $profil_admin['jenis_kelamin_admin']; ?>" readonly>
									</div>
								</div>


								<div class="form-group row">
									<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="alamat_admin" name="alamat_admin" value="<?= $profil_admin['alamat_admin']; ?>">
										<?= form_error(
											'alamat_admin',
											'<small class="text-danger pl-2">',
											'</small>'
										); ?>
									</div>
								</div>


								<div class="form-group row">
									<label for="tanggal_input_admin" class="col-sm-2 col-form-label">Jadi Admin Sejak</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="tanggal_input_admin" name="tanggal_input_admin" value="<?=
																																			$profil_admin['tanggal_input_admin']; ?>" readonly>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-3" align="center">
											<img src="<?= base_url('assets/img/profile/') . $profil_admin['image_admin'];  ?>" class="img-thumbnail" alt="">
										</div>
										<input type="hidden" name="old_img" value="<?= $profil_admin['image_admin']; ?>">
										<div class="col-sm-9">
											<div class="custom-file">
												<input type="file" class="form-control form-control-user" id="image_admin" name="image_admin">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row justify-content-end">
									<div class="col-sm-10">
										<button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i>Ubah</button>
										<a href="<?= base_url('admin'); ?>" type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-double-left mr-2"></i>Kembali</a>
									</div>
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