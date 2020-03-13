<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApproveRegister extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('componects/approveRegister');
		$this->load->view('style/footer');
	}
}
?>