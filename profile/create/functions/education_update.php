<?PHP
require_once '../../../iheader.php';
?>
<?php 
//session_start();
$school=$_GET["school"];
$plustwo=$_GET["plustwo"];
$company=$_GET["company"];
$achievebe=$_GET["achievebe"];
$achievede=$_GET["achievede"];
$proid=$_SESSION['profileid'];

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$school=mysqli_real_escape_string($dbc,strip_tags($school));
$plustwo=mysqli_real_escape_string($dbc,strip_tags($plustwo));
$company=mysqli_real_escape_string($dbc,strip_tags($company));
$achievebe=mysqli_real_escape_string($dbc,strip_tags($achievebe,'<br>'));
$achievede=mysqli_real_escape_string($dbc,strip_tags($achievede,'<br>'));

$query="UPDATE `myiter_database`.`profile` SET `school` = '$school', `plustwo` = '$plustwo', `company` = '$company', `achievement_be` = '$achievebe', `achievement_de` = '$achievede' WHERE `profile`.`id` = $proid LIMIT 1;";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$url='../education.php';
	echo '<div style="position: absolute; top:250px; left:150px; width:800px; height: 100px; background-color: null; z-index:200; overflow: visible; FONT-SIZE: 30px; ">
	<font face="Verdana, Verdana" color="#339900">Saving.....</font></div>';
	echo '<meta http-equiv="refresh" content="2;url='.$url.'" />';
	
	?>
