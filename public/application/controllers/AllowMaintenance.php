<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AllowMaintenance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('components/Update');
    }

    public function index()
    {
        $MTID = $this->input->get('MTID');
        $ItemSN = $this->input->get('ItemSN');
        $isActive = $this->input->get('isActive');
        $StatusID = $this->input->get('StatusID');
        $this->Update->upDateIsActiveMaintenanceWhereMTID($MTID, $isActive);
        $this->Update->upDateStatusItemMaintenanceWhereItemID($ItemSN, $StatusID);
        header('Location: ApproveMaintence');
    }
}
