<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SweetAlert extends CI_Controller {

	
	public function index()
	{
		$this->load->view('css');
		$this->load->view('sweetAlert');
		$this->load->view('js');
	}
}
