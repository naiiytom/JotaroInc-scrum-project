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
        if (isset($_FILES["ItemImage"])) {
            foreach ($_FILES['ItemImage']['tmp_name'] as $key => $val) {
                $file_tmp = $_FILES['ItemImage']['tmp_name'][$key];
                if (empty($file_tmp)) {
                    $MtImage = '';
                } else {
                    $MtImage = file_get_contents($file_tmp);
                    $MtImage = base64_encode($MtImage);
                }
                $MTID = '';
                $InformDate = date("Y-m-d H:i:s");
            }
            $this->Insert->insertrecordsMaintenance($ItemSN, $InformDate, $MtDetail, $MtImage, $HasID, $AccountID);
            $this->Update->upDateStatusItemMaintenanceWhereItemID($ItemSN, $StatusID);
        }
        header('Location: Maintenance');
    }
}
