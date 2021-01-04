<?php ob_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Regisztráció</title>
    </head>
    <body>
<?php
session_start();
include("kapcsolodas.php");
  
  if(isset($_POST['regisztracio'])){
    unset($reg_result);
    if(mb_strlen($_POST['neptunkód'])>25){
		$reg_result = ' Túl hosszú neptunkód!(Max. 25 karakter lehet!)'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
    elseif($_POST['neptunkód']==""){
		$reg_result = 'Üres a neptunkód mező!'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
    elseif($_POST['pass1']==""){
		$reg_result = 'Üres a Jelszó mező!'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
    elseif($_POST['pass1']!=$_POST['pass2']){
		$reg_result = 'A két jelszó különbözik!'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
    elseif(mb_strlen($_POST['pass1'])<12){
		$reg_result = 'Túl rövid a jelszó! (Min. 12 karakternek kell lennie.)'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
     elseif(mb_strlen($_POST['pass1'])=="#[A-Z]+#"){
		$reg_result = 'Jelszónak taralmaznia kell egy nagy betüt)'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
	elseif(mb_strlen($_POST['pass1'])=="#[0-9]+#"){
		$reg_result = 'Jelszónak taralmaznia kell egy számot)'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
	elseif(mb_strlen($_POST['pass1'])=="#[a-z]+#"){
		$reg_result = 'Jelszónak taralmaznia kell egy kis betüt)'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
	elseif(mb_strlen($_POST['pass1'])=="#[#&@.,-!?]+#"){
		$reg_result = 'Jelszónak taralmaznia kell egy speciális karaktert)'<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">;}
	else{
      $nick_prot = trim( $_POST['neptunkód'] );
      $nick_prot = mysql_escape_string($nick_prot);
      $sql_result = mysql_query("SELECT id FROM users  WHERE nickname='$nick_prot'");

      if(mysql_errno())
        $reg_result = "Adatbázis hiba [1] miatt a regisztráció sikertelen!";  
      if(@mysql_num_rows($sql_result))
        $reg_result = ' Már regisztráltak ezzel a neptunkóddal!<br><input class="buttons" name="vissza" value="Vissza" onclick="history.go(-1)" type="button">';
      @mysql_free_result($sql_result);  
    }
    if(!isset($reg_result))
    {
      mysql_query("INSERT INTO users  (nickname,password,regip,regtime) VALUES ('$nick_prot','".md5($_POST['pass1'])."','".$_SERVER['REMOTE_ADDR']."',NOW())");
      if(mysql_errno())
      $reg_result = "Adatbázis hiba [2] miatt a regisztráció sikertelen!";  
      print mysql_error();
    }

  }

  header("Content-Type: text/html; charset=utf-8"); 
  header("Cache-Control: no-cache, no-store, must-revalidate, post-check=0, pre-check=0"); 
  
  if(!isset($_POST['regisztracio']))
  {
    
    include('reg_form.php');
  }
  elseif(isset($_POST['regisztracio']))
  {
    
    if(isset($reg_result))
      
      print("$reg_result");
    else {
      
          print('Sikeres regisztráció!');
         }
  }  
include("kapcsolatbontas.php");
  ?>
    </body>
</html>
<?php ob_end_flush(); ?>  
 
