<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountList extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('components/Query');
	}
	public function index()
	{
		$result['data']=$this->Query->getAccountAllFromDB();
		$this->load->view('style/header');
		$this->load->view('components/accountList', $result);
		$this->load->view('style/footer');
	}
}
