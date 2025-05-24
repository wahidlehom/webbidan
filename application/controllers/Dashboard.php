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
}
