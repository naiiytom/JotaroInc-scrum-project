<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaintenanceHisInfo extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('userpages/Query');
	}

	public function index()
	{
		$MTID = $this->input->get('MTID');
		$AccountID = '1';
		$result['data']=$this->Query->getApproveMaintenanceIsWhereAccountIDAndMTIDFromDB($MTID, $AccountID);
		$this->load->view('style/header');
		$this->load->view('userpages/maintenanceHisInfo', $result);
		$this->load->view('style/footer');
	}
}
