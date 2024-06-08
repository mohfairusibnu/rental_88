<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-gradient-light sidebar-light-default elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('dashboard_admin'); ?>" class="brand-link">
    <img src="<?= base_url('assets/LTE/'); ?>dist/img/logo1.png" alt="Rental88 Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-dark">Rental 88</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/img/profile/') . $profil_admin['image_admin']; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url('admin'); ?>" class="d-block"><?= $this->session->nama_lengkap_admin ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-header">DASHBOARD</li>

        <li class="nav-item mt-2">
          <a href="<?= base_url('dashboard_admin'); ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>

        <li class="nav-header mt-2">MASTER USER</li>
        <li class="nav-item">
          <a href="<?= base_url('admin/dataadmin'); ?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Data Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/datacust'); ?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Data Customer</p>
          </a>
        </li>

        <li class="nav-header mt-2">MASTER MOBIL</li>
        <li class="nav-item">
          <a href="<?= base_url('mobil'); ?>" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>Data Mobil</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('mobil/merk'); ?>" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>Data Merk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('mobil/tipe'); ?>" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>Data Tipe</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('mobil/transmisi'); ?>" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>Data Transmisi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('mobil/kapasitas'); ?>" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>Data Kapasitas</p>
          </a>
        </li>

        <li class="nav-header mt-2">MASTER PENYEWAAN</li>
        <li class="nav-item">
          <a href="<?= base_url('sewa/met_pembayaran'); ?>" class="nav-link">
            <i class="nav-icon fas fa-random"></i>
            <p>Metode Pembayaran</p>
          </a>
        </li>

        <li class="nav-header mt-2">TRANSAKSI PENYEWAAN</li>
        <li class="nav-item">
          <a href="<?= base_url('sewa/daftarsewa'); ?>" class="nav-link">
            <i class="nav-icon fas fa-random"></i>
            <p>Daftar Penyewaan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('sewa'); ?>" class="nav-link">
            <i class="nav-icon fas fa-random"></i>
            <p>Data Penyewaan</p>
          </a>
        </li>


        <li class="nav-header mt-2">MASTER LAPORAN</li>
        <li class="nav-item">
          <a href="<?= base_url('laporan/laporan_mobil'); ?>" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>Laporan Data Mobil</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('laporan/laporan_cust'); ?>" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>Laporan Data Customer </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('laporan/laporan_penyewaan'); ?>" class="nav-link">
            <i class="nav-icon fas fa-clipboard"></i>
            <p>Laporan Penyewaan </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </div>
  <!-- /.sidebar -->
</aside>