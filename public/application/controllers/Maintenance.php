<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {

	
	public function index()
	{
		$this->load->view('css');
		$this->load->view('maintenance');
		$this->load->view('js');
	}
}
