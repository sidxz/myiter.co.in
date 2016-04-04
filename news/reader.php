<?PHP
require_once '../iheader.php';
?>
<?php
$id=$_GET['id'];
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


echo '<div class="comp" style="position:absolute; left:0px; width:100%; height:1000px;  top:0px; z-index:10; border:none; line-height:25px">';
	
	$query ="SELECT * FROM `main` WHERE `pid` ='$id'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	$row = mysqli_fetch_array($result);
	
	
	$head=$row['topic'];
	$sum=$row['summary'];
	$det=$row['details'];
	$by=$row['postedby'];
	$time=$row['time'];
	
	
	echo'<a FONT class="type2" href="/news" target="_parent">'.$head.'<br><br></a>';
	echo'<font face="Verdana, Verdana" size="2"  color="#000000">  by '.$by.' on '.date('d M Y', strtotime($time)).' | <IFRAME name="iframe" src="/class/like.php?pid='.$id.'&like=0" allowTransparency="true" width="300" height="20" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME><br><br></font>';
	echo'<font face="Verdana, Verdana" size="2"  color="#666666">'.$sum.'<br><br></font>';
	echo'<font face="Verdana, Verdana" size="2"  color="#000000">'.$det.'<br></font>';
	
?>




<font face="Verdana, Verdana" size="2"  color="#666666">
<br>

</font>
</div>
</div>
</div>


</body>
</html>