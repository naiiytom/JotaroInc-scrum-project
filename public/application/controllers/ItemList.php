<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemList extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        #if ($this->session->token) {
            #$this->load->view('header', array('title' => 'Welcome to Backends'));
            #$this->load->view('menubar');
            #$this->load->view('itemlist_admin');
            #$this->load->view('footer');
        #} else if ($this->session->token) {
            $this->load->view('header', array('title' => 'Welcome to Backends'));
            $this->load->view('menubar');
            $this->load->view('itemlist_user');
            $this->load->view('footer');
        #} else {
        #    redirect('/login', 'refresh');
        #}
    }
}