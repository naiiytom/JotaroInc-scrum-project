<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Model
{
    function upDateStatusItemMaintenanceWhereItemID($ItemSN, $StatusID)
    {
        $query = $this->db->query("
        UPDATE `tbitem` 
        SET `StatusID` = '$StatusID' 
        WHERE `tbitem`.`ItemSN` = '$ItemSN';
        ");
    }
}
