<?PHP
require_once '../iheader.php';
?>
<?php
session_start();
$pid=$_GET['pid'];
$likeit=$_GET['like'];
$email=$_SESSION['email'];
$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

echo '<font face="Verdana, Verdana" size="2"  color="#000000">';
if($likeit==1)
{
$query ="INSERT INTO `myiter_database`.`pagerank` (`slno`, `postid`, `likedby`) VALUES (NULL, '$pid', '$email')";
$result=mysqli_query($dbc,$query);

$query ="SELECT * FROM `main` WHERE `pid` ='$pid'";
$result=mysqli_query($dbc,$query);
$row = mysqli_fetch_array($result);
$inc=$row['pagerank']+1;

$query ="UPDATE `myiter_database`.`main` SET `pagerank` = '$inc' WHERE `main`.`pid` ='$pid' LIMIT 1" ;
$result=mysqli_query($dbc,$query);
}





$count=0;
$like=0;

$query ="SELECT * FROM `pagerank` WHERE `postid` ='$pid'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
		$count++;
		
		if($email==$row['likedby'])
		{
		$like=1;
		}
	
	}
	
	if($like==0)
	{
	echo '<a href="/class/like.php?pid='.$pid.'&like=1"> LIKE </a> | '.$count.' Persons like this |';
	}
	
	
	if($like==1)
	{
	$count--;
	echo 'You and '.$count.' other person likes this';
	}
	
	echo '</font>'
	?>