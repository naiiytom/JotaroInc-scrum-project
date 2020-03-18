<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Academic extends CI_Controller
{
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('register/academic');
		$this->load->view('style/footer');
	}
}
