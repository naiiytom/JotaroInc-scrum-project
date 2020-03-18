<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AllowMaintenance extends CI_Controller
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
                $MTID = $this->input->get('MTID');
                $ItemSN = $this->input->get('ItemSN');
                $isActive = $this->input->get('isActive');
                $StatusID = $this->input->get('StatusID');
                $this->Update->upDateIsActiveMaintenanceWhereMTID($MTID, $isActive);
                $this->Update->upDateStatusItemMaintenanceWhereItemID($ItemSN, $StatusID);
                header('Location: ApproveMaintence');
            } else {
                header('Location: Home');
            }
        } else {
            header('Location: Login');
        }
    }
}
