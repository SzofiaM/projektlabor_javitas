<?php
require "db.php";


class mailsDB extends db
{
    function sendmail($senderID,$takerID,$subject,$content) {
        $this->select("INSERT INTO `mails`( `SenderID`, `TakerID`, `Subject`, `Content`) VALUES (".$senderID.",".$takerID.",'".$subject."','".$content."');");
        $this->log($senderID." üzenetet küldött".$takerID."-nek");
    }
    function listmails($ID) {
        $result = $this->select("SELECT * FROM `mails` WHERE SenderID = ".$ID." or TakerID = ".$ID.";");
        return $result;

    }
}
/*/
---
Tesztek
---

$asd = new mailsDB();

$asd->sendmail(1,2,"Teszt","Ez egy teszt üzenet");