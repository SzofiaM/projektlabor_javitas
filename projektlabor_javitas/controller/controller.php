<?php
require "../model/usersDB.php";

if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$username = filter_input(INPUT_POST, 'neptun');
	$password = filter_input( INPUT_POST,  'password');
	$remember_me = filter_input( INPUT_POST,  'remember-me');
}

$asd = new usersDB();

$res = $asd-> login($username, $password);

if($res[0]['code']== 200)
{
	$_SESSION['userlvl'] = $asd->getLVL($username);
	$_SESSION['user_logged_in']= TRUE;
	$_SESSION['username'] = $username;
	header('Location: ../view/main.php');
}

else 
{
	$_SESSION['login_failure'] = "Hibás felhasználónév vagy jelszó";
	header('Location: ../view/index.php');
}
 ?>
