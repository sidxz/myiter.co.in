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





 <div style="position: absolute; top:50px; left:50px; width: 713px; height: 40px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px; ">
		<font face="Verdana, Verdana" color="ff0000">You Have Entered An INVALID key!</font></div>
			
			</font>
      </div>
      
      
      <div style="position: absolute; top:150px; left:100px; width: 456px; height: 133px; z-index: 10; overflow: visible; line-height:25px;">
	  <font color="#0e1f5b" size="3"  face="Verdana">Please Click on The RESEND KEY button.<br>We will send you(<?php echo $em; ?>) a key again<br>
	  </font>
<div style="text-align:left;  line-height:35px; overflow: visible;">
			<form name="validateretry" method="post" action="emailvalidation.php">
			<font color="#ffffff" size="2"  face="Verdana">
				<font color="#0e1f5b">
			
				<br><br><br>

				</font>
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 150px; height: 32px; background: transparent url(../../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Resend Key" name="Sign"> <br />
				</font>
				</form>
                </div>
		</div>
