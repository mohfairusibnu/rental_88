<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['ModelAdmin', 'ModelMobil', 'ModelSewa']);
    }

    public function laporan_mobil()
    {
        $data['judul'] = 'Laporan Data Mobil';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();
        $data['mobil'] = $this->ModelMobil->get_mobil();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('laporan/mobil/laporan_mobil', $data);
        $this->load->view('user/admin/footer');
    }

    public function print_laporan_mobil()
    {
        $data['mobil'] = $this->ModelMobil->get_mobil();
        $data['tipe'] = $this->ModelMobil->get_tipe();

        $this->load->view('laporan/mobil/print_mobil', $data);
    }

    public function pdf_laporan_mobil()
    {
        $this->load->library('Dompdf_gen');

        $data['mobil'] = $this->ModelMobil->get_mobil();

        $this->load->view('laporan/mobil/pdf_mobil', $data);

        $paper = 'A4';
        $orien = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper, $orien);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan Data Mobil Rental 88.pdf');
    }

    public function excel_laporan_mobil()
    {
        $data = array(
            'title' => 'Laporan Data Mobil Rental 88',
            'mobil' => $this->ModelMobil->get_mobil()
        );

        $this->load->view('laporan/mobil/excel_mobil', $data);
    }







    public function laporan_cust()
    {
        $data['judul'] = 'Laporan Data Customer';
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();
        $data['cust'] =  $this->ModelCust->get_cust();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar', $data);
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('laporan/cust/laporan_cust', $data);
        $this->load->view('user/admin/footer');
    }

    public function print_laporan_cust()
    {
        $data['cust'] = $this->ModelCust->get_cust();

        $this->load->view('laporan/cust/print_cust', $data);
    }

    public function pdf_laporan_cust()
    {
        $this->load->library('Dompdf_gen');

        $data['cust'] = $this->ModelCust->get_cust();

        $this->load->view('laporan/cust/pdf_cust', $data);

        $paper = 'A4';
        $orien = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper, $orien);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan Data Customer Rental 88.pdf');
    }

    public function excel_laporan_cust()
    {
        $data = array(
            'title' => 'Laporan Data Customer Rental 88',
            'cust' => $this->ModelCust->get_cust()
        );

        $this->load->view('laporan/cust/excel_cust', $data);
    }








    public function laporan_penyewaan()
    {
        $data['judul'] = "Laporan Penyewaan";
        $data['profil_admin'] = $this->ModelAdmin->cekData(['email_admin' => $this->session->userdata('email_admin')])->row_array();
        $data['sewa'] = $this->ModelSewa->get_sewa();

        $this->load->view('user/admin/header', $data);
        $this->load->view('user/admin/sidebar');
        $this->load->view('user/admin/topbar', $data);
        $this->load->view('laporan/sewa/laporan_sewa', $data);
        $this->load->view('user/admin/footer');
    }

    public function print_laporan_sewa()
    {
        $data['sewa'] = $this->ModelSewa->get_sewa();

        $this->load->view('laporan/sewa/print_sewa', $data);
    }

    public function pdf_laporan_sewa()
    {
        $this->load->library('Dompdf_gen');

        $data['sewa'] = $this->ModelSewa->get_sewa();

        $this->load->view('laporan/sewa/pdf_sewa', $data);

        $paper = 'A4';
        $orien = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper, $orien);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan Data Penyewaan Rental 88.pdf');
    }

    public function excel_laporan_sewa()
    {
        $data = array(
            'title' => 'Laporan Data Penyewaan Rental 88',
            'sewa' => $this->ModelSewa->get_sewa()
        );

        $this->load->view('laporan/sewa/excel_sewa', $data);
    }
}
