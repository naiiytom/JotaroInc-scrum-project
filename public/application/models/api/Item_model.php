<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_Model
{
    public function item_all_data()
    {
        return $this->db->select('*')->from('tbitem')->get()->result();
    }

    public function item_detail_data($id)
    {
        return $this->db->select('*')->where('itemsn', $id)->from('tbitem')->get()->row();
    }

    public function item_description_data($id)
    {
        return $this->db->select('*')->where('itemid', $id)->from('tbitem')->get()->result();
    }

    public function item_create_data($data)
    {
        $this->db->insert('tbitem', $data);
        return array('status' => 200, 'message' => 'Data has been created.');
    }

    public function item_update_data($id, $data)
    {
        $this->db->where('itemsn', $id)->update('tbitem', $data);
        return array('status' => 200, 'message' => 'Data has been update.');
    }

    public function item_delete_data($id)
    {
        $this->db->where('itemsn', $id)->delete('tbitem');
        return array('status' => 200, 'message' => 'Data has been deleted.');
    }
}
