<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cust extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //cek_login();
        $this->load->model('ModelCust');
    }


    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['cust'] = $this->ModelCust->cekData(['email_cust' => $this->session->userdata('email_cust')])->row_array();
        $this->load->view('user/cust/profil_cust', $data);
    }

    public function ubahProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['cust'] = $this->ModelCust->cekData(['email_cust' => $this->session->userdata('email_cust')])->row_array();
        $this->form_validation->set_rules(
            'nama_lengkap_cust',
            'Nama Lengkap',
            'required|trim',
            [
                'required' => 'Nama Lengkap Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'nama_panggilan_cust',
            'Nama Panggilan',
            'required|trim',
            [
                'required' => 'Nama Panggilan Tidak Boleh Kosong'
            ]
        );
        $this->form_validation->set_rules(
            'alamat_cust',
            'Alamat',
            'required|trim',
            [
                'required' => 'Alamat Tidak Boleh Kosong'
            ]
        );


        if ($this->form_validation->run() == false) {
            $this->load->view('user/cust/ubah_profil_cust', $data);
        } else {
            $nama_lengkap_cust = $this->input->post('nama_lengkap_cust', true);
            $nama_panggilan_cust = $this->input->post('nama_panggilan_cust', true);
            $alamat_cust = $this->input->post('alamat_cust', true);
            $email_cust = $this->input->post('email_cust', true);
            $password_cust = $this->input->post('password_cust', true);

            //jika ada gambar yang akan diupload
            $upload_image = $_FILES['image_cust']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '3000';
                $config['max_width'] = '1024';
                $config['max_height'] = '1000';
                $config['file_name'] = 'pro' . time();
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image_cust')) {
                    $gambar_lama = $data['cust']['image_cust'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    }
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image_cust', $gambar_baru);
                } else {
                }
            }
            $this->db->set('nama_lengkap_cust', $nama_lengkap_cust);
            $this->db->set('nama_panggilan_cust', $nama_panggilan_cust);
            $this->db->set('alamat_cust', $alamat_cust);
            $this->db->set('password_cust', $password_cust);
            $this->db->where('email_cust', $email_cust);
            $this->db->update('cust');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Customer Berhasil Diubah </div>');
            redirect('cust');
        }
    }
}
