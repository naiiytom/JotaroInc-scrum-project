<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller 
{
	public function __construct()
    {
		parent::__construct();
		
        $this->load->helper('json_output');
        $this->load->model('Student_model', 'student');
		$this->load->model('Auth_model', 'auth');

	}
	

	public function student_register($data)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
            $check_auth_client = $this->Auth_model->chech_auth_client();
            if($check_auth_client == true) {
                $params = json_decode(file_get_contents('php://input'), TRUE);
            }

            //TODO
		}
	}
	
}
