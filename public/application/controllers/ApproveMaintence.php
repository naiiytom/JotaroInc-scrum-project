<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApproveMaintence extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('components/Query');
		session_start();
	}

	public function index()
	{
		if (isset($_SESSION) && $_SESSION['logged_in'] == TRUE) {
			if ($_SESSION['access'] == 0) {
				$result['username'] = $_SESSION['username'];
				$result['data'] = $this->Query->getApproveMaintenanceIsActive0FromDB();
				$this->load->view('style/header');
				$this->load->view('components/approveMaintence', $result);
				$this->load->view('style/footer');
			} else {
				header('Location: Home');
			}
		} else {
			header('Location: Login');
		}
	}
}
