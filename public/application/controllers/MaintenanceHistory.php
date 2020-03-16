<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceHistory extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('userpages/Query');
	}

	public function index()
	{
		$AccountID = '1';
		$result['data']=$this->Query->getApproveMaintenanceIsWhereAccountIDFromDB($AccountID);
		$this->load->view('style/header');
		$this->load->view('userpages/maintenanceHistory', $result);
		$this->load->view('style/footer');
	}
}
