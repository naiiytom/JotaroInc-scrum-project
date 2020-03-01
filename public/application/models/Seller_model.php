<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('API');
    }

    public function getAll($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/employee/get/all', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function add($apiKey, $empID, $username, $password, $email, $name, $tel)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/employee/register', array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'name' => $name,
            'tel' => $tel
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function edit($apiKey, $empID, $employeeID, $username, $email, $name, $tel, $isDisable, $password = null)
    {
        $payload = array(
            'employeeID' => $employeeID,
            'username' => $username,
            'email' => $email,
            'name' => $name,
            'tel' => $tel,
            'isdisable' => $isDisable
        );

        if ($password) {
            $payload['password'] = $password;
        }

        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/employee/edit', $payload, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function fire($apiKey, $empID, $employeeID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/employee/fire', array(
            'employeeID' => $employeeID
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }
}
