<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApproveMaintence extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('componects/approveMaintence');
		$this->load->view('style/footer');
	}
}
?>