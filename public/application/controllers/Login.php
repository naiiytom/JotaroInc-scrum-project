<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$permission['permission'] = '1';
		session_start();
		if (isset($_SESSION['permission'])) {
			if ($_SESSION['permission'] == '0') {
				$permission['permission'] =  $_SESSION['permission'];
				$this->load->view('style/header');
				$this->load->view('login/login', $permission);
				$this->load->view('style/footer');
			} else {
				$permission['permission'] =  $_SESSION['permission'];
				session_destroy();
				$this->load->view('style/header');
				$this->load->view('login/login', $permission);
				$this->load->view('style/footer');
			}
		} else {
			session_destroy();
			$this->load->view('style/header');
			$this->load->view('login/login', $permission);
			$this->load->view('style/footer');
		}
	}
}
