<?php
session_start();

if(isset($_SESSION['sid']))
{
header('location: '."http://localhost/home.php");
}
if(!isset($_SESSION['mail']))
{
header('location: '."../index.php");
}

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
$em=$_SESSION['mail'];
$query= " SELECT * FROM `t_user` WHERE temail='$em'";
	$result=mysqli_query($dbc,$query)
or die(" Error processing request");
if(mysqli_num_rows($result) == 1)
{
$row=mysqli_fetch_array($result);
$ps=$row['tpasskey'];
$fn=$row['tfirstname'];
$ln=$row['tlastname'];
$yr=$row['tyear'];
$br=$row['tbranch'];
$idsec=$row['idsecret'];
}

$sec_entered=$_POST["secid"];
$sec_entered=mysqli_real_escape_string($dbc,trim($sec_entered));
$ip=GetHostByname($_SERVER['REMOTE_ADDR']);
if($idsec==$sec_entered)
{
$query="INSERT INTO `myiter_database`.`users` (`id`, `email`, `passkey`, `first_name`, `last_name`, `year`, `branch`, `ip`, `time`) VALUES (NULL, '$em', '$ps', '$fn', '$ln', '$yr', '$br', '$ip', CURRENT_TIMESTAMP)";
	mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 162 ");

	$query="DELETE FROM t_user WHERE temail = '$em'"; 
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$_session=array();
	session_destroy();
	
 $url="done.php";
 echo '<script type="text/javascript">';

echo 'window.location.href="'.$url.'";';
echo '</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
echo '</noscript>'; exit;
}
else
{
$url="validationfailed.php";
 echo '<script type="text/javascript">';

echo 'window.location.href="'.$url.'";';
echo '</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
echo '</noscript>'; exit;
}


?>