<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('userpages/maintence');
		$this->load->view('style/footer');
	}
}
?>