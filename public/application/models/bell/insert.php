<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert extends CI_Model
{
    function insertrecordsMaintenance($MTID, $ItemSN, $InformDate, $MtDetail, $MtImage, $HID, $AccountID)
    {
        $query = "INSERT INTO tbmaintenance (MTID, ItemSN, InformDate, MtDetail, MtImage, HID, AccountID) VALUES ('$MTID', '$ItemSN', '$InformDate', '$MtDetail', '$MtImage', '$HID', '$AccountID');";
        $this->db->query($query);
    }

    function insertrecordsAccount($AccountID, $AUserName, $APassWord, $AccessID)
    {
        $query = "INSERT INTO tbaccount (AccountID, AUserName, APassWord, AccessID) VALUES ('$AccountID', '$AUserName', '$APassWord', '$AccessID');";
        $this->db->query($query);
    }

    function insertrecordsStudent($StudentID, $SPrefix, $SFristName, $SLastName, $Smajor, $Slevel, $SEmail, $STel, $AccountID)
    {
        $query = "INSERT INTO tbstudent (StudentID, SPrefix, SFristName, SLastName, Smajor, Slevel, SEmail, STel, AccountID) VALUES ('$StudentID', '$SPrefix', '$SFristName', '$SLastName', '$Smajor', '$Slevel', '$SEmail', '$STel', '$AccountID');";
        $this->db->query($query);
    }

    function insertrecordsTeacher($TeacherID, $TPrefix, $TFristName, $TLastName, $TPosition, $TEmail, $TTel, $AccountID)
    {
        $query = "INSERT INTO tbteacher (TeacherID, TPrefix, TFristName, TLastName, TPosition, TEmail, TTel, AccountID) VALUES ('$TeacherID', '$TPrefix', '$TFristName', '$TLastName', '$TPosition', '$TEmail', '$TTel', '$AccountID');";
        $this->db->query($query);
    }

    function insertrecordsStaff($StaffID, $StPrefix, $StFristName, $StLastName, $StPosition, $StEmail, $StTel, $AccountID)
    {
        $query = "INSERT INTO tbstaff (StaffID, StPrefix, StFristName, StLastName, StPosition, TEStEmailmail, TTel, AccountID) VALUES ('$StaffID', '$StPrefix', '$StFristName', '$StLastName', '$StPosition', '$StEmail', '$StTel', '$AccountID');";
        $this->db->query($query);
    }

    function insertToken($username, $random_password_hash)
    {
        $query = "INSERT INTO tbl_token_auth (username, password_hash) values ('$username', '$random_password_hash')";
        $this->db->query($query);
    }

    function insertItem($ItemID, $ItemName, $ItemModel, $ItemBrand, $ItemDescript, $LocalID, $CatID, $StatusID, $ItemYear, $ItemSN)
    {
        $query = "INSERT INTO tbitem (ItemID, ItemName, ItemModel, ItemBrand, ItemDescript, LocalID, CatID, StatusID, ItemYear, ItemSN) values ('$ItemID', '$ItemName', '$ItemModel', '$ItemBrand', '$ItemDescript', '$LocalID', '$CatID', '$StatusID', '$ItemYear', '$ItemSN')";
        $this->db->query($query);
    }
}
