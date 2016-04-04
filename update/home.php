<?PHP
require_once 'header.php';

?>



<html>
<head>
<title>Developers Shell</title>
</head>

<body bgcolor="#0e1f5b">

<style>
<!--



A.type1:link    {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 20px; line-height:19px; text-decoration:none; line-height:25px;}
A.type1:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 20px; line-height:19px; text-decoration:none; line-height:25px;}
A.type1:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 20px; line-height:19px; text-decoration:none; line-height:25px;}
A.type1:hover   {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 20px; line-height:19px;text-decoration:underline; line-height:25px;}


A.type3:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:hover   {color:#990066; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:underline;}
//-->
</style>


<div style="position: absolute; top:80px; left:10px; width: 700px; height: 400px; background-color: null; z-index:5200; overflow: visible;">
<font face="Verdana, Verdana" color="#ffffff" size="6">Welcome <?php echo $_SESSION['mname']; ?> !</font><br>
<font face="Verdana, Verdana" color="#ffffff" size="2">This is an authorized area. Please LOGOUT and CLOSE this Window before you leave.<br>
> You last Logged in on : <?php echo$_SESSION['mtime'] ?> <br>
> Your emial id is <?php echo$_SESSION['memail'] ?> and phone number is <?php echo$_SESSION['mphno'] ?><br></font>
<font face="Verdana, Verdana" color="#ffffff" size="4">
<br>What would you like to do ?<br>
</font>
<a FONT class="type1" href="addtodatabase.php" TARGET="_top"><br>1. Publish to Placement Cell / Notice Board </a>
<a FONT class="type1" href="addtodatabase.php" TARGET="_top"><br>2. Delete </a>
<a FONT class="type1" href="contact.php" TARGET="_top"><br>3. Contact Administrator of MyITER</a>
<a FONT class="type1" href="logout.php" TARGET="_top"><br>4. Logout</a><br>
<font face="Verdana, Verdana" color="#ffffff" size="2">
<br><br>Click on the Links to proceed.<br><br>

</font>
</div>


</body>
