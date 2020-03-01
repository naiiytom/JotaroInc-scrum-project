<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        /*
        	$check_auth_client = $this->MyModel->check_auth_client();
		if($check_auth_client != true){
			die($this->output->get_output());
		}
		*/
    }

	public function index()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$resp = $this->MyModel->maintenance_all_data();
			json_output(200, $resp);
		}
    }

    public function detail($id)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET') {
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $resp = $this->MyModel->maintenance_detail_data($id);
            json_output(200,$resp);
        }
	}
	
	public function create()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$params = json_decode(file_get_contents('php://input'), TRUE);
			if($params['iid'] == "" || $params['mid'] == "") {
				json_output(400, array('status' => 400, 'message' => 'IID and/or MID can\'t be empty'));
			} else {
				$resp = $this->MyModel->maintenance_create_data($params);
				json_output(200, $resp);
			}
		}
	}
}
