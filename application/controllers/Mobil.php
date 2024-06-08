<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMobil');
    }

    public function index()
    {
        $data['judul'] = 'Data Mobil';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['mobil'] = $this->ModelMobil->get_mobil();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('mobil/datamobil', $data);
        $this->load->view('user/admin/footer');
    }


    public function tambah_mobil()
    {
        $data['judul'] = 'Tambah Mobil Baru';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['mobil'] = $this->ModelMobil->get_mobil();
        $data['merk'] = $this->ModelMobil->get_merk();
        $data['tipe'] = $this->ModelMobil->get_tipe();
        $data['transmisi'] = $this->ModelMobil->get_transmisi();
        $data['kapasitas'] = $this->ModelMobil->get_kapasitas();


        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('mobil/form_tambah_mobil', $data);
        $this->load->view('user/admin/footer');
    }

    public function simpan_mobil_baru()
    {

        $this->_rules_tambah();

        if ($this->form_validation->run() == TRUE) {

            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/img/upload/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '3000';
                $config['max_width'] = '';
                $config['max_height'] = '';
                $config['file_name'] = 'img' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data();
                    $gambar = $image['file_name'];
                } else {
                    $gambar = '';
                }
            }
            $data = array(
                'nama_mobil' => $this->input->post('nama_mobil'),
                'merk_mobil' => $this->input->post('merk_mobil'),
                'tahun_rilis' => $this->input->post('tahun_rilis'),
                'no_polisi' => $this->input->post('no_polisi'),
                'nama_tipe' => $this->input->post('nama_tipe'),
                'warna' => $this->input->post('warna'),
                'jenis_transmisi' => $this->input->post('jenis_transmisi'),
                'bahan_bakar' => $this->input->post('bahan_bakar'),
                'jumlah_kapasitas' => $this->input->post('jumlah_kapasitas'),
                'harga_sewa' => $this->input->post('harga_sewa'),
                'stok' => $this->input->post('stok'),
                'image' => $gambar
            );

            $this->ModelMobil->tambah_mobil($data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Mobil Berhasil Diperbarui</div>');

            redirect('mobil');
        } else {
            $this->tambah_mobil();
        }
    }


    public function edit_mobil($id)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['mobil'] = $this->ModelMobil->get_id_mobil($id);
        $data['judul'] = 'Ubah Data Mobil';


        if ($data['mobil']) {
            $data['merk'] = $this->ModelMobil->get_merk();
            $data['tipe'] = $this->ModelMobil->get_tipe();
            $data['transmisi'] = $this->ModelMobil->get_transmisi();
            $data['kapasitas'] = $this->ModelMobil->get_kapasitas();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('mobil/form_edit_mobil', $data);
            $this->load->view('user/admin/footer');
        }
    }


    public function update_mobil()
    {
        $this->_rules_update();

        if ($this->form_validation->run() == TRUE) {

            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/img/upload/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '3000';
                $config['max_width'] = '';
                $config['max_height'] = '';
                $config['file_name'] = 'img' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data();
                    unlink('assets/img/upload/' . $this->input->post('old_img', TRUE));
                    $gambar = $image['file_name'];
                } else {
                    $gambar = $this->input->post('old_img', TRUE);
                }
            }
            $data = array(
                'nama_mobil' => $this->input->post('nama_mobil'),
                'merk_mobil' => $this->input->post('merk_mobil'),
                'tahun_rilis' => $this->input->post('tahun_rilis'),
                'no_polisi' => $this->input->post('no_polisi'),
                'nama_tipe' => $this->input->post('nama_tipe'),
                'warna' => $this->input->post('warna'),
                'jenis_transmisi' => $this->input->post('jenis_transmisi'),
                'bahan_bakar' => $this->input->post('bahan_bakar'),
                'jumlah_kapasitas' => $this->input->post('jumlah_kapasitas'),
                'harga_sewa' => $this->input->post('harga_sewa'),
                'stok' => $this->input->post('stok'),
                'image' => $gambar
            );

            $this->ModelMobil->update($this->input->post('id_mobil'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Mobil Berhasil Diperbarui</div>');


            redirect('mobil');
        } else {
            $this->tambah_mobil();
        }
    }

    public function hapus_mobil($id)
    {
        $delete = $this->ModelMobil->get_id_mobil($id);

        if (delete) {
            $this->ModelMobil->hapus_mobil($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Mobil Berhasil Dihapus</div>');
            redirect('mobil');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-ban"></i> Data Mobil Gagal Dihapus</div>');
            redirect('mobil');
        }
    }

    public function detail_mobil($id)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['mobil'] = $this->ModelMobil->get_id_mobil($id);
        $data['judul'] = 'Detail Mobil';

        if ($data['mobil']) {
            $data['merk'] = $this->ModelMobil->get_merk();
            $data['tipe'] = $this->ModelMobil->get_tipe();
            $data['transmisi'] = $this->ModelMobil->get_transmisi();
            $data['kapasitas'] = $this->ModelMobil->get_kapasitas();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('mobil/form_detail_mobil', $data);
            $this->load->view('user/admin/footer');
        }
    }




    public function detail_mobil_home($id)
    {

        $data['mobil'] = $this->ModelMobil->get_id_mobil($id);
        $data['judul'] = 'Detail Data Mobil';

        if ($data['mobil']) {
            $data['merk'] = $this->ModelMobil->get_merk();
            $data['tipe'] = $this->ModelMobil->get_tipe();
            $data['transmisi'] = $this->ModelMobil->get_transmisi();
            $data['kapasitas'] = $this->ModelMobil->get_kapasitas();

            $this->load->view('mobil/detail_mobil_home', $data);
        }
    }

    public function detail_mobil_cust($id)
    {

        $data['mobil'] = $this->ModelMobil->get_id_mobil($id);
        $data['judul'] = 'Detail Data Mobil';

        if ($data['mobil']) {
            $data['merk'] = $this->ModelMobil->get_merk();
            $data['tipe'] = $this->ModelMobil->get_tipe();
            $data['transmisi'] = $this->ModelMobil->get_transmisi();
            $data['kapasitas'] = $this->ModelMobil->get_kapasitas();

            $this->load->view('mobil/detail_mobil_cust', $data);
        }
    }





    public function merk()
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Merk Mobil';
        $data['merk'] = $this->ModelMobil->get_merk();


        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('mobil/merk/form_merk_mobil', $data);
        $this->load->view('user/admin/footer');
    }

    public function simpan_merk()
    {
        $this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'required', [
            'required' => 'Merk Mobil Harus Di Isi !'
        ]);


        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'merk_mobil' => $this->input->post('merk_mobil')
            );

            $this->ModelMobil->tambah_merk($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Merk Mobil Berhasil Ditambahkan</div>');

            redirect('mobil/merk');
        } else {
            $this->merk();
        }
    }

    public function edit_merk($id)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Ubah Merk Mobil';
        $data['mrk'] = $this->ModelMobil->get_id_merk($id);

        if ($data['mrk']) {
            $data['merk'] = $this->ModelMobil->get_merk();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('mobil/merk/form_edit_merk', $data);
            $this->load->view('user/admin/footer');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-exclamation-triangle"></i> Merk Mobil Sudah Terdaftar</div>');

            redirect('mobil/merk');
        }
    }

    public function update_merk()
    {
        $this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'required|is_unique[merk.merk_mobil]', [
            'is_unique' => 'Merk Mobil Sudah Terdaftar',
            'required' => 'Merk Mobil Harus Di Isi !'
        ]);

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'merk_mobil' => $this->input->post('merk_mobil'),
            );

            $this->ModelMobil->update_merk($this->input->post('id_merk'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Merk Mobil Berhasil Diperbarui</div>');

            redirect('mobil/merk');
        } else {
            $this->merk();
        }
    }

    public function hapus_merk($id)
    {
        $delete = $this->ModelMobil->get_id_merk($id);

        if (delete) {
            $this->ModelMobil->hapus_merk($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Merk Mobil Berhasil Dihapus</div>');
            redirect('mobil/merk');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-ban"></i> Merk Mobil  Tidak Terdaftar</div>');
            redirect('mobil/merk');
        }
    }



    public function tipe()
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Tipe Mobil';
        $data['tipe'] = $this->ModelMobil->get_tipe();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('mobil/tipe/form_tipe_mobil', $data);
        $this->load->view('user/admin/footer');
    }

    public function simpan_tipe()
    {
        $this->form_validation->set_rules('nama_tipe', 'Tipe Mobil', 'required', [
            'required' => 'Tipe Mobil Harus Di Isi !'
        ]);


        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nama_tipe' => $this->input->post('nama_tipe')
            );

            $this->ModelMobil->tambah_tipe($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Tipe Mobil Berhasil Ditambahkan</div>');

            redirect('mobil/tipe');
        } else {
            $this->tipe();
        }
    }

    public function edit_tipe($id)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Ubah Tipe Mobil';
        $data['tp'] = $this->ModelMobil->get_id_tipe($id);

        if ($data['tp']) {
            $data['tipe'] = $this->ModelMobil->get_tipe();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('mobil/tipe/form_edit_tipe', $data);
            $this->load->view('user/admin/footer');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-exclamation-triangle"></i> Tipe Mobil Sudah Terdaftar</div>');

            redirect('mobil/tipe');
        }
    }

    public function update_tipe()
    {
        $this->form_validation->set_rules('nama_tipe', 'Tipe Mobil', 'required|is_unique[tipe.nama_tipe]', [
            'is_unique' => 'Tipe Mobil Sudah Terdaftar',
            'required' => 'Tipe Mobil Harus Di Isi !'
        ]);

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'nama_tipe' => $this->input->post('nama_tipe'),
            );

            $this->ModelMobil->update_tipe($this->input->post('id_tipe'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Tipe Mobil Berhasil Diperbarui</div>');

            redirect('mobil/tipe');
        } else {
            $this->tipe();
        }
    }

    public function hapus_tipe($id)
    {
        $delete = $this->ModelMobil->get_id_tipe($id);

        if (delete) {
            $this->ModelMobil->hapus_tipe($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Tipe Mobil Berhasil Dihapus</div>');
            redirect('mobil/tipe');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-ban"></i> Tipe Mobil Tidak Terdaftar</div>');
            redirect('mobil/tipe');
        }
    }










    public function transmisi()
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Transmisi Mobil';
        $data['transmisi'] = $this->ModelMobil->get_transmisi();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('mobil/transmisi/form_transmisi_mobil', $data);
        $this->load->view('user/admin/footer');
    }

    public function simpan_transmisi()
    {
        $this->form_validation->set_rules('jenis_transmisi', 'Transmisi Mobil', 'required', [
            'required' => 'Transmisi Mobil Harus Di Isi !'
        ]);


        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'jenis_transmisi' => $this->input->post('jenis_transmisi')
            );

            $this->ModelMobil->tambah_transmisi($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Transmisi Mobil Berhasil Ditambahkan</div>');

            redirect('mobil/transmisi');
        } else {
            $this->transmisi();
        }
    }


    public function edit_transmisi($id)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Ubah Transmisi Mobil';
        $data['tr'] = $this->ModelMobil->get_id_transmisi($id);

        if ($data['tr']) {
            $data['transmisi'] = $this->ModelMobil->get_transmisi();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('mobil/transmisi/form_edit_transmisi', $data);
            $this->load->view('user/admin/footer');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-exclamation-triangle"></i> Transmisi Mobil Sudah Terdaftar</div>');

            redirect('mobil/transmisi');
        }
    }

    public function update_transmisi()
    {
        $this->form_validation->set_rules('jenis_transmisi', 'Transmisi Mobil', 'required|is_unique[transmisi.jenis_transmisi]', [
            'is_unique' => 'Transmisi Mobil Sudah Terdaftar',
            'required' => 'Transmisi Mobil Harus Di Isi !'
        ]);

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'jenis_transmisi' => $this->input->post('jenis_transmisi'),
            );

            $this->ModelMobil->update_transmisi($this->input->post('id_transmisi'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Transmisi Mobil Berhasil Diperbarui</div>');

            redirect('mobil/transmisi');
        } else {
            $this->transmisi();
        }
    }

    public function hapus_transmisi($id)
    {
        $delete = $this->ModelMobil->get_id_transmisi($id);

        if (delete) {
            $this->ModelMobil->hapus_tipe($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Transmisi Mobil Berhasil Dihapus</div>');
            redirect('mobil/transmisi');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-ban"></i> Transmisi Mobil Tidak Terdaftar</div>');
            redirect('mobil/transmisi');
        }
    }



    public function kapasitas()
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Kapasitas Mobil';
        $data['kapasitas'] = $this->ModelMobil->get_kapasitas();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('mobil/kapasitas/form_kapasitas_mobil', $data);
        $this->load->view('user/admin/footer');
    }

    public function simpan_kapasitas()
    {
        $this->form_validation->set_rules('jumlah_kapasitas', 'Kapasitas Mobil', 'required', [
            'required' => 'Kapasitas Mobil Harus Di Isi !'
        ]);


        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'jumlah_kapasitas' => $this->input->post('jumlah_kapasitas')
            );

            $this->ModelMobil->tambah_kapasitas($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Kapasitas Mobil Berhasil Ditambahkan</div>');

            redirect('mobil/kapasitas');
        } else {
            $this->kapasitas();
        }
    }


    public function edit_kapasitas($id)
    {
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['judul'] = 'Ubah Kapasitas Mobil';
        $data['kp'] = $this->ModelMobil->get_id_kapasitas($id);

        if ($data['kp']) {
            $data['kapasitas'] = $this->ModelMobil->get_kapasitas();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('mobil/kapasitas/form_edit_kapasitas', $data);
            $this->load->view('user/admin/footer');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-exclamation-triangle"></i> Kapasitas Mobil Sudah Terdaftar</div>');

            redirect('mobil/kapasitas');
        }
    }

    public function update_kapasitas()
    {
        $this->form_validation->set_rules('jumlah_kapasitas', 'Kapasitas Mobil', 'required|is_unique[kapasitas.jumlah_kapasitas]', [
            'is_unique' => 'Kapasitas Mobil Sudah Terdaftar',
            'required' => 'Kapasitas Mobil Harus Di Isi !'
        ]);

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'jumlah_kapasitas' => $this->input->post('jumlah_kapasitas'),
            );

            $this->ModelMobil->update_kapasitas($this->input->post('id_kapasitas'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Kapasitas Mobil Berhasil Diperbarui</div>');

            redirect('mobil/kapasitas');
        } else {
            $this->kapasitas();
        }
    }

    public function hapus_kapasitas($id)
    {
        $delete = $this->ModelMobil->get_id_kapasitas($id);

        if (delete) {
            $this->ModelMobil->hapus_kapasitas($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Kapasitas Mobil Berhasil Dihapus</div>');
            redirect('mobil/kapasitas');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-ban"></i> Kapasitas Mobil Tidak Terdaftar</div>');
            redirect('mobil/kapasitas');
        }
    }






















    public function _rules_tambah()
    {
        $this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required', [
            'required' => 'Nama Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'required', [
            'required' => 'Merk Mobil Harus Dipilih !',
        ]);

        $this->form_validation->set_rules(
            'tahun_rilis',
            'Tahun Rilis',
            'required',
            [
                'required' => 'Tahun Rilis Harus Dipilih !',
            ]
        );

        $this->form_validation->set_rules('no_polisi', 'No Plat Mobil', 'required|trim|is_unique[mobil.no_polisi]', [
            'required' => 'No Plat Harus Diisi !',
            'is_unique' => 'No Plat Sudah Terpakai'
        ]);

        $this->form_validation->set_rules(
            'nama_tipe',
            'Tipe Mobil',
            'required',
            [
                'required' => 'Tipe Mobil Harus Dipilih !',
            ]
        );

        $this->form_validation->set_rules('warna', 'Warna', 'required', [
            'required' => 'Warna Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules('jenis_transmisi', 'Transmisi Mobil', 'required', [
            'required' => 'Transmisi Mobil Harus Dipilih !',
        ]);

        $this->form_validation->set_rules('bahan_bakar', 'Bahan Bakar', 'required', [
            'required' => 'Bahan Bakar Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules('jumlah_kapasitas', 'Kapasitas Mobil', 'required', [
            'required' => 'Kapasitas Mobil Harus Dipilih !',
        ]);

        $this->form_validation->set_rules('harga_sewa', 'Harga Sewa', 'required', [
            'required' => 'Harga Sewa Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules(
            'stok',
            'Stok Mobil',
            'required|numeric',
            [
                'required' => 'Stok Mobil Harus Diisi !',
                'numeric' => 'Harus Diisi Dengan Angka !'
            ]
        );
    }


    public function _rules_update()
    {
        $this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required', [
            'required' => 'Nama Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'required', [
            'required' => 'Merk Mobil Harus Dipilih !',
        ]);

        $this->form_validation->set_rules(
            'tahun_rilis',
            'Tahun Rilis',
            'required',
            [
                'required' => 'Tahun Rilis Harus Dipilih !',
            ]
        );

        $this->form_validation->set_rules('no_polisi', 'No Plat Mobil', 'required', [
            'required' => 'No Plat Harus Diisi !',
        ]);

        $this->form_validation->set_rules(
            'nama_tipe',
            'Tipe Mobil',
            'required',
            [
                'required' => 'Tipe Mobil Harus Dipilih !',
            ]
        );

        $this->form_validation->set_rules('warna', 'Warna', 'required', [
            'required' => 'Warna Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules('jenis_transmisi', 'Transmisi Mobil', 'required', [
            'required' => 'Transmisi Mobil Harus Dipilih !',
        ]);

        $this->form_validation->set_rules('bahan_bakar', 'Bahan Bakar', 'required', [
            'required' => 'Bahan Bakar Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules('jumlah_kapasitas', 'Kapasitas Mobil', 'required', [
            'required' => 'Kapasitas Mobil Harus Dipilih !',
        ]);

        $this->form_validation->set_rules('harga_sewa', 'Harga Sewa', 'required', [
            'required' => 'Harga Sewa Mobil Harus Diisi !',
        ]);

        $this->form_validation->set_rules(
            'stok',
            'Stok Mobil',
            'required|numeric',
            [
                'required' => 'Stok Mobil Harus Diisi !',
                'numeric' => 'Harus Diisi Dengan Angka !'
            ]
        );
    }
}
