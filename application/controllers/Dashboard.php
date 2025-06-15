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

    //----------------------------------------- FUNCTION HALAMAN OBAT
    public function obat()
    {
        $data['obat']= $this->M_data->get_data('obat')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/v_obat', $data);
        $this->load->view('Dashboard/v_footer');
    }

    public function obat_tambah()
    {
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/form/v_obatTambah');
        $this->load->view('Dashboard/v_footer');
    }

    public function obat_aksi()
    {
        $data = array(
            'nama_obat' => $this->input->post('namaObat'),
            'stok_obat' => $this->input->post('stokObat')
        );

        $this->M_data->insert_data($data, 'obat');
        redirect('dashboard/obat');
    }

    public function obat_edit($id)
    {
        $where = array('id_obat' => $id);
        $data['obat'] = $this->M_data->edit_data($where, 'obat')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/form/v_obatEdit', $data);
        $this->load->view('Dashboard/v_footer');
    }

    public function obat_update()
    {
        $id = $this->input->post('id_obat');
        $data = array(
            'nama_obat' => $this->input->post('namaObat'),
            'stok_obat' => $this->input->post('stokObat')
        );

        $where = array('id_obat' => $id);
        $this->M_data->update_data($where, $data, 'obat');
        // Set flashdata for success message
        $this->session->set_flashdata('success', 'Data berhasil diubah.');
        redirect('dashboard/obat');
    }

    function obat_hapus($id)
    {
        $where = array('id_obat' => $id);
        $this->M_data->delete_data($where, 'obat');
        // Set flashdata for success message
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('dashboard/obat');
    }

    //------------------------------------- END FUNCTION HALAMAN OBAT


    //---------------------------------- FUNCTION HALAMAN PETUGAS
    public function petugas()
    {
        $data['petugas']= $this->M_data->get_data('petugas')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/v_petugas', $data);
        $this->load->view('Dashboard/v_footer');
    }

    public function petugas_tambah()
    {
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/form/v_petugasTambah');
        $this->load->view('Dashboard/v_footer');
    }

    // ------------------------------END FUNCTION HALAMAN PETUGAS

    
    //---------------------------------- FUNCTION HALAMAN PASIEN
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

    public function pasien_edit($id)
    {
        $where = array('id_pasien' => $id);
        $data['pasien'] = $this->M_data->edit_data($where, 'pasien')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/form/v_pasienEdit', $data);
        $this->load->view('Dashboard/v_footer');
    }

    public function pasien_update()
    {
        $id = $this->input->post('id_pasien');
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

        $where = array('id_pasien' => $id);
        $this->M_data->update_data($where, $data, 'pasien');
        // Set flashdata for success message
        $this->session->set_flashdata('success', 'Data berhasil diubah.');
        redirect('dashboard/pasien');
    }

    public function pasien_hapus($id)
    {
        $where = array('id_pasien' => $id);
        $this->M_data->delete_data($where, 'pasien');
        // Set flashdata for success message
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('dashboard/pasien');
    }
// ------------------------------END FUNCTION HALAMAN PASIEN

    //---------------------------------- FUNCTION HALAMAN CATATAN KB
    public function catatanKb()
    {
        $data['catatan_kb'] = $this->M_data->get_data('catatan_kb')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/v_catatanKb', $data);
        $this->load->view('Dashboard/v_footer');
    }

    public function catatanKb_tambah()
    {
        $data['pasien'] = $this->M_data->get_data('catatan_kb')->result();
        $this->load->view('Dashboard/v_header');
        $this->load->view('Dashboard/form/v_catatanKbTambah', $data);
        $this->load->view('Dashboard/v_footer');
    }

    public function catatanKb_aksi()
    {
        $data = array(
            'id_pasien' => $this->input->post('idPasien'),
            'tanggal_datang' => $this->input->post('tanggalDatang'),
            'tanggal_kembali' => $this->input->post('tanggalKembali'),
            'jenis_kb' => $this->input->post('jenisKb'),
            'program_kb' => $this->input->post('programKb'),
            'berat_badan' => $this->input->post('beratBadan'),
            'tinggi_badan' => $this->input->post('tinggiBadan'),
            'tensi_darah' => $this->input->post('tensiDarah'),
            'keterangan' => $this->input->post('keterangan')
        );

        $this->M_data->insert_data($data, 'catatan_kb');
        redirect('dashboard/catatanKb');
    }

    // -----------------------------END FUNCTION HALAMAN CATATAN KB
}
