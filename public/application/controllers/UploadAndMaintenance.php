<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadAndMaintenance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('userpages/Insert');
        $this->load->model('userpages/Update');
    }

    public function index()
    {
        $ItemSN = $this->input->get('ItemSN');
        $MtDetail = $this->input->post('MtDetail');
        $HasID = $this->input->post('HasID');
        $AccountID = '1';
        $StatusID = '3';
        //$AccountID = $this->input->get('AccountID');
        if (isset($_FILES['ItemImage'])) {
            $ftemp = $_FILES['ItemImage']['tmp_name'];
            $type = $_FILES['ItemImage']['type'];
            $img = file_get_contents($ftemp);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
            $MtImage = $base64;
        }
        $InformDate = date("Y-m-d H:i:s");
        $this->Insert->insertrecordsMaintenance($ItemSN, $InformDate, $MtDetail, $MtImage, $HasID, $AccountID);
        $this->Update->upDateStatusItemMaintenanceWhereItemID($ItemSN, $StatusID);

        header('Location: Maintenance');
    }
}
