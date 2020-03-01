<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('API');
    }

    public function getAllOrder($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/order/get/all/', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function addOrder($apiKey, $empID, $data)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/order/add/', [
            'SoldBy' => $empID,
            'SoldTo' => $data['SoldTo'],
            'ShipMethod' => $data['ShipMethod'],
            'promotionid' => $data['promotionID'],
            'items' => json_encode($data['items'], true)
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function getOrderByProductID($apiKey, $empID, $id)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/order/get/byorderid/', [
            'orderID' => $id,
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function getOrderDetailsByProductID($apiKey, $empID, $id)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/orderde/get/byorderid/', [
            'orderID' => $id,
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function cancleOrder($apiKey, $empID, $id)
    {
        $res = exec_restAPI('POST', 'http://localhost:3000/order/reject/', [
            'orderID' => $id,
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function paid($apiKey, $empID, $id)
    {
        $res = exec_restAPI('POST', 'http://localhost:3000/order/paid/', [
            'orderID' => $id,
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function sended($apiKey, $empID, $id, $tracking)
    {
        $res = exec_restAPI('POST', 'http://localhost:3000/order/shipped/', [
            'orderID' => $id,
            'tracking' => $tracking
        ], array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }
}
