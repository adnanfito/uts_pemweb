<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

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
        $this->load->model('Matakuliah_model');
    }

	public function index()
	{
        $data['result'] = $this->Matakuliah_model->getAllData();
        if(is_null($data)){
            $this->load->view('layout/header.php');
            $this->load->view('matakuliah/index.php');
        }else{
            $this->load->view('layout/header.php');
            $this->load->view('matakuliah/index.php', $data);
        }
	}

    public function create(){
        $this->load->helper('form');
        $data = array(
            'nama_matakuliah' => $this->input->post('nama'),
        );
        $this->Matakuliah_model->create($data);
        redirect(base_url().'matakuliah');
    }
    public function edit($id){
        $data['result'] = $this->Matakuliah_model->getDataById($id);
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('layout/header.php');
            $this->load->view('matakuliah/edit.php', $data);
        }
        else
        {
            $data = array(
                'id_matakuliah' => $this->input->post('id'),
                'nama_matakuliah' => $this->input->post('nama'),
            );
            $this->Matakuliah_model->edit($data);
            redirect(base_url().'matakuliah');
        }
    }

    public function delete($id){
        $this->Matakuliah_model->delete($id);
        redirect(base_url().'matakuliah');
    }
}