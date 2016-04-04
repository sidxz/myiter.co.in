<html>
<body style="background-color:transparent;">
<style>
<!--


A.type3:link    {color:#003366; FONT-FAMILY: verdana; FONT-SIZE: 16px; line-height:13px; font-weight:bold;  text-decoration:none; line-height:20px;}
A.type3:visited {color:#003366;FONT-FAMILY: verdana; FONT-SIZE: 16px; line-height:13px; font-weight:bold; text-decoration:none; line-height:20px;}
A.type3:active  {color:#003366;FONT-FAMILY: verdana; FONT-SIZE: 16px; line-height:13px; font-weight:bold; text-decoration:none; line-height:20px;}
A.type3:hover   {color:#990066; FONT-FAMILY: verdana; FONT-SIZE: 16px; line-height:13px; font-weight:bold; text-decoration:underline; line-height:20px;}
//-->
</style>
<font face="Verdana, Verdana" color="#339900" size="6"><i>Recently Posted</i></font>

<?php

echo' <div style="border-right: 0px solid #cccccc; position: absolute; top:55px; left:0px; width:275px; height: 700px; z-index: 10; line-height:30px; overflow: visible; ">';
$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query ="SELECT *FROM `main` WHERE `type` LIKE 'story' ORDER BY time DESC LIMIT 15";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	while($row = mysqli_fetch_array($result))
	{
	echo '<a FONT class="type3" href="index.php?id='.$row["pid"].'" target="_top">'.$row["topic"].'</a><br><font size="2"> by <b>'.$row["postedby"].'</b> on '.date('d M Y', strtotime($row["time"])).'</font><br>';
	}
?>
	
