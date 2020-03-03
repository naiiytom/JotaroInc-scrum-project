<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintenance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('bell/query', 'query');
    }

    public function index()
    {
        $ItemSN=$this->input->get('ItemSN');
        //session_start();
        $AccessID = $_SESSION["AccessID"];
        $username = $_SESSION["username"];

        $result['data']=$this->query->itemlistrecordsItemSN($ItemSN);
        
        //$username = $this->session->userdata("username");
        //if(null !== $this->session->userdata("token")){
        if($this->query->tokenrecords($username) == TRUE){
            $this->load->view('header', array('title' => 'Welcome to Backends'));
            $this->load->view('menubar');
            $this->load->view('maintenance', $result);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
}
