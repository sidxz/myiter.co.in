<?php
session_start();
include "../security/fun.php";
$udf = New fun();

if(isset($_SESSION['email']))
{
header('location: '."../home.php");
}

$redirect=$_GET["redirect"];
//login

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
 if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookpass']) && strlen($_COOKIE['cookname'])>>1)
 {
 $em=$_COOKIE['cookname'];
 $np=$_COOKIE['cookpass'];
 }
 else if ((isset($_POST["email"]) && isset($_POST["password"]))&& strlen($_POST["email"])>>1)
 {
 
 
 $em=$_POST["email"];
$np=$_POST["password"];
if ( $udf->isvalid($em) != 1 || $udf->isvalid($np) != 1 )
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

$query ="SELECT * FROM users WHERE email='$em'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	if(mysqli_num_rows($result) == 1)
	{
	$row=mysqli_fetch_array($result);
	$email=$row['email'];
	$pass=$row['passkey'];
	
		

	
	
		if($pass==$np)
		{
		
		
		
		$_SESSION['email']=$email;
		$_SESSION['fname']=$row['first_name'];
		$_SESSION['lname']=$row['last_name'];
		$_SESSION['year']=$row['year'];
		$_SESSION['branch']=$row['branch'];
		if(isset($_POST['remember']))
		{
      setcookie("cookname", $_SESSION['email'], time()+60*60*24*100, "/");
      setcookie("cookpass", $pass, time()+60*60*24*100, "/");
	   }
	   $url=$redirect;
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