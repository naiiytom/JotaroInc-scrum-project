<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountList extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('componects/accountList');
		$this->load->view('style/footer');
	}
}
?>