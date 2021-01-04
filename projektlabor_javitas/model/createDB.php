<?php
require "db.php";

class createDB extends db
{
    function create () {


        $this->select("CREATE TABLE IF NOT EXISTS Users (
    	    ID int AUTO_INCREMENT PRIMARY KEY,
    	    Username varchar(8),
    	    Password varchar(32),
    	    Userlvl int
        )");

        $this->select("CREATE TABLE IF NOT EXISTS Mails (
            ID int AUTO_INCREMENT PRIMARY KEY,
    	    SenderID int,
    	    TakerID int,
    	    Subject VARCHAR(255),
    	    Content VARCHAR(65535)
        )");

        $this->select("CREATE TABLE IF NOT EXISTS Files (
            ID int AUTO_INCREMENT PRIMARY KEY,
    	    Filename VARCHAR(255),
    	    Link VARCHAR(255),
    	    OwnerID int,
    	    CategoryID int,
    	    Public TINYINT(1)
        )");

        $this->select("CREATE TABLE IF NOT EXISTS Categorys (
            ID int AUTO_INCREMENT PRIMARY KEY,
    	    CatName VARCHAR(255),
    	    Description VARCHAR(65535)
        )");

        $this->select("CREATE TABLE IF NOT EXISTS Log (
            ID int AUTO_INCREMENT PRIMARY KEY,
    	    Date DATETIME,
    	    Log VARCHAR(65535)
        )");
        $this->select("CREATE TABLE IF NOT EXISTS Shares (
            FileID int,
            SharedID int
        )");
        $this->select("CREATE TABLE IF NOT EXISTS Comments (
            ID int AUTO_INCREMENT PRIMARY KEY,
            FileID int,
            CommenterID int,
    	    Content VARCHAR(65535)
        )");





        $asd = count($this->select("SELECT Username  FROM `users` WHERE Username='admin';"));

        if ($asd == 0) {
            $this->select("INSERT INTO `users`( `Username`, `Password`, `Userlvl`) VALUES ('admin','admin',2);");
        }

        $asd = count($this->select("SELECT CatName  FROM `categorys` WHERE CatName='Default';"));

        if ($asd == 0) {
            $this->select("INSERT INTO `categorys`(`CatName`, `Description`) VALUES ('Default','Alapértelmezett kategória, nem törölhető!');");
        }


    }



}

$asd = new createDB;

$return = $asd->create();

echo $return;




echo 'Adattáblák és admin felhasználó létrehozva vagy már léteznek!';