<?PHP
require_once 'header.php';
$proid=$_GET["pid"];
$profileid=$_SESSION['profileid'];

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query="SELECT * FROM `users` WHERE `id` = $proid";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$row = mysqli_fetch_array($result);
	$name1=$row['first_name'].' '.$row['last_name'];
	$year1=$row['year'];
	$branch1=$row['branch'];
	$email1=$row['email'];

$query="SELECT * FROM `profile` WHERE `id` = $proid";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	$row = mysqli_fetch_array($result);
	$birthday1=$row['birthday'];
	$interests=$row['interests'];
	$passion=$row['passion'];
	$club=$row['other_club'].' '.$row['iter_club'];
	$about=$row['about'];
	$objective=$row['objective'];
	$commendations=$row['commendations'];
	$training=$row['training'];
	$achieve_be=$row['achievement_be'];
	$achieve_de=$row['achievement_de'];
	$school=$row['school'];
	$plustwo=$row['plustwo'];
	$courses=$row['courses'];
	$sports=$row['sports'];
?>

<html>
<title>MyITER.co.in | <?PHP echo $name1 ?></title>
<body background="" style=" background-attachment: fixed; overflow-x:hidden;">


<div style="position: absolute; top:0px; left:0px; width:100%; height:200px; z-index: 1; overflow: visible;">
		
		<table height="100%" width="100%" background="/static/main/trans.png" bgcolor="" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>

<div id="bdy" class="comp" style="position:absolute; top:40px; left:8%; height:1000px; width:1000px; z-index:0; overflow: visible;">



<div id="bdy" class="comp" style="position:absolute; top:10px; left:0px; height:202px; width:200px; z-index:50; overflow: visible;">
	<div style="text-align:center;">
		<img src="/profile/create/upload_pic/thumbnail_<?php echo $proid; ?>.jpg">
		<br><font face="Verdana, Verdana" color="#333333" size="2">
		<br><b>Institute of Technical Education and Research, Bhubaneswar</b><br><br>
		<?php echo $plustwo.'<br>'.$school; ?>
		</font>
		<?php
		
		if($profileid==$proid)
		{
		
		echo'<form name="enroll" method="post" action="/profile/create/create.php"><br>
		<input type="submit" style="border: #339900 0px solid; background: #ffffff; width: 170px; height: 20px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Edit Profile" name="Edit Profile">
		</form>';
		}
		
		?>
		<br>
		<?php
		$query="SELECT * FROM `follow` WHERE `following` = $proid" ;
		$result=mysqli_query($dbc,$query);
		$row = mysqli_fetch_array($result);
		echo 'Followers ( '.sizeof($row).' ) <br> <br>';
		
		$query="SELECT * FROM `follow` WHERE `pid` = $proid" ;
		$result=mysqli_query($dbc,$query);
		$row = mysqli_fetch_array($result);
		echo 'Following ( '.sizeof($row).' ) <br> <br>';
		?>
		
    </div>
</div>




<div id="bdy" class="comp" style="position:absolute; top:10px; width:200px; left:930px; height:202px; z-index:50; overflow: visible;">

		<?php
		if($profileid!=$proid)
		{
		$redirect2 =$_SERVER["REQUEST_URI"];
		$youfollowing=0;
		$hefollowing=0;
		echo'<font face="Verdana, Verdana" color="#ffffff" size="2">';
		$query="SELECT * FROM `follow` WHERE `pid` = $profileid AND `following` = $proid LIMIT 1" ;
		$result=mysqli_query($dbc,$query)
		or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
		if(mysqli_num_rows($result) == 1)
		{
		 $youfollowing=1;
		}
		
		$query="SELECT * FROM `follow` WHERE `pid` = $proid AND `following` = $profileid LIMIT 1" ;
		$result=mysqli_query($dbc,$query)
		or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
		if(mysqli_num_rows($result) == 1)
		{
		 $hefollowing=1;
		}
		
		if($youfollowing==1 && $hefollowing == 1)
		{
		echo 'You Both are Connected <br>
		<form name="enroll" method="post" action="/profile/follow/unfollow.php?followid='.$proid.'&redirect2='.$redirect2.'"><br>
		<input type="submit" style="border: #339900 0px solid; background: #ffffff; width: 150px; height: 27px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Stop Following" name="Stop Following">
		</form>';
		}
		
		if($youfollowing==1 && $hefollowing == 0)
		{
		echo 'You are following<br>
		<form name="enroll" method="post" action="/profile/follow/unfollow.php?followid='.$proid.'&redirect2='.$redirect2.'"><br>
		<input type="submit" style="border: #339900 0px solid; background: #ffffff; width: 150px; height: 27px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Stop Following" name="Stop Following">
		</form>';
		}
		
		if($youfollowing==0 && $hefollowing == 1)
		{
		echo 'Is Following you <br> 
		<form name="enroll" method="post" action="/profile/follow/follow.php?followid='.$proid.'&redirect2='.$redirect2.'"><br>
		<input type="submit" style="border: #339900 0px solid; background: #ffffff; width: 150px; height: 27px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Follow Back" name="Follow Back">
		</form>';
		}
		
		if($youfollowing==0 && $hefollowing == 0)
		{
		
		
		echo'<form name="enroll" method="post" action="/profile/follow/follow.php?followid='.$proid.'&redirect2='.$redirect2.'"><br>
		<input type="submit" style="border: #339900 0px solid; background: #ffffff; width: 150px; height: 27px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Follow" name="Follow">
		</form>';
		}
		
		
		echo '</font>';
		
		
		}
		
		?>
</div>

<div id="bdy" class="comp" style="position:absolute; top:10px; left:230px; height:202px; z-index:50; overflow: visible;">
	<font face="Verdana, Verdana" color="#ffffff" size="7"><?PHP echo $name1 ?> <br></font>
	<font face="Verdana, Verdana" color="#ffffff" size="2">from <?PHP echo $branch1 ?>, <b><?PHP echo $year1; if($year1!="Faculty" && $year1!="Administrative" && $year1!="Passed Out"){ echo " Year"; }?></b> <?php if(strlen($birthday1)>3) { echo ", Born on $birthday1"; } ?><br>
	<?php if(strlen($interests)>3) { echo "Is interested in <b>$interests</b>.";} ?> <br>
	<?php if(strlen($passion)>3) { echo "Is Passionate about <b>$passion</b>.";} ?><br>
	<?php if(strlen($club)>2) { echo "Member of <b>$club</b>.";} ?>
	</font>
</div>

<div id="bdy" class="comp" style="position:absolute; top:170px; left:230px; height:202px; width:700px; z-index:50; overflow: visible;">
<font face="Verdana, Verdana" color="#333333" size="2">
<?php
if(strlen($about)>2)
{ echo '<br><b>About</b><br>'.$about.'<br>'; }

if(strlen($objective)>2)
{ echo '<br><b>Is into Engineering because</b><br>'.$objective.'<br>'; }

if(strlen($commendations)>2)
{ echo '<br><b>Has Been Awarded</b><br>'.$commendations.'<br>'; }

if(strlen($training)>2)
{ echo '<br><b>Industrial Tranings / Internships </b><br>'.$training.'<br>'; }


if(strlen($achieve_be)>2)
{ echo '<br><b>Achievements Before Engineering.</b><br>'.$achieve_be.'<br>'; }

if(strlen($achieve_de)>2)
{ echo '<br><b>Achievements During Engineering.</b><br>'.$achieve_de.'<br>'; }

if(strlen($courses)>2)
{ echo '<br><b>Technologies Known.</b><br>'.$courses.'<br>'; }

if(strlen($sports)>2)
{ echo '<br><b>Sports.</b><br>'.$sports.'<br>'; }



 ?>
 </font>
 





</div>