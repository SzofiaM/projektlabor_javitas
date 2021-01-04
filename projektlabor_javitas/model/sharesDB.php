<?php
require "db.php";

class sharesDB extends db
{
    function createShare($fileID,$sharedID){
        $this->select("INSERT INTO `shares`(`FileID`, `SharedID`) VALUES (".$fileID.",".$sharedID.");");
        $this->log($fileID." megosztásra került ".$sharedID."-vel");
    }
    function deleteShare($fileID,$sharedID){
        $this->select("DELETE FROM `shares` WHERE FileID = ".$fileID." and SharedID = ".$sharedID.";");
        $this->log($fileID." megosztása törlésre került ".$sharedID."-vel");
    }

}

/*/
---
Tesztek
---