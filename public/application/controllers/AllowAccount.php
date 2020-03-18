<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AllowAccount extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('components/Update');
        session_start();
    }

    public function index()
    {
        if (isset($_SESSION) && $_SESSION['logged_in'] == TRUE) {
            if ($_SESSION['access'] == 0) {
                $AccountID = $this->input->get('AccountID');
                $P = $this->input->get('P');
                $this->Update->upDatePermissionWhereAccountID($AccountID, $P);
                header('Location: ApproveRegister');
            } else {
                header('Location: Home');
            }
        } else {
            header('Location: Login');
        }
    }
}
