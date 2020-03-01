<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('API');
    }

    public function getAll($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/customer/get/all', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function add($apiKey, $empID, $name, $address, $tel)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/customer/register', array(
            'name' => $name,
            'address' => $address,
            'tel' => $tel
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function edit($apiKey, $empID, $uid, $name, $address, $tel, $isDisable)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/customer/edit', array(
            'uid' => $uid,
            'name' => $name,
            'address' => $address,
            'tel' => $tel,
            'isdisable' => $isDisable
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }
}
