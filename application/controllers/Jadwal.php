<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

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
        $this->load->model('Jadwal_model');
        $this->load->model('Matakuliah_model');
    }

	public function index()
	{
        $data['result'] = $this->Jadwal_model->getAllData();
        $data['matakuliah'] = $this->Matakuliah_model->getAllData();
        if(is_null($data)){
            $this->load->view('layout/header.php');
            $this->load->view('jadwal/index.php');
        }else{
            $this->load->view('layout/header.php');
            $this->load->view('jadwal/index.php', $data);
        }
	}

    public function create(){
        $this->load->helper('form');
        $data = array(
            'nama_ruang' => $this->input->post('ruang'),
            'id_matakuliah' => $this->input->post('matakuliah'),
            'jam_mulai' => $this->input->post('mulai'),
            'jam_selesai' => $this->input->post('selesai'),
        );
        $this->Jadwal_model->create($data);
        redirect(base_url().'jadwal');
    }
    public function edit($id){
        $data['result'] = $this->Jadwal_model->getDataById($id);
        $data['matakuliah'] = $this->Matakuliah_model->getAllData();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('ruang', 'Nama ruang', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header.php');
            $this->load->view('jadwal/edit.php', $data);
        }
        else
        {
            $data = array(
                'id_jadwal' =>  $id,
                'nama_ruang' => $this->input->post('ruang'),
                'id_matakuliah' => $this->input->post('matakuliah'),
                'jam_mulai' => $this->input->post('mulai'),
                'jam_selesai' => $this->input->post('selesai'),
            );
            $this->Jadwal_model->edit($data);
            redirect(base_url().'jadwal');
        }
    }

    public function delete($id){
        $this->Jadwal_model->delete($id);
        redirect(base_url().'jadwal');
    }
}