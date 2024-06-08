<?php

class Autentifikasi_Cust extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ModelCust']);
    }

    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if ($this->session->userdata('email_cust')) {
            redirect('dashboard_cust');
        }

        $this->form_validation->set_rules('email_cust', 'Email Customer', 'required|trim|valid_email', [
            'required' => 'Email Customer Harus Diisi !!',
            'valid_email' => 'Email Customer Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password_cust', 'Kata Sandi', 'required|trim', [
            'required' => 'Kata Sandi Harus Diisi !!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Customer';
            $this->load->view('autentifikasi/login_cust', $data);

            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email_cust = htmlspecialchars($this->input->post('email_cust', true));
        $password_cust = $this->input->post('password_cust', true);

        $cust = $this->ModelCust->cekData(['email_cust' => $email_cust])->row_array();

        //jika usernya ada
        if ($cust) {
            //jika user sudah aktif
            if ($cust['is_active'] == 1) {
                //cek password
                if (password_verify($password_cust, $cust['password_cust'])) {
                    $data = [
                        'email_cust' => $cust['email_cust'],
                        'id_cust' => $cust['id_cust'],
                        'nama_lengkap_cust' => $cust['nama_lengkap_cust'],
                        'nama_panggilan_cust' => $cust['nama_panggilan_cust']
                    ];


                    $this->session->set_userdata($data);
                    redirect('dashboard_cust');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-check"></i> Kata Sandi Salah !</div>');
                    redirect('autentifikasi_cust');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fas fa-check"></i> Akun Customer Belum Diaktifasi !</div>');
                redirect('autentifikasi_cust');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Email Tidak Terdaftar !</div>');
            redirect('autentifikasi_cust');
        }
    }

    public function register()
    {

        //membuat rule untuk inputan nama dan alamat agar tidak boleh kosong dengan membuat pesan error dengan 
        //bahasa sendiri yaitu 'Nama Harus Diisni', 'Alamat Harus Diisi'

        $this->form_validation->set_rules('nama_lengkap_cust', 'Nama Lengkap', 'required', [
            'required' => 'Nama Lengkap Harus Diisi'
        ]);

        $this->form_validation->set_rules('nama_panggilan_cust', 'Nama Panggilan', 'required', [
            'required' => 'Nama Panggilan Harus Diisi'
        ]);

        $this->form_validation->set_rules('alamat_cust', 'Alamat Lengkap', 'required', [
            'required' => 'Alamat Lengkap Harus Diisi'
        ]);

        $this->form_validation->set_rules('jenis_kelamin_cust', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Harus Dipilih'
        ]);

        //membuat rule untuk inputan email customer agar tidak boleh kosong, tidak ada spasi, format email harus valid
        //dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri 
        //yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email customer belum diisi,
        //maka pesannya adalah 'Email Harus Diisi', dan jika email yang diinput sudah dipakai user lain,
        //maka pesannya 'Email Sudah Terdaftar'

        $this->form_validation->set_rules('email_cust', 'Email Customer', 'required|trim|valid_email|is_unique[cust.email_cust]', [
            'required' => 'Email Harus Diisi',
            'valid_email' => 'Email Tidak Benar',
            'is_unique' => 'Email Sudah Terdaftar'
        ]);

        //membuat rule untuk inputan kata sandi agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
        //dari 3 digit, dan kata sandi harus sama dengan confirm kata sandi dengan membuat pesan error dengan  
        //bahasa sendiri yaitu jika kata sandi dan confirm kata sandi tidak diinput sama, maka pesannya
        //'Kata Sandi Tidak Sama'. jika kata sandi diisi kurang dari 3 digit, maka pesannya adalah 
        //'Kata Sandi Terlalu Pendek'.
        $this->form_validation->set_rules('password_cust', 'Kata Sandi', 'required|trim|min_length[3]|matches[confirm_password_cust]', [
            'required' => 'Kata Sandi Harus Diisi',
            'matches' => 'Kata Sandi Tidak Sama',
            'min_length' => 'Kata Sandi Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('confirm_password_cust', 'Ulangi Kata Sandi', 'required|trim|matches[password_cust]', [
            'required' => 'Ulangi Kata Sandi Harus Diisi',
            'matches' => 'Kata Sandi Tidak Sama'
        ]);

        //jika data disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
        //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang 
        //diinput akan disimpan ke dalam tabel customer

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Customer';
            $this->load->view('autentifikasi/regist_cust', $data);
        } else {

            $data = [
                'nama_lengkap_cust' => htmlspecialchars($this->input->post('nama_lengkap_cust', true)),
                'nama_panggilan_cust' => htmlspecialchars($this->input->post('nama_panggilan_cust', true)),
                'jenis_kelamin_cust' => htmlspecialchars($this->input->post('jenis_kelamin_cust', true)),
                'alamat_cust' => htmlspecialchars($this->input->post('alamat_cust', true)),
                'email_cust' => htmlspecialchars($this->input->post('email_cust', true)),
                'image_cust' => 'default.jpg',
                'password_cust' => password_hash($this->input->post('password_cust'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'tanggal_input_cust' => time()
            ];

            $this->ModelCust->simpanCust($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Selamat! Anda Sudah Berhasil Registrasi. Silahkan Login Sebagai Customer !</div>');
            redirect('autentifikasi_cust');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email_cust');
        $this->session->unset_userdata('nama_lengkap_cust');
        $this->session->unset_userdata('nama_panggilan_cust');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fas fa-check"></i> Anda Berhasil Logout</div>');
        redirect('autentifikasi_cust');
    }
}
