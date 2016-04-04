<?PHP
require_once 'header.php';
?>
<html>
<head>
<style>
<!--


A.type3:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:hover   {color:#0e1f5b; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:underline;}
//-->
</style>
<title> Developer | Edit Posts</title>
</head>
<body>

<div style="position: absolute; top:120px; left:80px; width: 650px; height: 133px; z-index: 10; overflow: visible;">
<font face="Verdana, Verdana" color="#990066" size="3"><b>Select a post</b></font>
</div>
<font color="#0e1f5b" size="3"  face="Verdana">
<?PHP


echo' <div style="position: absolute; top:150px; left:80px; width: 900px; height: 133px; z-index: 10; line-height:35px; overflow: visible;">';
$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query ="SELECT *FROM `t_main` WHERE `authorization` =0 ORDER BY time ASC";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	while($row = mysqli_fetch_array($result))
	{
	echo '<a FONT class="type3" href="editdatabase.php?id='.$row["pid"].'">'.$row["topic"].'</a> <b>( '.$row["type"].' ) </b> by <b>'.$row["postedby"].'</b> on '.$row["time"].'<br>';
	}
	echo ' No more posts needs moderation ...';
	
	
echo '</div>';	
?>

