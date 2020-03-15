<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewItem extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('components/Add');
		$this->load->model('components/Query');
	}

	public function index()
	{
		$this->load->view('style/header');
		$this->load->view('components/newItem');
		$this->load->view('style/footer');
	}

	public function add()
	{
		echo "hello world";
	}
}
