<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CheckLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('login/Query');
        $this->load->model('login/Update');
        session_start();
    }

    public function index()
    {
        $AUserName = $this->input->post('inputUsername');
        $APassWord = $this->input->post('inputPassword');
        $result = $this->Query->accountrecords($AUserName, $APassWord);

        $_SESSION['username'] = '';
        $_SESSION['access'] = '';
        $_SESSION['logged_in'] = FALSE;
        $_SESSION['permission'] = '';
        //$_SESSION['AccountID'] = '';

        if ($result == TRUE) {
            foreach ($result as $row) {
                $AccountID = $row->AccountID;
                $UserName = $row->AUserName;
                $PassWord = $row->APassWord;
                $Access = $row->AccessID;
                $PermissionID = $row->PermissionID;
                $_SESSION['permission'] = $PermissionID;
                if ($AUserName == $UserName && $APassWord == $PassWord) {
                    if ($PermissionID == '1') {
                        $_SESSION['AccountID'] = $AccountID;
                        $_SESSION['username'] = $UserName;
                        $_SESSION['access'] = $Access;
                        $_SESSION['logged_in'] = TRUE;
                        $_SESSION['permission'] = $PermissionID;
                        $this->Update->upDateIsActiveTBaccount($AUserName);
                        header('Location: Home');
                    } else {
                        header('Location: Login');
                    }
                } else {
                    header('Location: Login');
                }
            }
        } else {
            $PermissionID = '10';
            $_SESSION['permission'] = $PermissionID;
            header('Location: Login');
        }
    }
}
