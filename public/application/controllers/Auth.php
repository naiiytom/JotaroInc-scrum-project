<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Auth_model', 'auth');
    }

    public function login()
    {
        $username = $this->input->post('usernameInput');
        $password = $this->input->post('passwordInput');

        if (isset($username) && isset($password)) {
            $res = $this->auth->getLogin($username, $password, "Webapp");
            if ($res['status'] == 200) {
                $this->session->set_userdata(array(
                    'token' => $res['data']['token'],
                    'userid' => $res['data']['empID'],
                    'name' => $res['data']['name'],
                    'priv' => $res['data']['priv']
                ));

                redirect('/', 'refresh');
            } else if ($res['status'] == 500) {
                $this->session->set_flashdata('server_failed', true);
            } else {
                $this->session->set_flashdata('login_failed', true);
            }
        }

        redirect('/login', 'refresh');
    }

    public function logout()
    {
        if ($this->session->token) {
            $this->auth->getLogout($this->session->token, $this->session->userid);
            $this->session->unset_userdata(array('token', 'userid'));
        }

        redirect('/login', 'refresh');
    }
}
