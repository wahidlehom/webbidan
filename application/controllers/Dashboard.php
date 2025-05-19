<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {  
        parent::__construct();   
    }


	public function index()
	{
        $this->load->view('Dashboard/v_header');
		$this->load->view('Dashboard/v_index');
        $this->load->view('Dashboard/v_footer');
	}
}
