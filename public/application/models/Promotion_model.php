<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promotion_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('API');
    }

    public function getAllPromotion($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/promotion/get/all/', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function addPromotion($apiKey, $empID, $name, $start, $end, $price)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/promotion/add/', [
            'name' => $name,
            'startdate' => $start,
            'enddate' => $end,
            'price' => $price
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function editPromotion($apiKey, $empID, $id, $name, $start, $end, $price, $isdisable)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/promotion/edit/', [
            'promoid' => $id,
            'name' => $name,
            'startdate' => $start,
            'enddate' => $end,
            'price' => $price,
            'isdisable' => $isdisable
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }
}
