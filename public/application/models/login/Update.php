<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Model
{
    function upDateIsActiveTBaccount($AUserName)
    {
        $query = $this->db->query("
        UPDATE `tbaccount` SET `isActive` = '1' WHERE `tbaccount`.`AUserName` = '$AUserName';
        ");
    }

    function upDateIsActive0TBaccount($AUserName)
    {
        $query = $this->db->query("
        UPDATE `tbaccount` SET `isActive` = '0' WHERE `tbaccount`.`AUserName` = '$AUserName';
        ");
    }
}
