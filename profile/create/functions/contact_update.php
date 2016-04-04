<?PHP
require_once '../../../iheader.php';
?>
<?php 
//session_start();

$phno=$_GET["phno"];
$regno=$_GET["regno"];
$fb=$_GET["fb"];
$tweet=$_GET["tweet"];
$proid=$_SESSION['profileid'];

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over C$_GETded! Please retry  after sometine: ERROR CODE 159');

$phno=mysqli_real_escape_string($dbc,strip_tags($phno));
$regno=mysqli_real_escape_string($dbc,strip_tags($regno));
$fb=mysqli_real_escape_string($dbc,strip_tags($fb));
$tweet=mysqli_real_escape_string($dbc,strip_tags($tweet));


$query="UPDATE `myiter_database`.`profile` SET `phno` = '$phno', `regno` = '$regno', `fb` = '$fb', `twitter` = '$tweet' WHERE `profile`.`id` = $proid LIMIT 1;";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$url='../contact.php';
	echo '<div style="position: absolute; top:250px; left:150px; width:800px; height: 100px; background-color: null; z-index:200; overflow: visible; FONT-SIZE: 30px; ">
	<font face="Verdana, Verdana" color="#339900">Saving.....</font></div>';
	echo '<meta http-equiv="refresh" content="2;url='.$url.'" />';
	
	?>
