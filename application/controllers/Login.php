<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

    public function index(){
        $this->load->view('login/index.php');
    }
	public function login()
	{
		$this->load->model('Users_model');
		$this->load->library('form_validation');

		$username = $this->input->post('username');
		$password = $this->input->post('pass');

		if($this->Users_model->login($username, $password)){
			redirect('jadwalmahasiswa');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		redirect('login');
	}

	public function logout()
	{
		$this->load->model('Users_model');
		$this->Users_model->logout();
		redirect(base_url().'login');
	}
}