<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('home/home');
		$this->load->view('style/footer');
	}
}
