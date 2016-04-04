<?PHP
require_once '../iheader.php';
?>
<html>
<body style="background-color:transparent;">

<?PHP

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');


if(!isset($_GET['opid']))
{
$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query ="SELECT * FROM `official` WHERE `type` LIKE 'nb' ORDER BY opid DESC LIMIT 1";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	echo $opid."sdhfced";
	while($row = mysqli_fetch_array($result))
	{
	$opid=$row[opid];
	echo $opid."sdhfced";
	}


}
else
{
$opid=$_GET['opid'];
}



$query ="SELECT * FROM `official` WHERE `opid` = '$opid' ";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	$row=mysqli_fetch_array($result);


?>
<div style="position: absolute; left:0px; width:600px; z-index: 10; line-height:30px; overflow: visible;">
<font face="Verdana, Verdana" color="#0e1f5b" size="6"><?PHP echo $row['topic']; ?> <br></font>
<div style="text-align:center;">
<font size="2">
by <b><?PHP echo $row["postedby"]; ?> </b> on <?PHP echo date('d M Y', strtotime($row["time"])); ?>  <br>
</font>
</div>


<font face="Verdana, Verdana" color="#000000" size="3"><?PHP echo $row['details']; ?> <br></font>
</div>