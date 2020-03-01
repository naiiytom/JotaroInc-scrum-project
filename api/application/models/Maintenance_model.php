<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintenance_model extends CI_Model
{
    public function maintenance_all_data()
    {
        return $this->db->select('*')->from('tbmaintenance')->get()->result();
    }

    public function maintenance_detail_data($id)
    {
        return $this->db->select('*')->where('mtid',$id)->from('tbmaintenance')->get()->row();
    }

    public function maintenance_create_data($data)
    {
        $this->db->insert('tbmaintenance', $data);
        return array('status' => 200, 'message' => 'Data has been created.');
    }
}
