<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['ModelAdmin', 'ModelCUst', 'ModelMobil', 'ModelSewa']);
	}

	public function index()
	{

		$data['judul'] = 'Dashboard';
		$data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();

		$this->load->view('user/admin/header', $data);
		$this->load->view('user/admin/topbar', $data);
		$this->load->view('user/admin/sidebar', $data);
		$this->load->view('user/admin/contents', $data);
		$this->load->view('user/admin/footer');
	}
}
