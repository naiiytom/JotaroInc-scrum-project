<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Model
{
    function updateAnItemFromDB($ItemSN, $data)
    {
        $query = $this->db->update('tbitem', $data, array('ItemSN' => $ItemSN));
        return $query;
    }

    function upDatePermissionWhereAccountID($AccountID, $P)
    {
        $query = $this->db->query("
        UPDATE `tbaccount` 
        SET `PermissionID` = '$P' 
        WHERE `tbaccount`.`AccountID` = '$AccountID';
        ");
    }

    function upDateIsActiveMaintenanceWhereMTID($MTID, $isActive)
    {
        $query = $this->db->query("
        UPDATE `tbmaintenance` 
        SET `isActive` = '$isActive'
        WHERE `tbmaintenance`.`MTID` = '$MTID';
        ");
    }

    function upDateStatusItemMaintenanceWhereItemID($ItemSN, $StatusID)
    {
        $query = $this->db->query("
        UPDATE `tbitem` 
        SET `StatusID` = '$StatusID' 
        WHERE `tbitem`.`ItemSN` = '$ItemSN';
        ");
    }
}
