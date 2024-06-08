<?php

class Autentifikasi_Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['ModelAdmin']);
	}

	public function index()
	{
		//jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
		if ($this->session->userdata('email_admin')) {
			redirect('dashboard_admin');
		}

		$this->form_validation->set_rules('email_admin', 'Email Admin', 'required|trim|valid_email', [
			'required' => 'Email Harus Diisi !!',
			'valid_email' => 'Email Tidak Benar!!'
		]);
		$this->form_validation->set_rules('password_admin', 'Kata Sandi', 'required|trim', [
			'required' => 'Kata Sandi Harus Diisi !!'
		]);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Login Admin';
			$this->load->view('autentifikasi/login_admin', $data);

			//kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email_admin = htmlspecialchars($this->input->post('email_admin', true));
		$password_admin = $this->input->post('password_admin', true);

		$admin = $this->ModelAdmin->cekData(['email_admin' => $email_admin])->row_array();

		//jika usernya ada
		if ($admin) {
			//jika user sudah aktif
			if ($admin['is_active'] == 1) {
				//cek password
				if (password_verify($password_admin, $admin['password_admin'])) {
					$data = [
						'email_admin' => $admin['email_admin'],
						'id_admin' => $admin['id_admin'],
						'nama_lengkap_admin' => $admin['nama_lengkap_admin'],
						'nama_panggilan_admin' => $admin['nama_panggilan_admin']
					];


					$this->session->set_userdata($data);
					redirect('autentifikasi_admin');
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            	<i class="icon fas fa-check"></i> Kata Sandi Salah !</div>');
					redirect('autentifikasi_admin');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            	<i class="icon fas fa-check"></i> Akun Admin Belum Diaktifasi !</div>');
				redirect('autentifikasi_admin');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Email Tidak Terdaftar !</div>');
			redirect('autentifikasi_admin');
		}
	}

	public function register()
	{

		//membuat rule untuk inputan nama dan alamat agar tidak boleh kosong dengan membuat pesan error dengan 
		//bahasa sendiri yaitu 'Nama Harus Diisni', 'Alamat Harus Diisi'

		$this->form_validation->set_rules('nama_lengkap_admin', 'Nama Lengkap', 'required', [
			'required' => 'Nama Lengkap Harus Diisi'
		]);

		$this->form_validation->set_rules('nama_panggilan_admin', 'Nama Panggilan', 'required', [
			'required' => 'Nama Panggilan Harus Diisi'
		]);

		$this->form_validation->set_rules('alamat_admin', 'Alamat Lengkap', 'required', [
			'required' => 'Alamat Lengkap Harus Diisi'
		]);

		$this->form_validation->set_rules('jenis_kelamin_admin', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin  Harus Dipilih'
		]);

		//membuat rule untuk inputan email admin agar tidak boleh kosong, tidak ada spasi, format email harus valid
		//dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri 
		//yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email admin belum diisi,
		//maka pesannya adalah 'Email Harus Diisi', dan jika email yang diinput sudah dipakai user lain,
		//maka pesannya 'Email Sudah Terdaftar'

		$this->form_validation->set_rules('email_admin', 'Email Admin', 'required|trim|valid_email|is_unique[admin.email_admin]', [
			'required' => 'Email Harus Diisi',
			'valid_email' => 'Email Tidak Benar',
			'is_unique' => 'Email Sudah Terdaftar'
		]);

		//membuat rule untuk inputan kata sandi agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
		//dari 3 digit, dan kata sandi harus sama dengan confirm kata sandi dengan membuat pesan error dengan  
		//bahasa sendiri yaitu jika kata sandi dan confirm kata sandi tidak diinput sama, maka pesannya
		//'Kata Sandi Tidak Sama'. jika kata sandi diisi kurang dari 3 digit, maka pesannya adalah 
		//'Kata Sandi Terlalu Pendek'.
		$this->form_validation->set_rules('password_admin', 'Kata Sandi', 'required|trim|min_length[3]|matches[confirm_password_admin]', [
			'required' => 'Kata Sandi Harus Diisi',
			'matches' => 'Kata Sandi Tidak Sama',
			'min_length' => 'Kata Sandi Terlalu Pendek'
		]);
		$this->form_validation->set_rules('confirm_password_admin', 'Ulangi Kata Sandi', 'required|trim|matches[password_admin]', [
			'required' => 'Ulangi Kata Sandi Harus Diisi',
			'matches' => 'Kata Sandi Tidak Sama'
		]);

		//jika data disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
		//tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang 
		//diinput akan disimpan ke dalam tabel admin

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Registrasi Admin';
			$this->load->view('autentifikasi/regist_admin', $data);
		} else {

			$data = [
				'nama_lengkap_admin' => htmlspecialchars($this->input->post('nama_lengkap_admin', true)),
				'nama_panggilan_admin' => htmlspecialchars($this->input->post('nama_panggilan_admin', true)),
				'jenis_kelamin_admin' => htmlspecialchars($this->input->post('jenis_kelamin_admin', true)),
				'alamat_admin' => htmlspecialchars($this->input->post('alamat_admin', true)),
				'email_admin' => htmlspecialchars($this->input->post('email_admin', true)),
				'image_admin' => 'default.jpg',
				'password_admin' => password_hash($this->input->post('password_admin'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'tanggal_input_admin' => time()
			];

			$this->ModelAdmin->simpanDataAdmin($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Selamat! Anda Sudah Berhasil Registrasi. Silahkan Login Sebagai Admin !</div>');
			redirect('autentifikasi_admin');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email_admin');
		$this->session->unset_userdata('nama_lengkap_admin');
		$this->session->unset_userdata('nama_panggilan_admin');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Anda Berhasil Logout</div>');
		redirect('autentifikasi_admin');
	}
}
