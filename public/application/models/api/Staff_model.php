<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff_model extends CI_Model
{

    public function staff_create_data($data)
    {
        $this->db->insert('tbstaff', $data);
        return array('status' => 200, 'message' => 'Data has been created.');
    }

    public function staff_create_member($data)
    {
        $this->db->insert('tbaccount', $data);
        return array('status' => 200, 'message' => 'Data has been created.');
    }
}
