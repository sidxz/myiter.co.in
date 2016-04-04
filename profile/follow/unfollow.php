<?php 
session_start();
$proid=$_GET["followid"];
$profileid=$_SESSION['profileid'];
$url=$_GET["redirect2"];

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query="DELETE FROM `myiter_database`.`follow` WHERE `pid` = '$proid' AND `following` = '$profileid' LIMIT 1";

$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	
	//echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
?>