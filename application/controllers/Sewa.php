<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Sewa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ModelCust', 'ModelAdmin', 'ModelSewa']);
    }

    public function index()
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = "Data Penyewaan";
        $data['cust'] = $this->ModelCust->get_cust();
        $data['sewa'] = $this->ModelSewa->get_sewa();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('sewa/data-sewa', $data);
        $this->load->view('user/admin/footer');
    }

    public function daftarSewa()
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = "Daftar Sewa";
        $data['cust'] = $this->ModelCust->get_cust();
        $data['daftar_sewa'] = $this->ModelSewa->get_daftar_sewa();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('sewa/daftar-sewa', $data);
        $this->load->view('user/admin/footer');
    }

    public function edit_daftarSewa($kode)
    {

        $data['sewa'] = $this->ModelSewa->get_kode_sewa($kode);
        $data['judul'] = 'Ubah Data Daftar Sewa';

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('sewa/edit_daftarsewa', $data);
        $this->load->view('user/admin/footer');
    }


    public function update_daftarSewa()
    {
        $this->form_validation->set_rules('denda', 'Denda', 'required', [
            'required' => 'Nominal Denda Harus Diisi !',
        ]);

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'kode_sewa' => $this->input->post('kode_sewa'),
                'nama_lengkap_cust' => $this->input->post('nama_lengkap_cust'),
                'merk_mobil' => $this->input->post('merk_mobil'),
                'nama_mobil' => $this->input->post('nama_mobil'),
                'harga_sewa' => $this->input->post('harga_sewa'),
                'tgl_sewa' => $this->input->post('tgl_sewa'),
                'batas_ambil' => $this->input->post('batas_ambil'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'denda' => $this->input->post('denda'),
                'nama_mp' => $this->input->post('nama_mp'),
                'tgl_pengembalian' => 0000 - 00 - 00,
                'status' => 'Disewa',
            );

            $this->ModelSewa->update($this->input->post('kode_sewa'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Daftar Sewa Berhasil Diperbarui</div>');

            redirect('sewa/daftarSewa');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Daftar Sewa Gagal Diperbarui</div>');

            redirect('sewa/daftarSewa');
        }
    }

    public function detail_daftarsewa($kode)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['daftar_sewa'] = $this->ModelSewa->get_kode_daftar_sewa($kode);
        $data['judul'] = 'Detail Daftar Sewa';

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('sewa/detail-daftarsewa', $data);
        $this->load->view('user/admin/footer');
    }

    public function edit_dataSewa($kode)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['sewa'] = $this->ModelSewa->get_kode_sewa($kode);
        $data['judul'] = 'Perbarui Data Penyewaan';

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('sewa/edit_penyewaan', $data);
        $this->load->view('user/admin/footer');
    }

    public function update_dataSewa()
    {
        $this->form_validation->set_rules('tgl_pengembalian', 'Tanggal Pengembalian', 'required', [
            'required' => 'Tanggal Pengembalian Harus Diisi !',
        ]);

        $this->form_validation->set_rules('total_bayar', 'Total Bayar', 'required', [
            'required' => 'Total Bayar Harus Diisi !',
        ]);

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'kode_sewa' => $this->input->post('kode_sewa'),
                'nama_lengkap_cust' => $this->input->post('nama_lengkap_cust'),
                'merk_mobil' => $this->input->post('merk_mobil'),
                'nama_mobil' => $this->input->post('nama_mobil'),
                'harga_sewa' => $this->input->post('harga_sewa'),
                'tgl_sewa' => $this->input->post('tgl_sewa'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
                'denda' => $this->input->post('denda'),
                'nama_mp' => $this->input->post('nama_mp'),
                'total_bayar' => $this->input->post('total_bayar'),
                'status' => 'Dikembalikan'
            );

            $this->ModelSewa->update($this->input->post('kode_sewa'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Daftar Sewa Berhasil Diperbarui</div>');

            redirect('sewa');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Daftar Sewa Gagal Diperbarui</div>');

            redirect('sewa');
        }
    }


    public function sewaAct()
    {
        $kode_sewa = $this->uri->segment(3);

        $ds = $this->db->query("SELECT*from daftar_sewa WHERE kode_sewa='$kode_sewa'")->row();

        $datasewa = [
            'kode_sewa' => $ds->kode_sewa,
            'nama_lengkap_cust' => $ds->nama_lengkap_cust,
            'merk_mobil' => $ds->merk_mobil,
            'nama_mobil' => $ds->nama_mobil,
            'harga_sewa' => $ds->harga_sewa,
            'tgl_sewa' => $ds->tgl_sewa,
            'tgl_kembali' => $ds->tgl_kembali,
            'tgl_pengembalian' => '0000-00-00',
            'nama_mp' => $ds->nama_mp,
            'status' => 'Disewa',
            'total_bayar' => 0

        ];

        $this->ModelSewa->simpanSewa($datasewa);
        $denda = $this->input->post('denda', TRUE);
        $this->db->query("update sewa set denda='$denda'");

        //hapus Data daftar_sewa yang mobilnya diambil untuk diSewa
        $this->ModelSewa->deleteData('daftar_sewa', ['kode_sewa' => $kode_sewa]);
        //$this->db->query("DELETE FROM daftar_sewa WHERE id_daftar_sewa='$id_daftar_sewa'");

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fas fa-check"></i> Data Penyewaan Berhasil Ditambahkan</div>');

        redirect('Sewa');
    }

    public function detail_sewa($kode)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['sewa'] = $this->ModelSewa->get_kode_sewa($kode);
        $data['judul'] = 'Detail Daftar Sewa';

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('sewa/detail-sewa', $data);
        $this->load->view('user/admin/footer');
    }



    public function tambah_sewa($id)
    {
        $data['daftar'] = $this->ModelSewa->get_daftar_sewa();
        $data['mobil'] = $this->ModelMobil->get_id_mobil($id);
        $data['met_pem']  = $this->ModelSewa->get_met_pembayaran($id);
        $data['judul'] = 'Form Sewa Mobil';

        if ($data['mobil']) {
            $data['merk'] = $this->ModelMobil->get_merk();
            $data['tipe'] = $this->ModelMobil->get_tipe();
            $data['transmisi'] = $this->ModelMobil->get_transmisi();
            $data['kapasitas'] = $this->ModelMobil->get_kapasitas();


            $this->load->view('sewa/tambah-sewa', $data);
        }
    }

    public function tambah_sewa_aksi()
    {
        $nama_lengkap_cust  = $this->input->post('nama_lengkap_cust');
        $tgl_sewa           = $this->input->post('tgl_sewa');
        $tgl_kembali        = $this->input->post('tgl_kembali');
        $merk_mobil         = $this->input->post('merk_mobil');
        $nama_mobil         = $this->input->post('nama_mobil');
        $harga_sewa         = $this->input->post('harga_sewa');
        $nama_mp            = $this->input->post('nama_mp');
        $kode_sewa          = $this->ModelSewa->kodeOtomatis('daftar_sewa', 'kode_sewa');

        $data = array(
            'kode_sewa'         => $kode_sewa,
            'nama_lengkap_cust' => $nama_lengkap_cust,
            'merk_mobil'        => $merk_mobil,
            'nama_mobil'        => $nama_mobil,
            'harga_sewa'        => $harga_sewa,
            'tgl_sewa'          => $tgl_sewa,
            'batas_ambil'       => date('Y-m-d', strtotime('+1 days', strtotime($tgl_sewa))),
            'tgl_kembali'       => $tgl_kembali,
            'denda'             => 0,
            'nama_mp'           => $nama_mp,
            'status'            => 'Dibooking'


        );

        $this->ModelSewa->tambah_sewa($data, 'daftar_sewa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Daftar Sewa Berhasil. Harap Konfirmasi ke Administrasi !</div>');
        redirect('dashboard_cust');
    }

    public function detail_sewa_cust($kode)
    {
        $data['sewa'] = $this->ModelSewa->get_kode_daftar_sewa($kode);

        $data['judul'] = 'Detail Daftar Sewa';

        $this->load->view('sewa/detail_sewa_cust', $data);
    }














    public function met_pembayaran()
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Metode Pembayaran';
        $data['met_pembayaran'] = $this->ModelSewa->get_met_pembayaran();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('sewa/met_pembayaran/form_met_pembayaran', $data);
        $this->load->view('user/admin/footer');
    }

    public function simpan_met_pembayaran()
    {
        $this->form_validation->set_rules('nama_mp', 'Metode Pembayaran', 'required|is_unique[met_pembayaran.nama_mp]', [
            'is_unique' => 'Metode Pembayaran Sudah Terdaftar',
            'required' => 'Metode Pembayaran Harus Di Isi !'
        ]);


        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nama_mp' => $this->input->post('nama_mp')
            );

            $this->ModelSewa->tambah_met_pembayaran($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Metode Pembayaran Berhasil Ditambahkan</div>');

            redirect('sewa/met_pembayaran');
        } else {
            $this->met_pembayaran();
        }
    }

    public function edit_met_pembayaran($id)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Ubah Metode Pembayaran';
        $data['mp'] = $this->ModelSewa->get_id_met_pembayaran($id);

        if ($data['mp']) {
            $data['met_pembayaran'] = $this->ModelSewa->get_met_pembayaran();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('sewa/met_pembayaran/form_edit_met_pembayaran', $data);
            $this->load->view('user/admin/footer');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-exclamation-triangle"></i> Metode Pembayaran Sudah Terdaftar</div>');

            redirect('sewa/met_pembayaran');
        }
    }

    public function update_met_pembayaran()
    {
        $this->form_validation->set_rules('nama_mp', 'Metode Pembayaran', 'required|is_unique[met_pembayaran.nama_mp]', [
            'is_unique' => 'Metode Pembayaran Sudah Terdaftar',
            'required' => 'Metode Pembayaran Harus Di Isi !'
        ]);

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'nama_mp' => $this->input->post('nama_mp'),
            );

            $this->ModelSewa->update_met_pembayaran($this->input->post('id_mp'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Metode Pembayaran Berhasil Diperbarui</div>');

            redirect('sewa/met_pembayaran');
        } else {
            $this->met_pembayaran();
        }
    }

    public function hapus_met_pembayaran($id)
    {
        $delete = $this->ModelSewa->get_id_met_pembayaran($id);

        if (delete) {
            $this->ModelSewa->hapus_met_pembayaran($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Tipe Mobil Berhasil Dihapus</div>');
            redirect('sewa/met_pembayaran');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-ban"></i> Tipe Mobil Tidak Terdaftar</div>');
            redirect('sewa/met_pembayaran');
        }
    }
}
