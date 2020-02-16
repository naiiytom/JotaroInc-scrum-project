<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemModel extends CI_Model {
    
    public function item_all_data()
    {
        return $this->db->select('id, item_name')->from('items')->get()->result();
    }

    public function item_create_data($data)
    {
        $this->db->insert('books', $data);
        return array('status' => 201, 'message' => 'Data has been created.');
    }

    public function item_update_data($id, $data)
    {
        $this->db->where('id',$id)->update('items',$data);
        return array('status' => 200, 'message' => 'Data has been update.');
    }
}
