<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Query extends CI_Model
{
    function tbaccountrecords()
    {
        $query = $this->db->query("
            SELECT AccountID FROM tbaccount ORDER BY AccountID DESC LIMIT 1;
        ");
        return $query->result();
    }

    function tbstaffrecords()
    {
        $query = $this->db->query("
            SELECT StaffID FROM tbstaff ORDER BY StaffID DESC LIMIT 1;
        ");
        return $query->result();
    }
}
