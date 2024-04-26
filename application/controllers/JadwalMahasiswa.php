<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
		$this->load->model('JadwalMhs_model');
        $this->load->model('Jadwal_model');
        $this->load->model('Mahasiswa_model');
    }
	public function index()
	{	
        $data['result'] = $this->JadwalMhs_model->getAllData();
        $data['jadwal'] = $this->Jadwal_model->getAllData();
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllData();
        $data['kuota'] = $this->JadwalMhs_model->sumData();
		
		$this->load->view('layout/header.php');
		$this->load->view('jadwalmhs/index.php',$data);
	}
	public function create(){
        $this->load->helper('form');
        $data = array(
            'id_jadwal' => $this->input->post('jadwal'),
            'nim' => $this->input->post('nama'),
        );
        $this->JadwalMhs_model->create($data);
        redirect(base_url().'jadwalmahasiswa');
    }
    public function edit($id){
        $data['result'] = $this->JadwalMhs_model->getDataById($id);
		$data['jadwal'] = $this->Jadwal_model->getAllData();
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllData();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama ruang', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header.php');
            $this->load->view('jadwalmhs/edit.php', $data);
        }
        else
        {
            $data = array(
                'id_jadwal_mahasiswa' =>  $id,
                'id_jadwal' => $this->input->post('jadwal'),
                'nim' => $this->input->post('nama'),
            );
            $this->JadwalMhs_model->edit($data);
            redirect(base_url().'jadwalmahasiswa');
        }
    }

    public function delete($id){
        $this->JadwalMhs_model->delete($id);
        redirect(base_url().'jadwalmahasiswa');
    }
}