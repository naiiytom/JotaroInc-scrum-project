<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Customer_model', 'customer');
    }

    public function index()
    {
        if (true/*$this->session->has_userdata('token')*/) {
            $this->load->view('header', array('title' => 'Welcome to Customer'));
            
            if ($this->session->flashdata('add_failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => 'Add Customer failed!',
                    'message' => 'Please try again later.'
                ));
            } elseif ($this->session->flashdata('edit_failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => 'Edit Customer failed!',
                    'message' => 'Please try again later.'
                ));
            } elseif ($this->session->flashdata('server_failed')) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => 'Login failed!',
                    'message' => 'Internal Server Error'
                ));
            }

            $this->load->view('menubar');

            $customers = $this->customer->getAll($this->session->token, $this->session->userid);
            $this->load->view('customer', array(
                'customers' => json_decode($customers['data'], true)
            ));
            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function add()
    {
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $tel = $this->input->post('tel');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($address) && isset($tel)) {
                $res = $this->customer->add($this->session->token, $this->session->userid, $name, $address, $tel);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('server_failed', true);
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('add_failed', true);
                }
                redirect('/customer', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function edit()
    {
        $uid = $this->input->post('id');
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $tel = $this->input->post('tel');
        $isDisable = $this->input->post('isdisable');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($address) && isset($tel) && isset($uid) && isset($isDisable)) {
                $res = $this->customer->edit($this->session->token, $this->session->userid, $uid, $name, $address, $tel, $isDisable);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('server_failed', true);
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('edit_failed', true);
                }
                redirect('/customer', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }
}
