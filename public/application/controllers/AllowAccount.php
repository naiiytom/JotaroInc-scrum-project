<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AllowAccount extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('components/Update');
    }

    public function index()
    {
        $AccountID = $this->input->get('AccountID');
        $P = $this->input->get('P');
        $this->Update->upDatePermissionWhereAccountID($AccountID, $P);
        header('Location: ApproveRegister');
    }
}
