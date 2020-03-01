<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promotion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Promotion_model', 'promotion');
    }
    
    public function index()
    {
        if ($this->session->has_userdata('token')) {
            $this->load->view('header', array('title' => 'Welcome to Promotion'));
            if ($this->session->flashdata('failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => $this->session->flashdata('title'),
                    'message' => $this->session->flashdata('message')
                ));
            }

            $this->load->view('menubar');
            $promotions = $this->promotion->getAllPromotion($this->session->token, $this->session->userid);
            $this->load->view('promotion', array(
                'promotions' => json_decode($promotions['data'], true)
            ));
            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function addPromotion()
    {
        $name = $this->input->post('name');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $price = $this->input->post('price');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($start) && isset($end) && isset($price)) {
                $res = $this->promotion->addPromotion($this->session->token, $this->session->userid, $name, $start, $end, $price);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Add Promotion failed');
                    $this->session->set_flashdata('message', 'Try again later!');
                }
                redirect('/promotion', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function editPromotion()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $price = $this->input->post('price');
        $isdisable = $this->input->post('isdisable');

        if ($this->session->has_userdata('token')) {
            if (isset($name) && isset($start) && isset($end) && isset($price) && isset($id) && isset($isdisable)) {
                $res = $this->promotion->editPromotion($this->session->token, $this->session->userid, $id, $name, $start, $end, $price, $isdisable);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Error!');
                    $this->session->set_flashdata('message', 'Internal Server Error!');
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('failed', true);
                    $this->session->set_flashdata('title', 'Edit Promotion failed');
                    $this->session->set_flashdata('message', 'Try again later!');
                }
                redirect('/promotion', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }
}
