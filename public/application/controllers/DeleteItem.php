<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeleteItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('components/Delete');
    }

    public function index()
    {
        $ItemSN = $this->input->get('ItemSN');
        $this->Delete->deleteItemWhereItemSN($ItemSN);
        header('Location: ItemList');
    }
}
