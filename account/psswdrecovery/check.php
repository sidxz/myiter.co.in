<?php
include "../../security/fun.php";
$udf = New fun();

$em=$_POST["email"];
$ans=$_POST["answer"];
$result=$_POST["result"];
$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$em=mysqli_real_escape_string($dbc,trim($em));
$ans=mysqli_real_escape_string($dbc,trim($ans));
$result=mysqli_real_escape_string($dbc,trim($result));


echo '<font face="Verdana, Verdana" color="#ff0000" size="3">';

if ( $udf->isvalid($em) == 0 || $udf->isvalid($ans) == 0  || $udf->isvalid($result) == 0 )
{
//echo 'SQL INJECTION DETECTED';
$url="../../security/error.php";
echo '<script type="text/javascript">';
	echo 'window.location.href="'.$url.'";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	echo '</noscript>'; 
exit;
}


if($ans==$result)
{
$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query ="SELECT * FROM users WHERE email='$em'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	if(mysqli_num_rows($result) == 1)
	{
	$row=mysqli_fetch_array($result);
	$email=$row['email'];
	$pass=$row['passkey'];
	
	echo '<font face="Verdana, Verdana" color="#e2c822" size="3">';	
	
	
	$email_to = $em;
$email_subject = "MyITER | PASSWORD RECOVERY";
$email_body = 'Your password  Is: <b>'.$pass.' </b><br> If This message was sent to you accidentally please ignore <br> Your password is safe!!' ;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


			if(mail($email_to, $email_subject, $email_body, $headers)){
			echo '  We have mailed you your password. Please check Your email id ( '.$em.' ) <br> Thank You! ';
			} else {
			echo "Oopz Server Busy .... Please Try Again Later ....";
					}
	}
	
	
	else
	
		{
		echo ' Sorry! ( '.$em.' ) is Not Registered With MyITER. Please Create an account with your email id on the <a href="/index.php" target="_PARENT">home page.</a><br> ';
		}
}

else
{
echo "You Have Entered a Wrong answer!";
}
?>