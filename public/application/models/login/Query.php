<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Query extends CI_Model
{
    function accountrecords($AUserName, $APassWord)
    {
        $query = $this->db->query("
            SELECT * FROM tbaccount WHERE AUserName = '$AUserName' AND APassWord = '$APassWord';
        ");
        return $query->result();
    }
}
