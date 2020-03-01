<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceForm extends CI_Controller {

	
	public function index()
	{
		$this->load->view('css');
		$this->load->view('maintenanceForm');
		$this->load->view('js');
	}
}