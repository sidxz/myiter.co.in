<?PHP
require_once '../../../iheader.php';
?>
<?php 
//session_start();

$iter_club=$_GET["iter_club"];
$other_club=$_GET["other_club"];
$nw=$_GET["new"];
$other=$_GET["other_involvement"];
$proid=$_SESSION['profileid'];

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over C$_GETded! Please retry  after sometine: ERROR CODE 159');

$iter_club=mysqli_real_escape_string($dbc,strip_tags($iter_club));
$other_club=mysqli_real_escape_string($dbc,strip_tags($other_club));
$nw=mysqli_real_escape_string($dbc,strip_tags($nw,'<br>'));
$other=mysqli_real_escape_string($dbc,strip_tags($other));


$query="UPDATE `myiter_database`.`profile` SET `iter_club` = '$iter_club', `other_club` = '$other_club', `new` = '$nw', `other_involvement` = '$other' WHERE `profile`.`id` = $proid LIMIT 1;";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$url='../involve.php';
	echo '<div style="position: absolute; top:250px; left:150px; width:800px; height: 100px; background-color: null; z-index:200; overflow: visible; FONT-SIZE: 30px; ">
	<font face="Verdana, Verdana" color="#339900">Saving.....</font></div>';
	echo '<meta http-equiv="refresh" content="2;url='.$url.'" />';
	
	?>
