<?php
session_start();
$_session=array();
session_destroy();
if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookpass'])){
   setcookie("cookname", "", time()-60*60*24*100, "/");
   setcookie("cookpass", "", time()-60*60*24*100, "/");

}
header('location: '."../index.php");
?>
