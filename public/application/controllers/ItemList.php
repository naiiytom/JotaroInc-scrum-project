<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ITemList extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Query');
	}
	
	public function index()
	{
		$result['data']=$this->Query->getItemAllFromDB();
		$this->load->view('style/header');
		$this->load->view('componects/itemList', $result);
		$this->load->view('style/footer');
	}
}
?>