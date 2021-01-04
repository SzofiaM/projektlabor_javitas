<?php
require "db.php";


class filesDB extends db
{
    function uploadfile($filename, $link, $ownerID, $categoryID, $public) {
        $this->select("INSERT INTO `files`(`Filename`, `Link`, `OwnerID`, `CategoryID`, `Public`) VALUES ('".$filename."','".$link."',".$ownerID.",".$categoryID.",".$public.");");
        $this->log($filename." fájl feltöltésre került ".$ownerID."-es ID felhasználó által a ".$categoryID."-es kategóriába ( ".$link." )");

    }
    function deletefile($ID) {
        $this->select("DELETE FROM `files` WHERE `files`.`ID` = ".$ID.";");
        $this->log($ID." fájl törölve lett");
    }
    function editfile($ID, $filename=null, $link=null, $ownerID=null, $categoryID=null, $public=null) {
        $data = $this->select("SELECT * FROM `files` WHERE `ID` = ".$ID.";");
        if ($filename == null) {
            $filename = $data[0]['Filename'];
        }
        if ($link == null ) {
            $link = $data[0]['Link'];
        }
        if ($ownerID == null) {
            $ownerID = $data[0]['OwnerID'];
        }
        if ($categoryID == null) {
            $categoryID = $data[0]['CategoryID'];
        }
        if ($public == null) {
            $public = $data[0]['Public'];
        }
        $this->select("UPDATE `files` SET `Filename`='".$filename."',`Link`='".$link."',`OwnerID`=".$ownerID.",`CategoryID`=".$categoryID.",`Public`=".$public." WHERE `ID`=".$ID.";");
        $this->log($ID."-es fájl modosításra került");

    }
    function getfiledata($ID) {
        $this->select("SELECT *  FROM `files` WHERE `files`.`ID` = ".$ID.";");
    }
    function listallfiles() {
        $result = $this->select("SELECT * FROM `files`;");
        return $result;
    }
    function listfiles($categoryID) {
        $result = $this->select("SELECT * FROM `files` WHERE `CategoryID` = ".$categoryID.";");
        return $result;
    }
}
/*/
---
Tesztek
---

$asd = new filesDB();

$asd->uploadfile("Almafa","teszt.hu/almafa",1,2,1);