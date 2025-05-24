<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function index()
    {
        $this->load->view('v_login');
    }

    public function aksi()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('login');
        } else {
            $username = $this->input->post('username');
            $password = ($this->input->post('password'));

            $where = array(
                'pengguna_username' => $username,
                'pengguna_password' => md5($password)
            );

            $cek = $this->db->get_where('pengguna', $where);

            if ($cek->num_rows() > 0) {
                foreach ($cek->result() as $data) {
                    $sess_data['pengguna_id'] = $data->pengguna_id;
                    $sess_data['pengguna_username'] = $data->pengguna_username;
                    $sess_data['pengguna_level'] = $data->pengguna_level;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            } else {
                redirect('login?alert=gagal');
            }
        }
    }
}