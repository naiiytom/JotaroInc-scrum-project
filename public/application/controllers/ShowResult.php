<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowResult extends CI_Controller {

	
	public function index()
	{
		$this->load->view('css');
		$this->load->view('showResult');
		$this->load->view('js');
	}
}
