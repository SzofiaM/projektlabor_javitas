<?php
error_reporting(0);


$MySqliLink = mysqli_connect('127.0.0.1', 'root', '', 'felhasznalok');


if (!$MySqliLink) {
	print "<br>Sajnos nem sikerült kapcsolódni az adatbázishoz.<br>";
	die('Hibakód: ' . mysqli_connect_errno() . '<br> Hibaüzenet: ' . mysqli_connect_error());		
	exit();
}
else{
	mysqli_set_charset($MySqliLink, "utf8");
}

?>
