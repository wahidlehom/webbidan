<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  @property M_data $M_data 
 */
class Dashboard extends CI_Controller {
    function __construct()
    {  
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        // $this->load->database();
        // $this->load->helper('url');
        $this->load->model('M_data');

        // Check session status; if not logged in, redirect to login page
        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

    public function index()
    {
        $this->load->view('Dashboard/v_header'); // Fixed typo in view path
        $this->load->view('Dashboard/v_index');
        $this->load->view('Dashboard/v_footer');
    }

    public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}

    // FUNCTION HALAMAN OBAT
    public function obat()
    {
        $data['obat']= $this->M_data->get_data('obat')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/v_obat', $data);
        $this->load->view('Dashboard/v_footer');
    }

    // FUNCTION HALAMAN PASIEN
    public function pasien()
    {
        $data['pasien']= $this->M_data->get_data('pasien')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/v_pasien', $data);
        $this->load->view('Dashboard/v_footer');
    }

    public function pasien_tambah()
    {
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/form/v_pasienTambah');
        $this->load->view('Dashboard/v_footer');
    }

    public function pasien_aksi()
    {
        $data = array(
            'nama_istri' => $this->input->post('namaIstri'),
            'nik_istri' => $this->input->post('nikIstri'),
            'pendidikan_istri' => $this->input->post('pendidikanIstri'),
            'golDarah_istri' => $this->input->post('golDarahIstri'),
            'pekerjaan_istri' => $this->input->post('pekerjaanIstri'),
            'noTelpon_istri' => $this->input->post('noTelponIstri'),
            'nama_suami' => $this->input->post('namaSuami'),
            'nik_suami' => $this->input->post('nikSuami'),
            'pendidikan_suami' => $this->input->post('pendidikanSuami'),
            'golDarah_suami' => $this->input->post('golDarahSuami'),
            'pekerjaan_suami' => $this->input->post('pekerjaanSuami'),
            'noTelpon_suami' => $this->input->post('noTelponSuami')
        );

        $this->M_data->insert_data($data, 'pasien');
        redirect('dashboard/pasien');
    }
}
