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
$em=$_SESSION['mail'];

$secretnum=rand(10000,99999);

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
	$query="UPDATE `myiter_database`.`t_user` SET `idsecret` = '$secretnum' WHERE `t_user`.`temail` = '$em' LIMIT 1 ;";
	mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 162 ");
	


$email_to = $em;
$email_subject = "Warm Welcome to MyITER.co.in";
$email_body = 'Your Secret ID Is: '.$secretnum;


if(mail($email_to, $email_subject, $email_body)){
	echo '';
} else {
	echo "Oopz Server Busy .... Please Try Again Later ....";
}
?>




<html>
<head>

<title>Welcome to MyITER</title>







</head>

<body bgcolor="#ffffff" style="overflow-x:hidden">

<style>
<!--




A.type3:link    {color:#0e1f5b; FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:visited {color:#0e1f5b;FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:active  {color:#0e1f5b;FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:hover   {color:#0e1f5b; FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:underline;}
//-->
</style>


<div style="position:absolute; top:2px; left:0px; height: 36px; width:100%; z-index: 100; overflow: visible;">
<table height="100%" width="100%" background="../images/bar.png" bgcolor="#000000">
<tr><td></td></tr>
</table>
</div>

<div style="position:absolute; top:2px; left:10%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<a href="../index.php"><img src="../images/logo_small.png"></a>
</div>





 <div style="position: absolute; top:150px; left:50px; width: 500px; height: 50px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px; ">
		<font face="Verdana, Verdana" color="#000000">Validate Your Account</font></div>
			
			</font>
      </div>
      
      
      <div style="position: absolute; top:250px; left:50px; width: 456px; height: 133px; z-index: 10; overflow: visible; line-height:25px;">
	  <font color="#0e1f5b" size="3"  face="Verdana">To Confirm <b><?php echo $em; ?></b> belongs to you we have sent a secret code to your email id.<br>
	  <b>Please open your email account and paste the key here. Do NOT hit Refresh or Close this Window.</b><br><br></font>
<div style="text-align:right;  line-height:35px; overflow: visible;">
			<form name="validate" method="post" action="validate.php">
			<font color="#ffffff" size="2"  face="Verdana">
				<font color="#0e1f5b">
				<label for="Secretid">Secret Number:</label>
				<input type="text" id="secid" name="secid" size="30"  style="width: 250px; height: 30px" /> <br />
			

				</font>
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 150px; height: 32px; background: transparent url(../../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Validate Account!" name="Sign"> <br />
				</font>
				</form>
                </div>
		</div>
