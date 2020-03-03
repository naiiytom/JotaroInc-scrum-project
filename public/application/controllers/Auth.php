<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php

//session_start(); //we need to start session in order to access it through CI

Class Auth extends CI_Controller {  

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('bell/query');
        $this->load->model('bell/insert');
        //$this->load->library('session');
        $this->load->helper('url');
        

    }

    // Show login page
    public function index() {
        session_start();
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->query->accountrecords($username, $password);

        $AuserName = '';
        $APassWord = '';

        foreach ($result as $row)
        {
            $AUserName = $row->AUserName;
            $APassWord = $row->APassWord;
            $AccessID = $row->AccessID;
        }
            if ($result == TRUE) {
                
                if ($username == $AUserName && $password == $APassWord) {
                    //$this->session->set_userdata('AccessID', $AccessID);
                    //$this->session->set_userdata('username', $username);
                    $_SESSION["AccessID"] = $AccessID;
                    $_SESSION["username"] = $username;

                    $token = openssl_random_pseudo_bytes(32);
                    //Convert the binary data into hexadecimal representation.
                    $random_password_hash = bin2hex($token);

                    $this->insert->insertToken($username, $random_password_hash);
                    //$this->session->set_userdata('token', $random_password_hash);
                    $_SESSION["token"] = $random_password_hash;

                    if($AccessID == '0'){
                        header('location: ItemList');
                    }
                    elseif($AccessID == '1'){
                        header('location: ItemList');
                    }
                    elseif($AccessID == '2'){
                        header('location: ItemList');
                    }
                    elseif($AccessID == '3'){
                        header('location: ItemList');
                    }
                    else{
                        header('location: login');
                    }
                }
                else if($AUserName == "" && $APassWord == ""){
                    $this->load->view('header', array('title' => 'Welcome to Backends'));
                    $this->load->view('signup');
                    $this->load->view('footer');
                }
                else{
                    $this->load->view('header', array('title' => 'Welcome to Backends'));
                    $this->load->view('signup');
                    $this->load->view('footer');
                }
                
            } else{
                $this->load->view('header', array('title' => 'Welcome to Backends'));
                $this->load->view('login');
                $this->load->view('footer');
            }
    }  
}
?>
