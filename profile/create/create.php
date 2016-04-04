<?PHP
require_once '../../header.php';


$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
$proid=$_SESSION['profileid'];
$query="SELECT * FROM `profile` WHERE `id` = $proid";

$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	if(mysqli_num_rows($result) == 0)
	{
	$query="INSERT INTO `myiter_database`.`profile` (`slno`, `id`, `about`, `objective`, `gender`, `birthday`, `languages`, `school`, `plustwo`, `company`, `achievement_be`, `achievement_de`, `interests`, `passion`, `commendations`, `training`, `courses`, `sports`, `iter_club`, `other_club`, `new`, `other_involvement`, `follow`, `music`, `movies`, `tv`, `books`, `games`, `phno`, `email`, `fb`, `twitter`, `linkedin`, `regno`) VALUES (NULL, '$proid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	}

?>
<html>
<title>MyITER.co.in</title>
<body background="" style=" background-attachment: fixed; overflow-x:hidden;">


<div style="position: absolute; top:0px; left:0px; width:100%; height:100px; z-index: 1; overflow: visible;">
		
		<table height="100%" width="100%"  bgcolor="#eceff5" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>

</div>


<div style="position: absolute; top:50px; left:150px; width:800px; height: 100px; background-color: null; z-index:200; overflow: visible; FONT-SIZE: 30px; ">
<font face="Verdana, Verdana" color="#0e1f5b"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></font>
<font face="Verdana, Verdana" color="#339900">> Edit Profile</font>
</div>


<div class="comp" style="position:absolute; width:200px; left:100px; height:1000px; top:100px; z-index:1000; border:none">  
	
	  <IFRAME name="iframe" src="left.php" allowTransparency="true" width="200"  height="1000" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>

</div>


<div class="comp" style="position:absolute; width:800px; height:1000px; left:315px; top:120px; z-index:1000; border:none">  
	
	  <IFRAME name="center" id="center" src="basic.php" allowTransparency="true" width="800" height="1000"  align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>

</div>
