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
	function getAccountAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbaccount, tbaccess ,tbpermission WHERE tbaccount.AccessID = tbaccess.AccessID AND tbaccount.PermissionID=tbpermission.PermissionID;
        ");
        return $query->result();
	}
	
	function getApproveRegisterAllFromDB()
    {
        $query = $this->db->query("
            SELECT * FROM tbaccount, tbaccess ,tbpermission WHERE tbaccount.AccessID = tbaccess.AccessID AND tbaccount.PermissionID=tbpermission.PermissionID;
        ");
        return $query->result();
	}
}
