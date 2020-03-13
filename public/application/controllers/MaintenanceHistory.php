<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceHistory extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('userpages/maintenanceHistory');
		$this->load->view('style/footer');
	}
}
?>