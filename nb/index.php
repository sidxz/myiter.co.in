<?PHP
require_once '../header.php';

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
?>

<html>
<body>
<div style="position: absolute; top:0px; left:0px; width:100%; height: 150px; z-index: 1; overflow: visible;">
		
		<table height="100%" width="100%"  bgcolor="#eceff5" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>

</div>
<div style="position: absolute; top:50px; left:50px; width:800px; height: 100px; background-color: null; z-index:5200; overflow: visible; FONT-SIZE: 60px; ">
<font face="Verdana, Verdana" color="#0e1f5b">Official</font>
<font face="Verdana, Verdana" color="#339900">Notice Board</font>
</div>


<div class="comp" style="position:absolute; left:0px; width:100%; height:2200px;  top:170px; z-index:1000; border:none">  
	<div style="text-align:center;">
	  <IFRAME name="iframe" id="bod" src="body.php?opid=<?PHP echo $opid; ?>" allowTransparency="true" width="1200" height="2200" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>
	</div>
</div>

</html>
</body>