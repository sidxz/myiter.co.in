<?PHP
require_once 'logout2.php';
?>

<?php

session_start();
include "../security/fun.php";
$udf = New fun();



//login

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
 
 if ((isset($_POST["uname"]) && isset($_POST["password"]))&& strlen($_POST["uname"])>>1)
 {
 
 
 $id=$_POST["uname"];
$np=$_POST["password"];
if ( $udf->isvalid($id) != 1 || $udf->isvalid($np) != 1 )
{
//echo 'SQL INJECTION DETECTED';
$url="../security/error.php";
echo '<script type="text/javascript">';
	echo 'window.location.href="'.$url.'";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	echo '</noscript>'; 
exit;
}




}
else {
echo ':P';
$url="loginfailed.php";
}

$query ="SELECT * FROM moderators WHERE id='$id'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	if(mysqli_num_rows($result) == 1)
	{
	$row=mysqli_fetch_array($result);
	$id=$row['id'];
	$pass=$row['passkey'];
	
		

	
	
		if($pass==$np)
		{
		
		$_SESSION['mid']=$row['id'];
		$_SESSION['memail']=$row['email'];
		$_SESSION['mname']=$row['name'];
		$_SESSION['mphno']=$row['phno'];
		$_SESSION['mip']=$row['ip'];
		$_SESSION['mtime']=$row['time'];
		
	   $url="home.php";
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$url.'";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	echo '</noscript>'; 
		
 
		}
		else
		{
		echo 'failed';
		$url="loginfailed.php";
		}
	}
	else
	{
	echo 'failed';
	$url="loginfailed.php";
	}
	
	
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$url.'";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	echo '</noscript>'; 
		
?>