<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('API');
    }

    public function getAllProduct($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/product/get/all', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function getAllStock($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/stock/get/all', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function getStockLeftQuantity($apiKey, $empID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/stock/get/quantity', null, array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function getProduct($apiKey, $empID, $productID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/product/get/', array(
            'productID' => $productID
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function getStock($apiKey, $empID, $productID)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/stock/get/byproduct', array(
            'productid' => $productID
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function addStock($apiKey, $empID, $productID, $date, $cost, $quantity)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/stock/add/', array(
            'productid' => $productID,
            'datein' => date('Y-m-d', strtotime($date)),
            'basecost' => $cost,
            'quantity' => $quantity
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function getStockIn($apiKey, $empID, $productID, $stockDate)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/stockin/get/bystock', array(
            'productid' => $productID,
            'date' => $stockDate
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function addStockIn($apiKey, $empID, $productID, $date, $description, $quantity)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/stockin/add', array(
            'productid' => $productID,
            'date' => $date,
            'description' => $description,
            'checkby' => $empID,
            'quantity' => $quantity
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function addProduct($apiKey, $empID, $name, $skin, $size, $color, $price)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/product/add', array(
            'name' => $name,
            'skin' => $skin,
            'size' => $size,
            'color' => $color,
            'price' => $price,
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }

    public function editProduct($apiKey, $empID, $id, $name, $skin, $size, $color, $price, $isdisable)
    {
        $res = exec_restAPI('POST', 'https://lazybear-api.azurewebsites.net/product/edit', array(
            'productid' => $id,
            'name' => $name,
            'skin' => $skin,
            'size' => $size,
            'color' => $color,
            'price' => $price,
            'isDisable' => $isdisable
        ), array('api' => $apiKey, 'empid' => $empID));

        return $res;
    }
}
