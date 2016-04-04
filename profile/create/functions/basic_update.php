<?PHP
require_once '../../../iheader.php';
?>
<?php 
//session_start();
$about=$_GET["about"];
$objective=$_GET["objective"];
$gender=$_GET["gender"];
$birthday=$_GET["birthday"];
$language=$_GET["lang"];
$proid=$_SESSION['profileid'];



$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');


$about=mysqli_real_escape_string($dbc,strip_tags($about,'<br>'));
$objective=mysqli_real_escape_string($dbc,strip_tags($objective,'<br>'));
$gender=mysqli_real_escape_string($dbc,strip_tags($gender));
$birthday=mysqli_real_escape_string($dbc,strip_tags($birthday));
$language=mysqli_real_escape_string($dbc,strip_tags($language));

$query="UPDATE `myiter_database`.`profile` SET `about` = '$about', `objective` = '$objective', `gender` = '$gender', `birthday` = '$birthday', `languages` = '$language' WHERE `profile`.`id` = $proid LIMIT 1;";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$url='../basic.php';
	echo '<div style="position: absolute; top:250px; left:150px; width:800px; height: 100px; background-color: null; z-index:200; overflow: visible; FONT-SIZE: 30px; ">
	<font face="Verdana, Verdana" color="#339900">Saving.....</font></div>';
	echo '<meta http-equiv="refresh" content="2;url='.$url.'" />';
	?>
