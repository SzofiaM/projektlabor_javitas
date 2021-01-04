<?php


session_start();
/*/
---
Tesztek
---
$_SESSION['userlvl']=2;
/*/
$_SESSION['userlvl']=2;


if (session_status()==1) {

}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #401b58;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #401b58;
  color: black;
}

.topnav a.active {
  background-color: #401b58;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
    <a class="active" href="main.php">Főoldal</a>
    <?php
    if ($_SESSION['userlvl']==2) {
        ?>
        <a href="reg.php">felhasználó létrehozás</a>
        <a href="kezeles.php">Felhasználó kezelés</a>
        <a href="log.php">log kezelése</a>
        <a href="kat.php">kategóriák kezelése</a>
        <?php
    }

    ?>
    <?php
    if ($_SESSION['userlvl']==1) {
        ?>
        <a href="#kat">kategóriák kezelése</a>
        <?php
    }

    ?>



</div>


</body>
</html>
<?php
?>