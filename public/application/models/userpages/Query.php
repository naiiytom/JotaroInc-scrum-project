<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Query extends CI_Model
{
    function getItemAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbitem, tbstatus
            WHERE tbitem.StatusID = tbstatus.StatusID
            AND tbitem.isActive = 1;
        ");
        return $query->result();
    }

    function getItemAllDetailFromDB($ItemSN)
    {
        $query = $this->db->query("
            SELECT * FROM tbitem, tbstatus, tblocation, tbcategory
            WHERE tbitem.LocalID = tblocation.LocalID
            AND tbitem.StatusID = tbstatus.StatusID
            AND tbitem.CatID = tbcategory.CatID
            AND tbitem.ItemSN = '$ItemSN'
            AND tbitem.isActive = 1;
        ");
        return $query->result();
    }

    function getApproveMaintenanceIsWhereAccountIDFromDB($AccountID)
    {
        $query = $this->db->query("
            SELECT * FROM tbmaintenance, tbitem, tbhastiness, tbstatus, tblocation, tbcategory
            WHERE tbmaintenance.ItemSN = tbitem.ItemSN
            AND tbmaintenance.HID = tbhastiness.HID
            AND tbitem.LocalID = tblocation.LocalID
            AND tbitem.StatusID = tbstatus.StatusID
            AND tbitem.CatID = tbcategory.CatID
            AND tbmaintenance.AccountID = '$AccountID';
        ");
        return $query->result();
    }

    function getApproveMaintenanceIsWhereAccountIDAndMTIDFromDB($MTID, $AccountID)
    {
        $query = $this->db->query("
            SELECT * FROM tbmaintenance, tbitem, tbhastiness, tbstatus, tblocation, tbcategory
            WHERE tbmaintenance.ItemSN = tbitem.ItemSN
            AND tbmaintenance.HID = tbhastiness.HID
            AND tbitem.LocalID = tblocation.LocalID
            AND tbitem.StatusID = tbstatus.StatusID
            AND tbitem.CatID = tbcategory.CatID
            AND tbmaintenance.AccountID = '$AccountID'
            AND tbmaintenance.MTID = '$MTID';
        ");
        return $query->result();
    }
}
