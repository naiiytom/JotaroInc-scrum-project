<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('bell/query');
        $this->load->model('bell/delete');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        
        $username = $this->session->userdata("username");
        //if(null !== $this->session->userdata("token")){
        if($this->query->tokenrecords($username) == TRUE){

            $array_items = array('username', 'AccessID', 'token');
            $this->delete->deleteToken($username);
            $this->session->unset_userdata($array_items);
            redirect("login");
        } else {
            redirect("login"); 
        }
    }

}