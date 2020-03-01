<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->session->has_userdata('token')) {
            redirect('/', 'refresh');
        }

        $this->load->view('header', array('title' => 'Login Page'));
        if ($this->session->flashdata('login_failed') == true) {
            $this->load->view('error_msg', array(
                'color' => 'alert-danger',
                'title' => 'Login failed!',
                'message' => 'You have been enter incorrect Username or Password.'
            ));
        } else if ($this->session->flashdata('server_failed')) {
            $this->load->view('error_msg', array(
                'color' => 'alert-danger',
                'title' => 'Login failed!',
                'message' => 'Internal Server Error'
            ));
        }
        $this->load->view('login');
        $this->load->view('footer');
    }
}
