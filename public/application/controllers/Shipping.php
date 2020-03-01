<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipping extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Shipping_model', 'shipping');
    }
    
    public function index()
    {
        if ($this->session->has_userdata('token')) {
            $this->load->view('header', array('title' => 'Welcome to Shipping'));
            if ($this->session->flashdata('failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => $this->session->flashdata('title'),
                    'message' => $this->session->flashdata('message')
                ));
            }

            $this->load->view('menubar');
            $shippings = $this->shipping->getAllShipping($this->session->token, $this->session->userid);
            $this->load->view('shipping', array(
                'shippings' => json_decode($shippings['data'], true)
            ));
            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function add()
    {
        $name = $this->input->post('name');
        $cost = $this->input->post('cost');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($cost)) {
                $res = $this->shipping->add($this->session->token, $this->session->userid, $name, $cost);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Add Shipping Method failed');
                    $this->session->set_flashdata('message', 'Try again later!');
                }
                redirect('/shipping', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $cost = $this->input->post('cost');
        $isdisable = $this->input->post('isdisable');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($cost) && isset($id) && isset($isdisable)) {
                $res = $this->shipping->edit($this->session->token, $this->session->userid, $id, $name, $cost, $isdisable);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Edit Shipping Method failed');
                    $this->session->set_flashdata('message', 'Try again later!');
                }
                redirect('/shipping', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }
}
