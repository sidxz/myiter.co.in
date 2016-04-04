<?PHP
require_once 'iheader.php';
?>
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
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 200');
$em=$_SESSION['mail'];
$query="DELETE FROM t_user WHERE temail = '$em'"; 
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$_session=array();
	session_destroy();
 $url="../index.php";
 echo '<script type="text/javascript">';

echo 'window.location.href="'.$url.'";';
echo '</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
echo '</noscript>'; exit;

?>