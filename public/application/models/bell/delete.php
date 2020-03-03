<?php
class Delete extends CI_Model 
{
	function deleterecords($ItemSN)
	{
    $query=$this->db->query
    ("
        DELETE FROM tbitem WHERE ItemSN = '$ItemSN';
    ");
    $query=$this->db->query
    ("
        DELETE FROM tbmaintenance WHERE ItemSN = '$ItemSN';
    ");
    }
    
    function deleteToken($Username)
	{
    $query=$this->db->query
    ("
        DELETE FROM tbl_token_auth WHERE username = '$Username';
    ");
    }
    
}