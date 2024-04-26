<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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
        $this->load->model('Mahasiswa_model');
    }

	public function index()
	{
        $data['result'] = $this->Mahasiswa_model->getAllData();
        if(is_null($data)){
            $this->load->view('layout/header.php');
            $this->load->view('mahasiswa/index.php');
        }else{
            $this->load->view('layout/header.php');
            $this->load->view('mahasiswa/index.php', $data);
        }
	}

    public function create(){
        $this->load->helper('form');
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('birth'),
            'alamat' => $this->input->post('alamat'),
        );
        $this->Mahasiswa_model->create($data);
        redirect(base_url().'mahasiswa');
    }

    public function edit($nim){
        $data['result'] = $this->Mahasiswa_model->getDataById($nim);
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header.php');
            $this->load->view('mahasiswa/edit.php', $data);
        }
        else
        {
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'tanggal_lahir' => $this->input->post('birth'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->Mahasiswa_model->edit($data);
            redirect(base_url().'mahasiswa');
        }
    }

    public function delete($nim){
        $this->Mahasiswa_model->delete($nim);
        redirect(base_url().'mahasiswa');
    }
}