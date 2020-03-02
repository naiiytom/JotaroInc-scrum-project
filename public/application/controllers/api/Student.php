<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('json_output');
		$this->load->model('api/Student_model', 'student');
		$this->load->model('api/Auth_model', 'auth');
	}

	public function register($data)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->auth->chech_auth_client();
			if ($check_auth_client == true) {
				$params = json_decode(file_get_contents('php://input'), TRUE);
			}

			//TODO
		}
	}
}
