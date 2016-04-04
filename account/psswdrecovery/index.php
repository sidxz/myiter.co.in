<?php
session_start();


if(isset($_SESSION['email']))
{
header('location: '."home.php");
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
<table height="100%" width="100%" background="../../static/main/bar.png" bgcolor="#000000">
<tr><td></td></tr>
</table>
</div>

<div style="position:absolute; top:2px; left:10%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<a href="/index.php"><img src="../../static/main/logo_small.png"></a>
</div>





 <div style="position: absolute; top:90px; left:150px; width: 713px; height: 40px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px; ">
		<font face="Verdana, Verdana" color="#dd3c10">Password Recovery</font></div>
			
			</font>
      </div>
      
	  
	  
<div class="comp" style="position:absolute; width:100%; height:600px; top:180px; z-index:1000; border:none">  
	<div style="text-align:center;">
	  <IFRAME name="iframe" src="form.php" allowTransparency="true" width="900" height="600" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>
	</div>
</div>	