<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('register/student');
		$this->load->view('style/footer');
	}
}
