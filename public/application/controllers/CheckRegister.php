<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CheckRegister extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('register/Add');
        $this->load->model('register/Query');
    }

    public function index()
    {
        if ($this->input->post('studentID') == '') {
            $this->addStaff();
        } elseif ($this->input->post('position') == '') {
            $this->addStudent();
        } else {
            header('Location: Register');
        }
    }

    public function addStudent()
    {
        $studentID = $this->input->post('studentID');
        $SPrefix = $this->input->post('prefix');
        $SFristName = $this->input->post('firstName');
        $SLastName = $this->input->post('lastName');
        $Smajor = $this->input->post('majorAndLevel');
        $STel = $this->input->post('phone');
        $SEmail = $this->input->post('inputEmail');
        $AUserName = $this->input->post('userName');
        $APassWord = $this->input->post('inputPassword');
        $isActive = '0';
        $PermissionID = '0';
        $AccessID = '3';

        $AccountID = '0';
        foreach ($this->Query->tbaccountrecords() as $row) {
            $AccountID = $row->AccountID;
            $AccountID = (int) $AccountID + 1;
        }

        $this->Add->addNewAccount($AccountID, $AUserName, $APassWord, $AccessID, $isActive, $PermissionID);
        $this->Add->addNewStudent($studentID, $SPrefix, $SFristName, $SLastName, $Smajor, $SEmail, $STel, $AccountID);

        header('Location: Login');
    }

    public function addStaff()
    {
        $StPosition = $this->input->post('position');
        $StPrefix = $this->input->post('prefix');
        $StFristName = $this->input->post('firstName');
        $StLastName = $this->input->post('lastName');
        $StTel = $this->input->post('phone');
        $StEmail = $this->input->post('inputEmail');
        $AUserName = $this->input->post('userName');
        $APassWord = $this->input->post('inputPassword');
        $isActive = '0';
        $PermissionID = '0';
        $AccessID = '1';

        $AccountID = '0';
        foreach ($this->Query->tbaccountrecords() as $row) {
            $AccountID = $row->AccountID;
            $AccountID = (int) $AccountID + 1;
        }

        $StaffID = '0';
        foreach ($this->Query->tbstaffrecords() as $row) {
            $StaffID = $row->StaffID;
            $StaffID = (int) $StaffID + 1;
        }

        $this->Add->addNewAccount($AccountID, $AUserName, $APassWord, $AccessID, $isActive, $PermissionID);
        $this->Add->addNewStaff($StaffID, $StPrefix, $StFristName, $StLastName, $StPosition, $StEmail, $StTel, $AccountID);

        header('Location: Login');
    }
}
