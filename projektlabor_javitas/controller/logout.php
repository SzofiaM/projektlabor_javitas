<?php
session_start();
$_SESSION['user_logged_in'] = FALSE;
session_destroy();
 
 
if(isset($_COOKIE['series_id']) && isset($_COOKIE['remember_token'])){
    clearAuthCookie();
}
header('Location:../view/login.php');
exit;
 
?>