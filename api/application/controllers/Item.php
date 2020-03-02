<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('json_output');
		$this->load->model('Auth_model', 'auth');
		$this->load->model('Item_model', 'item');
	}

	public function index()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'GET') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$resp = $this->item->item_all_data();
			json_output(200, $resp);
		}
	}

	public function detail($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'GET') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$resp = $this->item->item_detail_data($id);
			json_output(200, $resp);
		}
	}

	public function description($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'GET') {
			json_output(400, array('status' => 400, 'message' => 'Bad request'));
		} else {
			$resp = $this->item->item_description_data($id);
			json_output(200, $resp);
		}
	}

	public function create()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			json_output(400, array('status' => 400, 'message' => 'Bad request.'));
		} else {
			$params = json_decode(file_get_contents('php://input'), TRUE);
			if ($params['iid'] == "" || $params['name'] == "") {
				json_output(400, array('status' => 400, 'message' => 'ID and/or Name can\'t be empty'));
			} else {
				$resp = $this->item->item_create_data($params);
				json_output(200, $resp);
			}
		}
	}

	public function delete($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'DELETE') {
			json_output(400, array('status' => 400, 'message' => 'Bad request'));
		} else {
			$resp = $this->item->item_delete_data($id);
			json_output(200, $resp);
		}
	}
}
