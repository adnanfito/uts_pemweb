<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->model('Users_model');
    }

    public function index()
    {
        $this->load->view('register/index.php');
    }

    public function register()
    {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('pass'),
            );
            $copass = $this->input->post('copass');
            $pass = $this->input->post('pass');
            if($pass == $copass){
                $register_user = new Users_model;
                $checking = $register_user->registerUser($data);
                if($checking)
                {
                    $this->session->set_flashdata('status','Registered Successfully.! Go to Login');
                    redirect(base_url('login'));
                }
                else
                {
                    $this->session->set_flashdata('status','Something Went Wrong.!');
                    redirect(base_url('register'));
                }
            }
            redirect(base_url('register'));
    }
}

?>