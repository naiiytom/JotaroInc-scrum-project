<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RepairList extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('componects/repairList');
		$this->load->view('style/footer');
	}
}
?>