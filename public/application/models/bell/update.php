<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update extends CI_Model
{
    function itemlistUpdate($ItemID, $ItemName, $ItemModel, $ItemBrand, $ItemDescript, $LocalName, $CatName, $StatusID, $ItemYear, $ItemSN)
    {
        $Local = '';
        $Status = '';
        $Cat = '';

        foreach ($this->localID($LocalName) as $row) {
            $Local = $row->LocalID;
        }

        foreach ($this->catID($CatName) as $row) {
            $Cat = $row->CatID;
        }

        $query = $this->db->query("
            UPDATE tbitem 
            SET ItemID = '$ItemID', ItemName = '$ItemName', ItemModel = '$ItemModel', ItemBrand = '$ItemBrand', ItemDescript = '$ItemDescript', LocalID = '$Local', CatID = '$Cat', StatusID = '$StatusID', ItemYear = '$ItemYear'
            WHERE tbitem.ItemSN = '$ItemSN';
        ");
    }

    function catID($CatName)
    {
        $query = $this->db->query("
            SELECT CatID FROM tbcategory WHERE tbcategory.CatName = '$CatName';

        ");
        return $query->result();
    }

    function localID($LocalName)
    {
        $query = $this->db->query("
            SELECT LocalID FROM tblocation WHERE tblocation.LocalName = '$LocalName';

        ");
        return $query->result();
    }

    function statusID($StatusName)
    {
        $query = $this->db->query("
            SELECT StatusID FROM tbstatus WHERE tbstatus.StatusName = '$StatusName';

        ");
        return $query->result();
    }

    function statusUpdate($StatusID, $ItemSN)
    {
        $query = $this->db->query("
            UPDATE tbitem 
            SET StatusID = '$StatusID'
            WHERE tbitem.ItemSN = '$ItemSN';
        ");
    }
}
