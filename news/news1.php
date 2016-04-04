<?PHP
require_once '../iheader.php';
?>
<html>
<body style="background-color:transparent;">

<style>
<!--



A.type1:link    {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:hover   {color:#0099FF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px;text-decoration:underline;}

A.type2:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;  text-decoration:none;}
A.type2:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;   text-decoration:none;}
A.type2:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;   text-decoration:none;}
A.type2:hover   {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;  text-decoration:underline;}

A.type3:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:hover   {color:#990066; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:underline;}
//-->
</style>

<?PHP

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');



	
	$query ="SELECT * FROM `main` WHERE `type` LIKE 'news' ORDER BY pid DESC LIMIT 0 , 5";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	
	$news1sum=$row['summary'];
	
	echo'<a FONT class="type2" href="news.php?pid='.$row['pid'].'" target="_parent">'.$row['topic'].'<br></a>';
	echo'<font face="Verdana, Verdana" size="2"  color="#666666">'.$row['summary'].'<br></font>';
	}
	
	
	echo'<br><br><font face="Verdana, Verdana" color="#339900" size="6">Events and Alerts</font><br>';
	
	$query ="SELECT * FROM `main` WHERE `type` LIKE 'event' ORDER BY pid DESC LIMIT 0 , 5";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	
	$news1sum=$row['summary'];
	
	echo'<a FONT class="type2" href="">'.$row['topic'].'<br></a>';
	echo'<font face="Verdana, Verdana" size="2"  color="#666666">'.$row['summary'].'<br></font>';
	}
	
?>




<font face="Verdana, Verdana" size="2"  color="#666666">
<br>

</font>
</div>
</div>
</div>


</body>
</html>