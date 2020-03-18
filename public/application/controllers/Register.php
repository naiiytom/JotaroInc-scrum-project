<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('register/register');
		$this->load->view('style/footer');
	}
}
