<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('API');
    }

    public function getLogin($user, $pass, $deviceID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/login', array(
            'username' => $user,
            'password' => $pass,
            'deviceID' => $deviceID
        ));

        return $res;
    }

    public function getRegister($apiKey, $empID, $user, $pass, $email, $name, $tel)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/register', array(
            'username' => $user,
            'password' => $pass,
            'email' => $email,
            'name' => $name,
            'tel' => $tel
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res['status'] == 200;
    }

    public function getLogout($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/logout', null, array('api' => $apiKey, 'empid' => $empID));

        return $res['status'] == 200;
    }
}
