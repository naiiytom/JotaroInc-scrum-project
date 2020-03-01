<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        
        $this->load->model('Seller_model', 'seller');
    }

    public function index()
    {
        if ($this->session->has_userdata('token')) {
            $this->load->view('header', array('title' => 'Welcome to Stock'));

            if ($this->session->flashdata('add_failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => 'Add Seller failed!',
                    'message' => 'Please try again later.'
                ));
            } elseif ($this->session->flashdata('edit_failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => 'Edit Seller failed!',
                    'message' => 'Please try again later.'
                ));
            } elseif ($this->session->flashdata('fire_failed') == true) {
                $this->load->view('error_msg', array(
                    'color' => 'alert-danger',
                    'title' => 'Fire Seller failed!',
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

            $sellers = $this->seller->getAll($this->session->token, $this->session->userid);
            $this->load->view('seller', array(
                'sellers' => json_decode($sellers['data'], true),
                'isShow' => ($this->session->priv) == 99
            ));
            $this->load->view('footer');
        } else {
            redirect('/login', 'refresh');
        }
    }

    public function add()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $tel = $this->input->post('tel');

        if ($this->session->has_userdata('token')) {
            if (isset($username) && isset($password) && isset($email) && isset($name) && isset($tel)) {
                $res = $this->seller->add($this->session->token, $this->session->userid, $username, $password, $email, $name, $tel);
                
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('server_failed', true);
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('add_failed', true);
                }
                redirect('/seller', 'refresh');
            }
        }

        redirect('/login', 'refresh');
    }

    public function edit()
    {
        $uid = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $tel = $this->input->post('tel');
        $isDisable = $this->input->post('isdisable');
        $fire = $this->input->post('fire');

        if ($this->session->has_userdata('token')) {
            if (isset($fire) && isset($uid)) {
                // Fire
                $res = $this->seller->fire($this->session->token, $this->session->userid, $uid);

                if ($res['status'] == 500) {
                    $this->session->set_flashdata('server_failed', true);
                } elseif ($res['status'] != 200) {
                    $this->session->set_flashdata('fire_failed', true);
                }
            } elseif (isset($username) && isset($email) && isset($name) && isset($tel) && isset($uid)) {
                $res;

                if (isset($isDisable)) {
                    $isDisable = 0;
                }

                if (isset($password)) {
                    $res = $this->seller->edit($this->session->token, $this->session->userid, $uid, $username, $email, $name, $tel, $isDisable, $password);
                } else {
                    $res = $this->seller->edit($this->session->token, $this->session->userid, $uid, $username, $email, $name, $tel, $isDisable);
                }
                    
                if ($res['status'] == 500) {
                    $this->session->set_flashdata('server_failed', true);
                }
                if ($res['status'] != 200) {
                    $this->session->set_flashdata('edit_failed', true);
                }
            }
            redirect('/seller', 'refresh');
        }

        redirect('/login', 'refresh');
    }
}
