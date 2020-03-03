<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UpdateItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('bell/query');
        $this->load->model('bell/update');
        //$this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        session_start();
        $AccessID = $_SESSION["AccessID"];
        $username = $_SESSION["username"];

        $ItemID = $this->input->POST('ItemID');
        $ItemName = $this->input->POST('ItemName');
        $ItemModel = $this->input->POST('ItemModel');
        $ItemBrand = $this->input->POST('ItemBrand');
        $ItemDescript = $this->input->POST('ItemDescript');
        $LocalName = $this->input->POST('LocalName');
        $CatName = $this->input->POST('CatName');
        $StatusName = $this->input->POST('StatusName');
        $ItemYear = $this->input->POST('ItemYear');
        $ItemSN = $this->input->POST('ItemSN');

	    $this->update->itemlistUpdate($ItemID, $ItemName, $ItemModel, $ItemBrand, $ItemDescript, $LocalName, $CatName, $StatusName, $ItemYear, $ItemSN);
        
        //$username = $this->session->userdata("username");
        //if(null !== $this->session->userdata("token")){
        if($this->query->tokenrecords($username) == TRUE){
            $result['data']=$this->query->itemlistrecordsAll();
            $this->load->view('header', array('title' => 'Welcome to Backends'));
            $this->load->view('menubar');
            $this->load->view('itemlist_admin',$result);
            $this->load->view('footer');
        } else {
            redirect("login"); 
        }
    }


}
