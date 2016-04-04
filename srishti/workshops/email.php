<?php 
$photomania='';
$webosis='';
$mediacove='';
$cad='';


$em=$_POST["mail"];
$num=$_POST["num"];

$n=$_POST["name"];

$yr=$_POST["year"];


$photomania=$_POST["photomania"];
$webosis=$_POST["webosis"];
$mediacove=$_POST["mediacove"];
$cad=$_POST["cadiology"];


$email_to = "siddhantrath@gmail.com";
$email_subject = "WORKSHOP REGISTRATION | admin@myiter.co.in";
$email_body = "Details : $n  $num  $em  $yr   \n Workshops \n $photomania \n $webosis \n $mediacove \n $cad";


if(mail($email_to, $email_subject, $email_body)){
	echo '';
} else {
	echo "Oopz Server Busy .... Please Try Again Later ....";
}

$email_to = "srishti.soa@gmail.com";

if(mail($email_to, $email_subject, $email_body)){
	echo '';
} else {
	echo "Oopz Server Busy .... Please Try Again Later ....";
}
?>

<html>
<head>

<title>Welcome to Srishti</title>








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



 <div style="position: absolute; top:50px; left:50px; width: 500px; height: 50px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 30px; ">
		<font face="Verdana, Verdana" color="#000000">You Have been Registered. <br> Thank You!</font></div>
			
			</font>
      </div>
      
      
