<?PHP
require_once '../../iheader.php';
?>
<html>
<body  style="background-color:transparent;">

<?PHP

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');


if(!isset($_GET['id']))
{

$id=1;
}
else
{
$id=$_GET['id'];
}



$query ="SELECT * FROM `main` WHERE `pid` = '$id'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	$row=mysqli_fetch_array($result);


?>
<div style="position: absolute; left:0px; width:600px; z-index: 10; line-height:30px; overflow: visible;">
<font face="Verdana, Verdana" color="#0e1f5b" size="6"><?PHP echo $row['topic']; ?> <br></font>
<div style="text-align:center;">
<font size="2">
by <b><?PHP echo $row["postedby"]; ?> </b> on <?PHP echo date('d M Y', strtotime($row["time"])); ?>  <br> </font> <font size="3"> 


	  <IFRAME name="iframe" src="/class/like.php?pid=<?php echo $id; ?>&like=0" allowTransparency="true" width="300" height="20" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>
	


<br>
</font>
</div>

<font face="Verdana, Verdana" color="#666666" size="3"><i><?PHP echo $row['summary']; ?></i> <br></font>

<font face="Verdana, Verdana" color="#000000" size="3"><?PHP echo $row['details']; ?> <br></font>
</div>