<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('json_output');
		$this->load->model('api/Auth_model', 'auth');
	}

	public function login()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->auth->check_auth_client();
			if ($check_auth_client == true) {
				$params = json_decode(file_get_contents('php://input'), TRUE);
				$username = $params['username'];
				$password = $params['password'];

				$response = $this->auth->login($username, $password);
				json_output($response['status'], $response);
			}
		}
	}

	public function logout()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->auth->check_auth_client();
			if ($check_auth_client == true) {
				$response = $this->auth->logout();
				json_output($response['status'], $response);
			}
		}
	}

	public function test()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->auth->check_auth_client();
			if($check_auth_client == true) {
				json_output(200, array('status' => 200, 'message' => 'OK'));
			}
		}
	}
}
