<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Order_model', 'order');
        $this->load->model('Customer_model', 'customer');
        $this->load->model('Stock_model', 'stock');
        $this->load->model('Shipping_model', 'shipping');
        $this->load->model('Promotion_model', 'promotion');
    }

    public function index()
    {
        if ($this->session->has_userdata('token')) {
            $this->load->view('header', array('title' => 'Welcome to Order'));
            if ($this->session->flashdata('failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => $this->session->flashdata('title'),
                    'message' => $this->session->flashdata('message')
                ));
            }

            $this->load->view('menubar');
            $orders = $this->order->getAllOrder($this->session->token, $this->session->userid);
            $this->load->view('order', array(
                'orders' => json_decode($orders['data'], true)
            ));
            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function add()
    {
        if ($this->session->has_userdata('token')) {
            $this->load->view('header', array('title' => 'Welcome to Order'));
            if ($this->session->flashdata('failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => $this->session->flashdata('title'),
                    'message' => $this->session->flashdata('message')
                ));
            }
            $this->load->view('menubar');

            $customers = $this->customer->getAll($this->session->token, $this->session->userid);
            $products = $this->stock->getAllProduct($this->session->token, $this->session->userid);
            $quantity = $this->stock->getStockLeftQuantity($this->session->token, $this->session->userid);
            $shipme = $this->shipping->getAllShipping($this->session->token, $this->session->userid);
            $promotions = $this->promotion->getAllPromotion($this->session->token, $this->session->userid);
            $this->load->view('order_add', [
                'customers' => json_decode($customers['data'], true),
                'products' => json_decode($products['data'], true),
                'quantities' => json_decode($quantity['data'], true),
                'shipmes' => json_decode($shipme['data'], true),
                'promotions' => json_decode($promotions['data'], true)
            ]);

            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function addOrder()
    {
        $data = $this->input->post('data');

        if ($this->session->has_userdata('token')) {
            if (isset($data)) {
                $data = json_decode($data, true);

                $res = $this->order->addOrder($this->session->token, $this->session->userid, $data);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Add Order failed');
                    $this->session->set_flashdata('message', 'Try again later!');
                }

                redirect('/order', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function manage()
    {
        $id = $this->input->post('id');
        $tracking = $this->input->post('tracking');
        $paid = $this->input->post('paid');
        $cancle = $this->input->post('cancle');

        if ($this->session->has_userdata('token')) {
            if (isset($id)) {
                if (isset($paid)) {
                    $res = $this->order->paid($this->session->token, $this->session->userid, $id);
                
                    if ($res['status'] == 500) {
                        $this->session->set_flashdata('failed', true);
                        $this->session->set_flashdata('title', 'Error!');
                        $this->session->set_flashdata('message', 'Internal Server Error!');
                    } elseif ($res['status'] != 200) {
                        $this->session->set_flashdata('failed', true);
                        $this->session->set_flashdata('title', 'Paid Order failed');
                        $this->session->set_flashdata('message', 'Try again later!');
                    }
                } elseif (isset($cancle)) {
                    $res = $this->order->cancleOrder($this->session->token, $this->session->userid, $id);
                
                    if ($res['status'] == 500) {
                        $this->session->set_flashdata('failed', true);
                        $this->session->set_flashdata('title', 'Error!');
                        $this->session->set_flashdata('message', 'Internal Server Error!');
                    } elseif ($res['status'] != 200) {
                        $this->session->set_flashdata('failed', true);
                        $this->session->set_flashdata('title', 'Cancle Order failed');
                        $this->session->set_flashdata('message', 'Try again later!');
                    }
                } else {
                    $res = $this->order->sended($this->session->token, $this->session->userid, $id, $tracking);
                
                    if ($res['status'] == 500) {
                        $this->session->set_flashdata('failed', true);
                        $this->session->set_flashdata('title', 'Error!');
                        $this->session->set_flashdata('message', 'Internal Server Error!');
                    } elseif ($res['status'] != 200) {
                        $this->session->set_flashdata('failed', true);
                        $this->session->set_flashdata('title', 'Sended Order failed');
                        $this->session->set_flashdata('message', 'Try again later!');
                    }
                }

                redirect('/order', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function print()
    {
        $id = $this->uri->segment(3);

        if ($this->session->has_userdata('token')) {
            $res = $this->order->getOrderByProductID($this->session->token, $this->session->userid, $id);
            $res2 = $this->order->getOrderDetailsByProductID($this->session->token, $this->session->userid, $id);
            if ($res['status'] != 200 || $res2['status'] != 200) {
                $this->session->set_flashdata('failed', true);
                $this->session->set_flashdata('title', 'Error!');
                $this->session->set_flashdata('message', 'Internal Server Error!');
                redirect('/order', 'refresh');
            }

            $this->load->view('header', array('title' => 'Print Order'));
            $this->load->view('order_print', [
                'order' => json_decode($res['data'], true),
                'order_details' => json_decode($res2['data'], true)
            ]);
            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }
}
