<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('login/Update');
		session_start();
	}

	public function index()
	{
		$AUserName = $_SESSION['AUserName'];
		$this->Update->upDateIsActive0TBaccount($AUserName);
		session_destroy();
		header('Location: Login');
	}
}
