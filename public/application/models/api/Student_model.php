<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{

    public function student_create_data($data)
    {
        $this->db->insert('tbstudent', $data);
        return array('status' => 200, 'message' => 'Data has been created.');
    }

    public function student_create_member($data)
    {
        $this->db->insert('tbaccount', $data);
        return array('status' => 200, 'message' => 'Data has been created.');
    }
}
