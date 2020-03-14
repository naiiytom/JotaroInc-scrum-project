<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('userpages/Query');
	}

	public function index()
	{
		$result['data']=$this->Query->getItemAllFromDB();
		$this->load->view('style/header');
		$this->load->view('userpages/maintence', $result);
		$this->load->view('style/footer');
	}
}
