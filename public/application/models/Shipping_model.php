<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shipping_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('API');
    }

    public function getAllShipping($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/shipping/get/', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function add($apiKey, $empID, $name, $cost)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/shipping/add/', [
            'name' => $name,
            'cost' => $cost
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function edit($apiKey, $empID, $id, $name, $cost, $isdisable)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/shipping/edit/', [
            'shipmeid' => $id,
            'name' => $name,
            'cost' => $cost,
            'disabled' => $isdisable
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }
}
