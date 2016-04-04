<?PHP
require_once '../../../iheader.php';
?>
<?php 
//session_start();

$interests=$_GET["interests"];
$passion=$_GET["passion"];
$commendations=$_GET["commendations"];
$training=$_GET["training"];
$courses=$_GET["courses"];
$sports=$_GET["sports"];
$proid=$_SESSION['profileid'];


$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$interests=mysqli_real_escape_string($dbc,strip_tags($interests));
$passion=mysqli_real_escape_string($dbc,strip_tags($passion));
$commendations=mysqli_real_escape_string($dbc,strip_tags($commendations,'<br>'));
$training=mysqli_real_escape_string($dbc,strip_tags($training,'<br>'));
$courses=mysqli_real_escape_string($dbc,strip_tags($courses,'<br>'));
$sports=mysqli_real_escape_string($dbc,strip_tags($sports));

$query="UPDATE `myiter_database`.`profile` SET `interests` = '$interests', `passion` = '$passion', `commendations` = '$commendations', `training` = '$training', `courses` = '$courses', `sports` = '$sports' WHERE `profile`.`id` = $proid LIMIT 1;";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$url='../traning.php';
	echo '<div style="position: absolute; top:250px; left:150px; width:800px; height: 100px; background-color: null; z-index:200; overflow: visible; FONT-SIZE: 30px; ">
	<font face="Verdana, Verdana" color="#339900">Saving.....</font></div>';
	echo '<meta http-equiv="refresh" content="2;url='.$url.'" />';
	
	?>
