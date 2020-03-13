<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ITemList extends CI_Controller {
	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('componects/itemList');
		$this->load->view('style/footer');
	}
}
?>