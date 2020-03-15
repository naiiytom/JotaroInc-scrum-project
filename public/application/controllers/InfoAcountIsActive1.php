<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoAcountIsActive1 extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('userpages/Query');
	}
	
	public function index()
	{
		$ItemSN = $this->input->get('ItemSN');
		$result['data']=$this->Query->getItemAllDetailFromDB($ItemSN);
		$this->load->view('style/header');
		$this->load->view('components/infoAcountIsActive1', $result);
		$this->load->view('style/footer');
	}
}
?>