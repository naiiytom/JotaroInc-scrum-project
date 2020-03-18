<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Model
{
    function addNewAccount($AccountID, $AUserName, $APassWord, $AccessID, $isActive, $PermissionID)
    {
        $query = "INSERT INTO tbaccount (AccountID, AUserName, APassWord, AccessID, isActive, PermissionID) VALUES ('$AccountID', '$AUserName', '$APassWord', '$AccessID', '$isActive', '$PermissionID');";
        $this->db->query($query);
    }

    function addNewStudent($StudentID, $SPrefix, $SFristName, $SLastName, $Smajor, $SEmail, $STel, $AccountID)
    {
        $query = "INSERT INTO tbstudent (StudentID, SPrefix, SFristName, SLastName, Smajor, SEmail, STel, AccountID) VALUES ('$StudentID', '$SPrefix', '$SFristName', '$SLastName', '$Smajor', '$SEmail', '$STel', '$AccountID');";
        $this->db->query($query);
    }

    function addNewStaff($StaffID, $StPrefix, $StFristName, $StLastName, $StPosition, $StEmail, $StTel, $AccountID)
    {
        $query = "INSERT INTO tbstaff (StaffID, StPrefix, StFristName, StLastName, StPosition, StEmail, StTel, AccountID) VALUES ('$StaffID', '$StPrefix', '$StFristName', '$StLastName', '$StPosition', '$StEmail', '$StTel', '$AccountID');";
        $this->db->query($query);
    }
}
