<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Model
{
    function addNewItemToDB($data)
    {
        $query = $this->db->insert('tbitem', $data);
        return $query;
    }
}
