<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        parent::__construct();
        $this->load->database();
        $this->load->model('bell/query');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata("token") != NULL){
            $ItemSN=$this->input->get('ItemSN');
            $result['data']=$this->query->itemlistrecordsItemSN($ItemSN);
            $this->load->view('header', array('title' => 'Welcome to Backends'));
            $this->load->view('menubar');
            $this->load->view('edititem',$result);
            $this->load->view('footer');
        } else {
            redirect('login');
        }
    }
}
