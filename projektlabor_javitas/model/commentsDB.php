<?php
require "db.php";

class commentsDB extends db
{
    function createComment($fileID,$commenterID,$comment){
        $this->select("INSERT INTO `comments`(`FileID`, `CommenterID`, `Content`) VALUES (".$fileID.",".$commenterID.",'".$comment."');");
        $this->log($fileID."-hez hozzászolás érkezett ".$commenterID."-től");
    }
    function deleteComment($ID){
        $this->select("DELETE FROM `comments` WHERE ID = ".$ID."; ");
        $this->log($ID."-as komment törölve lett");
    }

}

/*/
---
Tesztek
---