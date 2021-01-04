<?php
session_start();

if (isset($_SESSION['user_logged_in']) == TRUE ) {
    header('Location:../view/main.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>Diplomások</title>
<h1 class = "cim"> DiplomaKözpont </h1>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="csomag">
      <div class="title">
Bejelentkezés</div>
<form action="../controller/controller.php" method="POST">
        <div class="field">
          <input type="text" required id="neptun" name="neptun" placeholder="Neptun kód">
        </div>
<div class="field">
          <input type="password" id="password" name="password" required placeholder="Jelszó">
        </div>
<div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me"> emlékezz rám</label>
          </div>
<div class="pass-link">
<a href="password.html">Elfelejtetted a jelszót?</a></div>
</div>
<div>
    <button class="btn" type="submit" value="Submit">Bejelentkezés</button>
        </div>

</form>
</div>


</body>
</html>
