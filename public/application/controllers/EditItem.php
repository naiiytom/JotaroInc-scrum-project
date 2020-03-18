<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('components/Query');
        $this->load->model('components/Update');
        session_start();
    }

    public function index()
    {
        if(isset($_SESSION) && $_SESSION['logged_in'] == TRUE){
			if($_SESSION['access'] == 0){
                $result['username'] = $_SESSION['username'];
                $ItemSN = $this->input->get('ItemSN');
                $result['data'] = $this->Query->getAnItemFromDB($ItemSN);
                $this->load->view('style/header');
                $this->load->view('components/editItem', $result);
                $this->load->view('style/footer');
            }
			else {
				header('Location: Home');
			}
		}
		else {
			header('Location: Login');
		}
    }

    public function update($ItemSN)
    {
        $data['ItemName'] = $this->input->post('ItemName');
        $data['ItemBrand'] = $this->input->post('ItemBrand');
        $data['ItemModel'] = $this->input->post('ItemModel');
        $data['ItemDescript'] = $this->input->post('ItemDescript');
        $data['LocalID'] = $this->input->post('LocalID');
        $data['CatID'] = $this->input->post('CatID');
        $data['StatusID'] = $this->input->post('StatusID');
        $data['ItemYear'] = $this->input->post('ItemYear');
        $this->Update->updateAnItemFromDB($ItemSN, $data);
        redirect(base_url('index.php/ItemList'));
    }
}
