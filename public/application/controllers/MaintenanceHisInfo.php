<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MaintenanceHisInfo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('userpages/Query');
		session_start();
	}

	public function index()
	{
		if (isset($_SESSION) && $_SESSION['logged_in'] == TRUE) {
			if ($_SESSION['access'] == 0) {
				$result['username'] = $_SESSION['username'];
				$MTID = $this->input->get('MTID');
				$AccountID = $_SESSION['AccountID'];
				$result['data'] = $this->Query->getApproveMaintenanceIsWhereAccountIDAndMTIDFromDB($MTID, $AccountID);
				$this->load->view('style/header');
				$this->load->view('userpages/maintenanceHisInfo', $result);
				$this->load->view('style/footer');
			} elseif ($_SESSION['access'] == 1 || $_SESSION['access'] == 3) {
				$result['username'] = $_SESSION['username'];
				$MTID = $this->input->get('MTID');
				$AccountID = $_SESSION['AccountID'];
				$result['data'] = $this->Query->getApproveMaintenanceIsWhereAccountIDAndMTIDFromDB($MTID, $AccountID);
				$this->load->view('style/header');
				$this->load->view('userpages/maintenanceHisInfoUser', $result);
				$this->load->view('style/footer');
			} else {
				header('Location: Home');
			}
		} else {
			header('Location: Login');
		}
	}
}
