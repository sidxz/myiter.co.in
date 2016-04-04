<?php
session_start();
$emy=$_POST["emailAddr"];

if(isset($_SESSION['email']))
{
header('location: '."http://localhost/home.php");
}


?>

<html>

<head>

	<title> Sign up </title>
</head>

<body bgcolor="#0e1f5b">

	
<div style="position:absolute; top:2px; right:1%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<img src="../static/main/logo_small.png">
</div>	


<div  style="position:absolute; bottom:1%;" link="color:white">

<font color="#dd3c10" size=5 face="Verdana, Verdana">
         <br>You Encountered The Following Errors..<br>
	</font>

<font color="#ffffff" size=4 face="Verdana, Verdana">


<?PHP
include "../security/fun.php";
$udf = &New fun;
$_session=array();


$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');


$em=$_POST["emailAddr"];
$np=$_POST["npassword"];
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$yr=$_POST["year"];
$br=$_POST["branch"];

$em=mysqli_real_escape_string($dbc,trim($em));
$np=mysqli_real_escape_string($dbc,trim($np));
$fn=mysqli_real_escape_string($dbc,trim($fn));
$ln=mysqli_real_escape_string($dbc,trim($ln));
$yr=mysqli_real_escape_string($dbc,trim($yr));
$br=mysqli_real_escape_string($dbc,trim($br));


$ip=GetHostByname($_SERVER['REMOTE_ADDR']);



if ( $udf->isvalid($em) == 1 && $udf->isvalid($np) == 1 && $udf->isvalid($fn) == 1 && $udf->isvalid($ln) == 1 )
{
$flag=0;
$query ="SELECT email FROM users WHERE email='$em'";
$result=mysqli_query($dbc,$query)
or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 160 ");

	if(mysqli_num_rows($result) == 1)
	{
	$flag=0;
	echo "This email id ( ".$em."  )is allready registered and the account is also active.<br> Please Use the Login Pannel to sign in.";
	}
	else {
	
	$query ="SELECT temail FROM t_user WHERE temail='$em'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	if(mysqli_num_rows($result) == 1)
	{
	$flag=0;
	echo "This email id ( ".$em."  )is allready registered BUT the account is NOT actived.<br> Click Here to start the activation Process.";
	$query="DELETE FROM t_user WHERE temail = '$em'"; 
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	$secretnum=rand(10000,99999);
	$query="INSERT INTO `myiter_database`.`t_user` (`tid`, `temail`, `tpasskey`, `tfirstname`, `tlastname`, `tyear`, `tbranch`, `idsecret`, `validity`, `time`, `ip`) VALUES (NULL, '$em', '$np', '$fn', '$ln', '$yr', '$br', '$secretnum', '0', CURRENT_TIMESTAMP, '$ip')";
	mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 162 ");
 echo 'Account has been Created Successfully';
	$_SESSION['mail']=$em;
  $url="emailvalidation.php";
 echo '<script type="text/javascript">';

echo 'window.location.href="'.$url.'";';
echo '</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
echo '</noscript>'; exit;
	
	}
	else
	{
	$flag=1;
	}
	
	}
	
	if($flag==1)
	{
	$secretnum=rand(10000,99999);
	$query="INSERT INTO `myiter_database`.`t_user` (`tid`, `temail`, `tpasskey`, `tfirstname`, `tlastname`, `tyear`, `tbranch`, `idsecret`, `validity`, `time`, `ip`) VALUES (NULL, '$em', '$np', '$fn', '$ln', '$yr', '$br', '$secretnum', '0', CURRENT_TIMESTAMP, '$ip')";
	mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 162 ");
 echo 'Account has been Created Successfully';
	$_SESSION['mail']=$em;
  $url="emailvalidation.php";
 echo '<script type="text/javascript">';

echo 'window.location.href="'.$url.'";';
echo '</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
echo '</noscript>'; exit;

	}

}


else
{
echo "All fields are Compulsary!! <br> Please Retry filling all the text boxes <br> If you still encounter the problem you may have used super special characters which are not accepted<br> try removing them  "; 
}








?>