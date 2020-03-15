<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Model
{
    function updateAnItemFromDB($ItemSN, $data)
    {
        $query = $this->db->update('tbitem', $data, array('ItemSN' => $ItemSN));
        return $query;
    }
}
