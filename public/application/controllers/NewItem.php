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
		if (isset($_FILES['ItemImage'])) {
			$ftemp = $_FILES['ItemImage']['tmp_name'];
			$type = $_FILES['ItemImage']['type'];
			$img = file_get_contents($ftemp);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
			$data['ItemImage'] = $base64;
		}

		$data['ItemID'] = $this->input->post('ItemID');
		$data['ItemSN'] = $this->input->post('ItemSN');
		$data['ItemName'] = $this->input->post('ItemName');
		$data['ItemBrand'] = $this->input->post('ItemBrand');
		$data['ItemModel'] = $this->input->post('ItemModel');
		$data['ItemDescript'] = $this->input->post('ItemDescript');
		$data['LocalID'] = $this->input->post('LocalID');
		$data['CatID'] = $this->input->post('CatID');
		$data['StatusID'] = $this->input->post('StatusID');
		$data['ItemYear'] = $this->input->post('ItemYear');
		$this->Add->addNewItemToDB($data);
		redirect('ItemList');
	}
}
