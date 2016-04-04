<?php 

$em=$_POST["mail"];
$num=$_POST["num"];

$n=$_POST["name"];

$yr=$_POST["year"];
$br=$_POST["branch"];

$email_to = "sidhs1991@live.com";
$email_subject = $br;
$email_body = $n.' '.$num.' '.$em.' '.$yr.' '.$br;


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
<table height="100%" width="100%" background="images/bar.png" bgcolor="#000000">
<tr><td></td></tr>
</table>
</div>

<div style="position:absolute; top:2px; left:10%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<a href="index.php"><img src="images/logo_small.png"></a>
</div>





 <div style="position: absolute; top:150px; left:50px; width: 500px; height: 50px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px; ">
		<font face="Verdana, Verdana" color="#000000">Thank You For Registering!</font></div>
			
			</font>
      </div>
      
      
      <div style="position: absolute; top:250px; left:50px; width: 456px; height: 133px; z-index: 10; overflow: visible; line-height:25px;">
	  <font color="#0e1f5b" size="3"  face="Verdana">Thats all we needed right now! <br> We will get back to you soon!
	  <br>Note that entries without a valid phno are rejected .<br><b>All members of your group should have a myiter id, if you dont have please register 
	  at the home page immediately.</b><br> Launching By the end of this month!</font>
<div style="text-align:right;  line-height:35px; overflow: visible;">
			
		</div>
