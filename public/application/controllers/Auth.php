<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php

//session_start(); //we need to start session in order to access it through CI

Class Auth extends CI_Controller {  

    public function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
        $this->load->helper('url');

        // Load database
        $this->load->model('');
    }

    // Show login page
    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        //$d//ata = array(
            //'username' => $this->input->post('username'),
            //'password' => $this->input->post('password')
            //);
            $result = "1";
            //$result = $this->login_database->login($data);
            if ($result == "1") {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //$result = $this->login_database->read_user_information($username);
                if ($username == "admin@mail.com" && $password == "admin1234") {
                    //$session_data = array(
                    //'username' => $result[0]->user_name,
                    //);
                    // Add user data in session
                    //$this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('header', array('title' => 'Welcome to Backends'));
                    $this->load->view('menubar');
                    $this->load->view('itemlist_admin');
                    $this->load->view('footer');
                }
                else if($username == "noaccount" && $password == "noaccount"){
                    $this->load->view('header', array('title' => 'Welcome to Backends'));
                    $this->load->view('signup');
                    $this->load->view('footer');
                }
                else if($username == "student"){
                    $this->load->view('header', array('title' => 'Welcome to Backends'));
                    $this->load->view('menubar');
                    $this->load->view('itemlist_user');
                    $this->load->view('footer');
                }
                else if($username == "teacher"){
                    $this->load->view('header', array('title' => 'Welcome to Backends'));
                    $this->load->view('menubar');
                    $this->load->view('itemlist_user');
                    $this->load->view('footer');
                }
                else{
                    $this->load->view('header', array('title' => 'Welcome to Backends'));
                    $this->load->view('login');
                    $this->load->view('footer');
                }
                
            }
    }  
}
?>
