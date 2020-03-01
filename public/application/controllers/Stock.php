<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Stock_model', 'stock');
    }

    public function index()
    {
        if ($this->session->has_userdata('token')) {
            $this->load->view('header', array('title' => 'Welcome to Stock'));

            if ($this->session->flashdata('failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => $this->session->flashdata('title'),
                    'message' => $this->session->flashdata('message')
                ));
            }

            $this->load->view('menubar');
            $products = $this->stock->getAllProduct($this->session->token, $this->session->userid);
            $stocks = $this->stock->getAllStock($this->session->token, $this->session->userid);
            $this->load->view('stock', array(
                'products' => json_decode($products['data'], true),
                'stocks' => json_decode($stocks['data'], true)
            ));
            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function product()
    {
        $productID = $this->uri->segment(3);
        $stockDate = $this->uri->segment(5);

        if ($this->session->has_userdata('token')) {
            if ($stockDate) {
                $this->load->view('header', array('title' => 'Welcome to Stock'));
                if ($this->session->flashdata('failed') == true) {
                    $this->load->view('error_msg', array(
                        'color' => 'alert-danger',
                        'title' => $this->session->flashdata('title'),
                        'message' => $this->session->flashdata('message')
                    ));
                }
                $this->load->view('menubar');
                $product = $this->stock->getProduct($this->session->token, $this->session->userid, $productID);
                $stocks = $this->stock->getStockIn($this->session->token, $this->session->userid, $productID, $stockDate);
                $this->load->view('stock_detail_in', array(
                    'product' => json_decode($product['data'], true),
                    'stocks' => json_decode($stocks['data'], true),
                    'stockDate' => $stockDate
                ));
                $this->load->view('footer');
            } elseif ($productID) {
                $this->load->view('header', array('title' => 'Welcome to Stock'));

                if ($this->session->flashdata('failed') == true) {
                    $this->load->view('error_msg', array(
                        'color' => 'alert-danger',
                        'title' => $this->session->flashdata('title'),
                        'message' => $this->session->flashdata('message')
                    ));
                }

                $this->load->view('menubar');
                $product = $this->stock->getProduct($this->session->token, $this->session->userid, $productID);
                $stocks = $this->stock->getStock($this->session->token, $this->session->userid, $productID);
                $this->load->view('stock_detail', array(
                    'product' => json_decode($product['data'], true),
                    'stocks' => json_decode($stocks['data'], true)
                ));
                $this->load->view('footer');
            } else {
                redirect('/stock', 'refresh');
            }
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function addProduct()
    {
        $name = $this->input->post('name');
        $skin = $this->input->post('skin');
        $size = $this->input->post('size');
        $color = $this->input->post('color');
        $price = $this->input->post('price');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($skin) && isset($size) && isset($color) && isset($price)) {
                $res = $this->stock->addProduct($this->session->token, $this->session->userid, $name, $skin, $size, $color, $price);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Add Product failed!');
                    $this->session->set_flashdata('message', 'Try again later');
                }
                redirect('/stock', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function editProduct()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $skin = $this->input->post('skin');
        $size = $this->input->post('size');
        $color = $this->input->post('color');
        $price = $this->input->post('price');
        $isdisable = $this->input->post('isdisable');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($skin) && isset($size) && isset($color) && isset($price) && isset($id) && isset($isdisable)) {
                $res = $this->stock->editProduct($this->session->token, $this->session->userid, $id, $name, $skin, $size, $color, $price, $isdisable);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Edit Product failed!');
                    $this->session->set_flashdata('message', 'Try again later');
                }
                redirect('/stock', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function addStock()
    {
        $id = $this->input->post('id');
        $date = $this->input->post('date');
        $cost = $this->input->post('cost');
        $quantity = $this->input->post('quantity');

        if ($this->session->has_userdata('token')) {
            if (isset($id) && isset($date) && isset($cost) && isset($quantity)) {
                $res = $this->stock->addStock($this->session->token, $this->session->userid, $id, $date, $cost, $quantity);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Add Stock failed!');
                    $this->session->set_flashdata('message', 'Try again later');
                }
                redirect('/stock/product/'.$id, 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function addStockin()
    {
        $id = $this->input->post('productid');
        $date = $this->input->post('date');
        $description = $this->input->post('description');
        $quantity = $this->input->post('quantity');

        if ($this->session->has_userdata('token')) {
            if (isset($id) && isset($date) && isset($description) && isset($quantity)) {
                $res = $this->stock->addStockIn($this->session->token, $this->session->userid, $id, $date, $description, $quantity);

                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Add Stock failed!');
                    $this->session->set_flashdata('message', 'Try again later');
                }
                redirect('/stock/product/'.$id, 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }
}
