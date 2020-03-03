<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bell/query');
        $this->load->model('bell/insert');
        $this->load->model('bell/update');
        //$this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    public function index()
    {
        //session_start();
        $AccessID = $_SESSION["AccessID"];
        $username = $_SESSION["username"];

        $this->form_validation->set_rules('MtDetail', 'MtDetail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('priority', 'priority', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ItemSN', 'ItemSN', 'trim|required|xss_clean');

        $MtDetail = $this->input->post('MtDetail');
        $HName = $this->input->post('priority');
        $ItemSN = $this->input->get('ItemSN');

        $username = $this->session->userdata("username");
        if (null !== $this->session->userdata("token")) {
            if ($this->query->tokenrecords($username) == TRUE) {
                if (isset($_FILES["images"])) {
                    foreach ($_FILES['images']['tmp_name'] as $key => $val) {
                        $file_tmp = $_FILES['images']['tmp_name'][$key];
                        if(empty($file_tmp)){
                            $data = '';
                        } else {
                            $data = file_get_contents($file_tmp);
                            $data = base64_encode($data);
                        }

                        $HID = '';
                        $MTID = '';
                        $InformDate = date("Y-m-d H:i:s");
                    }
                    foreach ($this->query->tbmaintencerecords() as $row) {
                        $MTID = $row->MTID;
                        $MTID = (int) $MTID + 1;
                    }

                    foreach ($this->query->tbhastinessrecords($HName) as $row) {
                        $HID = $row->HID;
                    }

                    foreach ($this->query->accountID($username) as $row) {
                        $AccountID = $row->AccountID;
                    }

                    $this->insert->insertrecordsMaintenance($MTID, $ItemSN, $InformDate, $MtDetail, $data, $HID, $AccountID);
                    $this->update->statusUpdate('3', $ItemSN);
                    redirect("ItemList");
                } 
            }
        }
    }
}
