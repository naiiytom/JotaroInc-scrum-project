<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert extends CI_Model
{
    function insertrecordsMaintenance($ItemSN, $InformDate, $MtDetail, $MtImage, $HasID, $AccountID)
    {
        $query = $this->db->query("
            INSERT INTO `tbmaintenance` (`MTID`, `ItemSN`, `InformDate`, `MtDetail`, `MtImage`, `HID`, `AccountID`, `isActive`) 
            VALUES ('NULL', '$ItemSN', '$InformDate', '$MtDetail', '$MtImage', '$HasID', '$AccountID', '0');
        ");
    }
}
