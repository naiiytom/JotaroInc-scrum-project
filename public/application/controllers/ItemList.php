<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('bell/query');
        //$this->load->library('session');
        $this->load->helper('url');
        
    }

    public function index()
    {
        session_start();
        $AccessID = $_SESSION["AccessID"];
        $username = $_SESSION["username"];

        //$username = $this->session->userdata("username");
        //if(null !== $this->session->userdata("token")){
        if($this->query->tokenrecords($username) == TRUE){
            //$AccessID = $this->session->userdata("AccessID");
            if($AccessID == '0'){
                $result['data']=$this->query->itemlistrecordsAll();
                $this->load->view('header', array('title' => 'Welcome to Backends'));
                $this->load->view('menubar');
                $this->load->view('itemlist_admin',$result);
                $this->load->view('footer');
            }else{
                $result['data']=$this->query->itemlistrecordsAll();
                $this->load->view('header', array('title' => 'Welcome to Backends'));
                $this->load->view('menubar');
                $this->load->view('itemlist_user',$result);
                $this->load->view('footer');
            }
            
        } else {
            redirect("login"); 
        }
    }

}
