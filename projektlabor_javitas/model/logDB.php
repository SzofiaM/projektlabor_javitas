<?php
require "db.php";

class logDB extends db
{
    function listlog() {
        $result = $this->select("SELECT * FROM `log` ;");

        return $result;

    }

}