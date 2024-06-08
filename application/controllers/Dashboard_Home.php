<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ModelCust', 'ModelMobil', 'ModelSewa']);
    }

    public function index()
    {
        $data = [
            'judul' => "Katalog Mobil",
            'mobil' => $this->ModelMobil->get_mobil(),
        ];

        //jika sudah login dan jika belum login
        if ($this->session->userdata('email_cust')) {
            $cust = $this->ModelCust->cekData(['email_cust' => $this->session->userdata('email_cust')])->row_array();

            $data['cust'] = $cust['nama_lengkap_cust'];
            $this->load->view('dashboard/cust', $data);
        } else {
            $data['cust'] = 'Rental 88';
            $this->load->view('dashboard/home', $data);
        }
    }

    public function contac()
    {
        $data['judul'] = 'Contac';
        $data['cust'] = $this->ModelCust->cekData(['email_cust' => $this->session->userdata('email_cust')])->row_array();
        $data['mobil'] = $this->ModelMobil->getLimitMobil()->result_array();

        $this->load->view('dashboard/contac_home', $data);
    }

    public function about()
    {
        $data['judul'] = 'Tentang Kami';
        $data['cust'] = $this->ModelCust->cekData(['email_cust' => $this->session->userdata('email_cust')])->row_array();

        $this->load->view('dashboard/about_home', $data);
    }
}
