<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('bell/insert');
    }

    public function index()
    {

        $this->load->view('header', array('title' => 'Add new item'));
        $this->load->view('menubar');
        $this->load->view('addItem');
        $this->load->view('footer');
    }

    public function add()
    {

        $ItemID = $this->input->POST('ItemID');
        $ItemName = $this->input->POST('ItemName');
        $ItemModel = $this->input->POST('ItemModel');
        $ItemBrand = $this->input->POST('ItemBrand');
        $ItemDescript = $this->input->POST('ItemDescript');
        $LocalID = $this->input->POST('LocalID');
        $CatID = $this->input->POST('CatID');
        $StatusID = $this->input->POST('StatusID');
        $ItemYear = $this->input->POST('ItemYear');
        $ItemSN = $this->input->POST('ItemSN');

        $this->insert->insertItem($ItemID, $ItemName, $ItemModel, $ItemBrand, $ItemDescript, $LocalID, $CatID, $StatusID, $ItemYear, $ItemSN);
        redirect("itemList");
    }
}
