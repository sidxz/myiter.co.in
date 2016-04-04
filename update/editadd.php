<?PHP
require_once 'header.php';


$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

if ((isset($_POST["topic"]) && isset($_POST["summary"]) && isset($_POST["textarea1"]))&& strlen($_POST["topic"])>>1)
 {
	$topic=$_POST["topic"];
	$sum=$_POST["summary"];
	$des=$_POST["textarea1"];
	$cat=$_POST["category"];
	$ip=GetHostByname($_SERVER['REMOTE_ADDR']);
	$prank=1;
	$by=$_GET["by"];
	$aby=$_SESSION['officerseqlog'];
	
	$query="INSERT INTO `myiter_database`.`main` (`pid`, `type`, `topic`, `summary`, `details`, `postedby`, `time`, `authorizedby`, `validation`, `pagerank`)
	VALUES (NULL, '$cat', '$topic', '$sum', '$des', '$by', CURRENT_TIMESTAMP, '$aby', '0', '10')";
	$result=mysqli_query($dbc,$query);
	$url="home.php";
	echo '<meta http-equiv="refresh" content="5;url='.$url.'" />';
	echo ' <div style="position: absolute; top:350px; left:30px"> 
		<font face="Verdana, Verdana" color="#0e1f5b" size="3">
		Added Successfully ... You will be redirected to home page shortly ...<br><br> 
			DO NOT refresh / reload this page <br>
			If you are not redirected click on the logo at the top left corner.</font></div>';
	
	}
	
	else
	{
	echo ' <div style="position: absolute; top:150px; left:30px"> 
		<font face="Verdana, Verdana" color="#ed4503" size="4">
		<b>Failed .. (You May NOT have entered a topic </b>If the problem continues for you, please contact the admin.<br>
		to prevent loss of data please copy the contents you have entered.</font><font face="Verdana, Verdana" color="#0e1f5b" size="2"><br>'.$_POST["topic"].'<br>'.$_POST["summary"].'<br>'.$_POST["textarea1"].'</font></div>';
	
	}
?>