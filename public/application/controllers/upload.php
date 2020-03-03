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
        session_start();
        $AccessID = $_SESSION["AccessID"];
        $username = $_SESSION["username"];

        $this->form_validation->set_rules('MtDetail', 'MtDetail', 'trim|required|xss_clean');
        $this->form_validation->set_rules('priority', 'priority', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ItemSN', 'ItemSN', 'trim|required|xss_clean');

        $MtDetail = $this->input->post('MtDetail');
        $HName = $this->input->post('priority');
        $ItemSN = $this->input->get('ItemSN');

        //$username = $this->session->userdata("username");
        //if(null !== $this->session->userdata("token")){
        if($this->query->tokenrecords($username) == TRUE){

        if(isset($_FILES["filUpload"]))
        {
            foreach($_FILES['filUpload']['tmp_name'] as $key => $val)
            {   
                $file_name = $_FILES['filUpload']['name'][$key];
                $file_size = $_FILES['filUpload']['size'][$key];
                $file_tmp = $_FILES['filUpload']['tmp_name'][$key];
                $file_type = $_FILES['filUpload']['type'][$key]; 

                if(in_array($file_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP))){
                    $errors[] = "This file extension is not allowed. Please upload a GIF or JPEG or PNG file";
                }
                if ($file_size > 2000000) {
                    $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
                }
                if (empty($errors)) {
                    $didUpload = move_uploaded_file($file_tmp, './static/upload/'.$file_name);
    
                    if ($didUpload) {
                        $HID = '';
                        $MTID = '';
                        $InformDate = date("Y-m-d H:i:s");
                        
                        foreach ($this->query->tbmaintencerecords() as $row)
                        {
                            $MTID = $row->MTID;
                            $MTID = (int)$MTID + 1;
                        }

                        foreach ($this->query->tbhastinessrecords($HName) as $row)
                        {
                            $HID = $row->HID;
                        }

                        foreach ($this->query->accountID($username) as $row)
                        {
                            $AccountID = $row->AccountID;
                        }

                        $this->insert->insertrecordsMaintenance($MTID, $ItemSN, $InformDate, $MtDetail, $file_name, $HID, $AccountID);
                        $this->update->statusUpdate('3', $ItemSN);
                        redirect("ItemList");

                    } else {
                        echo "An error occurred somewhere. Try again or contact the admin";
                    }
                } else {
                    foreach ($errors as $error) {
                        echo $error . "These are the errors" . "\n";
                    }
                }
                
            }
        }
    
    } else {
        redirect("login"); 
    }
}
}