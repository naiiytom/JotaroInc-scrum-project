<?php
class Query extends CI_Model 
{
	function itemlistrecordsAll()
	{
        $query=$this->db->query
        ("
            SELECT * FROM viewListItem;
        ");
        return $query->result();
    }

    function itemlistrecordsItemSN($ItemSN)
	{
        $query=$this->db->query
        ("
            SELECT * FROM viewListItem WHERE ItemSN = '$ItemSN';
        ");
        return $query->result();
    }

    function accountrecords($username, $password)
	{
        $query=$this->db->query
        ("
            SELECT * FROM tbaccount WHERE AUserName = '$username' AND APassWord = '$password';
        ");
        return $query->result();
    }

    function tbhastinessrecords($HName)
	{
        $query=$this->db->query
        ("
        SELECT * FROM tbhastiness WHERE HName = '$HName';
        ");
        return $query->result();
    }
    
    function tbmaintencerecords()
	{
        $query=$this->db->query
        ("
            SELECT MTID FROM tbmaintenance ORDER BY MTID DESC LIMIT 1;
        ");
        return $query->result();
    }

    function tbaccountrecords()
	{
        $query=$this->db->query
        ("
            SELECT AccountID FROM tbaccount ORDER BY AccountID DESC LIMIT 1;
        ");
        return $query->result();
    }

    function accountID($Username)
	{
        $query=$this->db->query
        ("
            SELECT AccountID FROM tbaccount WHERE AUserName = '$Username';
        ");
        return $query->result();
    }

    function tbteacherrecords()
	{
        $query=$this->db->query
        ("
            SELECT TeacherID FROM tbteacher ORDER BY TeacherID DESC LIMIT 1;
        ");
        return $query->result();
    }

    function tbstaffrecords()
	{
        $query=$this->db->query
        ("
            SELECT StaffID FROM tbstaff ORDER BY StaffID DESC LIMIT 1;
        ");
        return $query->result();
    }

    function tokenrecords($Username)
	{
        $query=$this->db->query
        ("
        SELECT * FROM tbl_token_auth WHERE username = '$Username';
        ");
        return $query->result();
    }
    
}