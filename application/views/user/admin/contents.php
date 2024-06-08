<div class="content-wrapper">
  <div class="content-header">
    <section class="content">
      <div class="container-fluid">
        <div class="row m-4">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-black">
              <div class="inner">
                <div class="text-md font-weight-bold text-white text-uppercase m-2">JUMLAH CUSTOMER</div>
                <div class="h1 font-weight-bold text-white ml-5"><?= $this->ModelCust->getCustWhere(['role_id' => 2])->num_rows();
                                                                  ?></div>
              </div>
              <div class="icon">
                <i class="ionicons ion-person-add text-light"></i>
              </div>
              <a href="<?= base_url('admin/datacust'); ?>" class="small-box-footer bg-dark">More info <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-black">
              <div class="inner">
                <div class="text-md font-weight-bold text-white text-uppercase m-2">STOK MOBIL</div>
                <div class="h1 font-weight-bold text-white ml-4"><?php
                                                                  $where = ['stok != 0'];
                                                                  $totalstok = $this->ModelMobil->total(
                                                                    'stok',
                                                                    $where
                                                                  );

                                                                  echo $totalstok;
                                                                  ?></div>
              </div>
              <div class="icon">
                <i class="ionicons ion-model-s text-light"></i>
              </div>
              <a href="<?= base_url('mobil/'); ?>" class="small-box-footer bg-dark">More info <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-black">
              <div class="inner">
                <div class="text-md font-weight-bold text-white text-uppercase m-2">ADMIN AKTIF</div>
                <div class="h1 font-weight-bold text-white ml-5"><?= $this->ModelAdmin->getAdminWhere(['role_id' => 1])->num_rows();
                                                                  ?></div>
              </div>
              <div class="icon">
                <i class="ionicons ion-person-stalker text-light"></i>
              </div>
              <a href="<?= base_url('admin/dataadmin'); ?>" class="small-box-footer bg-dark">More info <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>
          <!-- ./col -->


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-black">
              <div class="inner">
                <div class="text-md font-weight-bold text-white text-uppercase m-2">TOTAL PENYEWAAN</div>
                <div class="h1 font-weight-bold text-white ml-5"><?= $this->ModelSewa->getSewaWhere(['status' => 'Dikembalikan'])->num_rows();
                                                                  ?></div>
              </div>
              <div class="icon">
                <i class="fas fa-coins text-light"></i>
              </div>
              <a href="<?= base_url('sewa'); ?>" class="small-box-footer bg-dark">More info <i class="fas fa-arrow-circle-right ml-2"></i></a>
            </div>
          </div>

          <!-- ./col -->

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- /.content-header -->