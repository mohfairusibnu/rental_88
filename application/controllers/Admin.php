<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //cek_login();
        $this->load->model('ModelAdmin', 'ModelCust');
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/profil', $data);
        $this->load->view('user/admin/footer');
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();
        $this->form_validation->set_rules(
            'nama_lengkap_admin',
            'Nama Lengkap',
            'required|trim',
            [
                'required' => 'Nama Lengkap Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'nama_panggilan_admin',
            'Nama Panggilan',
            'required|trim',
            [
                'required' => 'Nama Panggilan Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'alamat_admin',
            'Alamat',
            'required|trim',
            [
                'required' => 'Alamat Tidak Boleh Kosong'
            ]
        );


        if ($this->form_validation->run() == false) {
            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('user/admin/sidebar', $data);
            $this->load->view('user/admin/ubahprofil', $data);
            $this->load->view('user/admin/footer');
        } else {
            $nama_lengkap_admin = $this->input->post('nama_lengkap_admin', true);
            $nama_panggilan_admin = $this->input->post('nama_panggilan_admin', true);
            $alamat_admin = $this->input->post('alamat_admin', true);
            $email_admin = $this->input->post('email_admin', true);


            //jika ada gambar yang akan diupload
            $upload_image = $_FILES['image_admin']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '3000';
                $config['max_width'] = '1024';
                $config['max_height'] = '1000';
                $config['file_name'] = 'pro' . time();
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image_admin')) {
                    $gambar_lama = $data['admin']['image_admin'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    }
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image_admin', $gambar_baru);
                } else {
                }
            }
            $this->db->set('nama_lengkap_admin', $nama_lengkap_admin);
            $this->db->set('nama_panggilan_admin', $nama_panggilan_admin);
            $this->db->set('alamat_admin', $alamat_admin);
            $this->db->where('email_admin', $email_admin);
            $this->db->update('admin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Admin Berhasil Diubah </div>');
            redirect('admin');
        }
    }


    public function dataadmin()
    {
        $data['judul'] = 'Data Admin';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['admin'] = $this->ModelAdmin->get_admin();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/dataadmin', $data);
        $this->load->view('user/admin/footer');
    }

    public function datacust()
    {
        $data['judul'] = 'Data Customer';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

        $data['cust'] = $this->ModelCust->get_cust();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/datacust', $data);
        $this->load->view('user/admin/footer');
    }

    public function tambah_datacust()
    {
        $data['judul'] = 'Tambah Data Customer';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();
        $data['cust'] = $this->ModelCust->get_cust();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/form_tambah_datacust', $data);
        $this->load->view('user/admin/footer');
    }


    public function simpan_datacust_baru()
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
                'nama_lengkap_cust' => $this->input->post('nama_lengkap_cust'),
                'jenis_kelamin_cust' => $this->input->post('jenis_kelamin_cust'),
                'alamat_cust' => $this->input->post('alamat_cust'),
                'email_cust' => $this->input->post('email_cust'),
                'password_cust' => password_hash($this->input->post('password_cust'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'tanggal_input_cust' => time(),
                'image_cust' => $gambar
            );

            $this->ModelCust->tambah_cust($data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Customer Berhasil Ditambahkan</div>');

            redirect('admin/datacust');
        } else {
            $this->tambah_datacust();
        }
    }


    public function edit_datacust($id)
    {

        $data['customer'] = $this->ModelCust->get_id_cust($id);
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();
        $data['judul'] = 'Ubah Data Customer';

        if ($data['customer']) {
            $data['cust'] = $this->ModelCust->get_cust();

            $this->load->view('user/admin/header', $data);
            $this->load->view('user/admin/sidebar');
            $this->load->view('user/admin/topbar', $data);
            $this->load->view('user/admin/form_edit_datacust', $data);
            $this->load->view('user/admin/footer');
        }
    }


    public function update_datacust()
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
                'nama_lengkap_cust' => $this->input->post('nama_lengkap_cust'),
                'jenis_kelamin_cust' => $this->input->post('jenis_kelamin_cust'),
                'alamat_cust' => $this->input->post('alamat_cust'),
                'email_cust' => $this->input->post('email_cust'),
                'password_cust' => password_hash($this->input->post('password_cust'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'image_cust' => $gambar
            );

            $this->ModelCust->update_cust($this->input->post('id_cust'), $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Customer Berhasil Diperbarui</div>');


            redirect('admin/datacust');
        } else {
            $this->tambah_datacust();
        }
    }

    public function hapus_cust($id)
    {
        $delete = $this->Modelcust->get_id_cust($id);

        if (delete) {
            $this->Modelcust->hapus_cust($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Data Customer Berhasil Dihapus</div>');
            redirect('admin/datacust');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-ban"></i> Data Customer Berhasil Dihapus</div>');
            redirect('admin/datacust');
        }
    }


    public function _rules_tambah()
    {
        $this->form_validation->set_rules('nama_lengkap_cust', 'Nama Lengkap', 'required', [
            'required' => 'Nama Lengkap Harus Diisi'
        ]);

        $this->form_validation->set_rules('jenis_kelamin_cust', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus Dipilih'
        ]);

        $this->form_validation->set_rules('alamat_cust', 'Alamat Lengkap', 'required', [
            'required' => 'Alamat Lengkap Harus Diisi'
        ]);

        $this->form_validation->set_rules('email_cust', 'Email Customer', 'required|trim|valid_email|is_unique[cust.email_cust]', [
            'required' => 'Email Harus Diisi',
            'valid_email' => 'Email Tidak Benar',
            'is_unique' => 'Email Sudah Terdaftar'
        ]);

        $this->form_validation->set_rules('password_cust', 'Kata Sandi', 'required|trim|min_length[3]|matches[confirm_password_cust]', [
            'required' => 'Kata Sandi Harus Diisi',
            'matches' => 'Kata Sandi Tidak Sama',
            'min_length' => 'Kata Sandi Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('confirm_password_cust', 'Ulangi Kata Sandi', 'required|trim|matches[password_cust]', [
            'required' => 'Ulangi Kata Sandi Harus Diisi',
            'matches' => 'Kata Sandi Tidak Sama'
        ]);
    }

    public function _rules_update()
    {
        $this->form_validation->set_rules('nama_lengkap_cust', 'Nama Lengkap', 'required', [
            'required' => 'Nama Lengkap Harus Diisi'
        ]);

        $this->form_validation->set_rules('alamat_cust', 'Alamat Lengkap', 'required', [
            'required' => 'Alamat Lengkap Harus Diisi'
        ]);
    }
}
