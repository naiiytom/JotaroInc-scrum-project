<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SignUp_Teacher extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        //$this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('header', array('title' => 'Login Page'));
        #$this->load->view('signup_student');
        $this->load->view('signup_teacher');
        $this->load->view('footer');
    }
}
