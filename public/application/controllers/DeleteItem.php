<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeleteItem extends CI_Controller
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
        $ItemSN=$this->input->get('ItemSN');
	    $this->delete->deleterecords($ItemSN);
        
        $username = $this->session->userdata("username");
        //if(null !== $this->session->userdata("token")){
        if($this->query->tokenrecords($username) == TRUE){
            $result['data']=$this->query->displayrecords();
            $this->load->view('header', array('title' => 'Welcome to Backends'));
            $this->load->view('menubar');
            $this->load->view('itemlist_admin',$result);
            $this->load->view('footer');
        } else {
            redirect("login"); 
        }
    }

}
