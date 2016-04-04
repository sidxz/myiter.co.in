<?php
session_start();

if(isset($_SESSION['email']))
{
header('location: '."../home.php");
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
<div style="background:url(../static/main/bk2.jpg) center center no-repeat; position:relative; top:0px; width:100%; height:265px; z-index:10; overflow:hidden; ">
</div>



<div id="bdy" class="comp" style="position:absolute; top:0px; left:100px; height: 202px; z-index:50; overflow: visible;">
	
		<img src="../static/main/logo.png">

   

</div>

<div id="bottom_bar" style="position:absolute; top:0px; left:0px; width: 100%; height: 275px; z-index: 2; overflow: visible;">
  	<table height="100%" width="100%" bgcolor="#000000">
	<td><tr></td></tr>
	</table>
</div>



<div style="background:url(../static/main/indbak.jpg); position:absolute; top:265px; width:100%; height:438px; z-index:1; overflow:hidden; ">
</div>


 <div style="position: absolute; top:280px; left:50px; width: 713px; height: 40px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px; ">
		<font face="Verdana, Verdana" color="ff0000">Invalid Email / Password</font></div>
			
			</font>
      </div>
      
      
      <div style="position: absolute; top:350px; left:100px; width: 656px; height: 133px; z-index: 10; overflow: visible; line-height:25px;">
	  <font color="#0e1f5b" size="3"  face="Verdana">Oopz !! We Did Not Find a Valid Combination in our records!<br>Note that both email and password fields are 
	  case sensitive.<br>
	  If You have <b>forgotten your password</b> click here. <br>
	  If You are using MyITER for the <b>first time</b> you need to <b>REGISTER</b> this email id first!<br>
	  <b>Old Users whose email ID's were not verified, their Accounts has been Suspended Temporarily, Please Register again to RE-ACTIVATE your Account.</b>
	  
	  </font>
<div style="text-align:left;  line-height:35px; overflow: visible;">
			<form name="psswdfailed" method="post" action="../index.php">
			<font color="#ffffff" size="2"  face="Verdana">
				<font color="#0e1f5b">
			
				<br>

				</font>
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 150px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Retry" name="Retry">
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 150px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Register" name="Sign"><br />
				</font>
				</form>
                </div>
		</div>
