<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete extends CI_Model
{
    function deleteItemWhereItemSN($ItemSN)
    {
        $query = $this->db->query("
            UPDATE tbitem
            SET isActive = 0
            WHERE tbitem.ItemSN = '$ItemSN';
        ");
    }
}
