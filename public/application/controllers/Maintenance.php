<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintenance extends CI_Controller
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
		$username =  array();
		if (isset($_SESSION) && $_SESSION['logged_in'] == TRUE) {
			if ($_SESSION['access'] == 0) {
				$result['username'] = $_SESSION['username'];
				$result['data'] = $this->Query->getItemAllFromDB();
				$this->load->view('style/header');
				$this->load->view('userpages/maintence', $result);
				$this->load->view('style/footer');
			} elseif ($_SESSION['access'] == 1 || $_SESSION['access'] == 3) {
				$result['username'] = $_SESSION['username'];
				$result['data'] = $this->Query->getItemAllFromDB();
				$this->load->view('style/header');
				$this->load->view('userpages/maintenceUser', $result);
				$this->load->view('style/footer');
			} else {
				header('Location: Home');
			}
		} else {
			header('Location: Login');
		}
	}
}
