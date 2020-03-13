<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApproveRegister extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Query');
	}
	public function index()
	{
		$result['data']=$this->Query->getApproveRegisterAllFromDB();
		$this->load->view('style/header');
		$this->load->view('componects/approveRegister',$result);
		$this->load->view('style/footer');
	}
}
?>
