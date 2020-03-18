<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeleteItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('components/Delete');
        session_start();
    }

    public function index()
    {
        if (isset($_SESSION) && $_SESSION['logged_in'] == TRUE) {
            if ($_SESSION['access'] == 0) {
                $ItemSN = $this->input->get('ItemSN');
                $this->Delete->deleteItemWhereItemSN($ItemSN);
                header('Location: ItemList');
            } else {
                header('Location: Home');
            }
        } else {
            header('Location: Login');
        }
    }
}
