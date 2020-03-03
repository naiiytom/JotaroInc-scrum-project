<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CreateAccount extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('bell/query');
        $this->load->model('bell/insert');
        $this->load->model('bell/update');
        //$this->load->library('session');
        $this->load->helper('url');
        // Load database
        $this->load->model('');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('studentID', 'studentID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prefix', 'prefix', 'trim|required|xss_clean');
        $this->form_validation->set_rules('full_name', 'full_name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lastname', 'lastname', 'trim|required|xss_clean');
        $this->form_validation->set_rules('phone_number', 'phone_number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('major', 'major', 'trim|required|xss_clean');
        $this->form_validation->set_rules('level', 'level', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('position', 'position', 'trim|required|xss_clean');

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $studentID = $this->input->post('studentID');
            $prefix = $this->input->post('prefix');
            $fullname = $this->input->post('full_name');
            $lastname = $this->input->post('lastname');
            $major = $this->input->post('major');
            $level = $this->input->post('level');
            $phonenumber = $this->input->post('phone_number');
            $email = $this->input->post('email');
            $position = $this->input->post('position');

        //if($this->query->tokenrecords($username) == TRUE){
            

            if(isset($studentID)){
                //student
                $AccountID = '';
                foreach ($this->query->tbaccountrecords() as $row)
                {
                    $AccountID = $row->AccountID;
                    $AccountID = (int)$AccountID + 1;
                }


                $this->insert->insertrecordsAccount($AccountID, $username, $password, '3');
                $this->insert->insertrecordsStudent($studentID, $prefix, $fullname, $lastname, $major, $level, $email, $phonenumber, $AccountID);

                $this->load->view('header', array('title' => 'Welcome to Backends'));
                $this->load->view('login');
                $this->load->view('footer');
            }
            else if(isset($position)){
                //teacher
                $AccountID = '';
                foreach ($this->query->tbaccountrecords() as $row)
                {
                    $AccountID = $row->AccountID;
                    $AccountID = (int)$AccountID + 1;
                }

                $TeacherID = 0;
                foreach ($this->query->tbteacherrecords() as $row)
                {
                    $TeacherID = $row->TeacherID;
                    $TeacherID = (int)$TeacherID + 1;
                }
                
                $this->insert->insertrecordsAccount($AccountID, $username, $password, '2');
                $this->insert->insertrecordsTeacher($TeacherID, $prefix, $fullname, $lastname, $position, $email, $phonenumber, $AccountID);

                $this->load->view('header', array('title' => 'Welcome to Backends'));
                $this->load->view('login');
                $this->load->view('footer');
                echo $studentID;
            }
            else{
                //other
                $this->load->view('header', array('title' => 'Welcome to Backends'));
                $this->load->view('login');
                $this->load->view('footer');
            }
        //}
         //else {
            //redirect("login"); 
            //echo "55555";
        //}
    }
}