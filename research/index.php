<?PHP
require_once '../header.php';


if(!isset($_GET['id']))
{



$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query ="SELECT * FROM `main` WHERE `type` LIKE 'research' ORDER BY pid DESC LIMIT 1";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$id=$row[pid];
	
	}
}
else
{
$id=$_GET['id'];
}
?>

<html>
<head>
<title> MyITER | Evoked Potentials </title>
</head>

<body>
<style>
<!--




A.type3:link    {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:visited {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:active  {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:hover   {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:underline;}
//-->
</style>
<div style="position: absolute; top:10px; left:0px; width:100%; height: 180px; z-index: 1; overflow: visible;">
		
		<table height="100%" width="100%"  bgcolor="#eceff5" background="/static/main/research.jpg" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>

</div>
<div style="position: absolute; top:70px; right:50px; width:550px; height: 400px; background-color: null; z-index:10; overflow: visible; FONT-SIZE: 60px; ">

<font face="Verdana, Verdana" color="#ffffff">Evoked Potentials</font>
</div>
<div style="position: absolute; top:165px; right:45px; width:550px; height: 400px; background-color: null; z-index:10; overflow: visible; FONT-SIZE: 17px; ">
<font face="Verdana, Verdana" color="#ffffff">Somewhere Something Incredible is Waiting to be Known.</font>
</div>
<style>
<!--

A.type2:link    {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:hover   {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:underline;}

//-->
</style>




<div class="comp" style="position:absolute; left:0px; width:100%; height:7200px;  top:210px; z-index:1000; border:none">  
	<div style="text-align:center;">
	  <IFRAME name="iframe" id="bod" src="body.php?id=<?PHP echo $id; ?>" allowTransparency="true" width="1200" height="7200" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>
	</div>
</div>



<!--
<div style="position:absolute; top:1400px; left:0px; width:100%; height: 100px; z-index: 1; overflow: visible;">
		
		<table height="100%" width="100%"  bgcolor="#eceff5" background="bar.jpg" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>
</div>

<div id="bottom_text" style="position:absolute; top:1420px; Right:20px; width: 70%; height: 40px; z-index: 1110; overflow: visible; line-height:25px;">
<div style="text-align:right;">
  	<a FONT class="type3" href="http://localhost/home.php" TARGET="_top">Be a Reporter</a>.<br>
	<a FONT class="type3" href="http://localhost/home.php" TARGET="_top">Journalism</a>.<br>
	<a FONT class="type3" href="http://localhost/home.php" TARGET="_top">Legal issues</a>.<br>
</div>
</div>
-->

</body>
</html>