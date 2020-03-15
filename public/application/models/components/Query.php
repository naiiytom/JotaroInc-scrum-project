<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Query extends CI_Model
{
    function getItemAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbitem, tbstatus WHERE tbitem.StatusID = tbstatus.StatusID;
        ");
        return $query->result();
    }
    function getItemAllisActive1FromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbitem, tbstatus WHERE tbitem.StatusID = tbstatus.StatusID AND tbitem.isActive = 1;
        ");
        return $query->result();
    }

    function getAccountAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbaccount, tbaccess ,tbpermission WHERE tbaccount.AccessID = tbaccess.AccessID AND tbaccount.PermissionID = tbpermission.PermissionID;
        ");
        return $query->result();
    }

    function getApproveRegisterAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbaccount, tbaccess ,tbpermission WHERE tbaccount.AccessID = tbaccess.AccessID AND tbaccount.PermissionID = tbpermission.PermissionID;
        ");
        return $query->result();
    }

    function getApproveMaintenanceIsActive0FromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbmaintenance, tbhastiness ,tbaccount, tbitem 
            WHERE tbmaintenance.HID = tbhastiness.HID 
            AND tbmaintenance.AccountID = tbaccount.AccountID 
            AND tbmaintenance.ItemSN = tbitem.ItemSN
            AND tbmaintenance.isActive = 0;
        ");
        return $query->result();
    }

    function getApproveMaintenanceIsActive1FromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbmaintenance, tbhastiness ,tbaccount, tbitem, tbstatus
            WHERE tbmaintenance.HID = tbhastiness.HID 
            AND tbmaintenance.AccountID = tbaccount.AccountID 
            AND tbmaintenance.ItemSN = tbitem.ItemSN
            AND tbitem.StatusID = tbstatus.StatusID
            AND tbmaintenance.isActive = 1;
        ");
        return $query->result();
    }

    function getAnItemFromDB($ItemSN)
    {
        $query = $this->db->query("
            SELECT * FROM tbitem, tbstatus, tblocation, tbcategory
            WHERE tbitem.ItemSN = '$ItemSN'
            AND tbitem.StatusID = tbstatus.StatusID
            AND tbitem.CatID = tbcategory.CatID
            AND tbitem.LocalID = tblocation.LocalID;
        ");

        return $query->result();
    }

    function getCategoryAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbcategory;
        ");

        return $query->result_array();
    }

    function getLocationAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tblocation;
        ");

        return $query->result_array();
    }

    function getStatusAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbstatus;
        ");

        return $query->result_array();
    }
}
