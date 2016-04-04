<?PHP
session_start();
include "fun.php";
$udf = &New fun;
$_session=array();


 $dbc = mysqli_connect('localhost','dharohar_bot','_fT$-8b9uC_X','dharohar_dbase')
 or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

//$dbc = mysqli_connect('localhost','myiter_admin','Papani```','dharohar_dbase')
//or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');


$name1=$_POST["name"];
$year1=$_POST["year"];
$sex1=$_POST["sex"];
$coll1=$_POST["college"];
$city1=$_POST["city"];
$phone1=$_POST["phno"];
$mail1=$_POST["mail"];

$name2=$_POST["name2"];
$year2=$_POST["year2"];
$sex2=$_POST["sex2"];
$coll2=$_POST["college2"];
$city2=$_POST["city2"];
$phone2=$_POST["phno2"];
$mail2=$_POST["mail2"];




$ip=GetHostByname($_SERVER['REMOTE_ADDR']);

if ( $udf->isvalid($name1) == 1 && $udf->isvalid($name2) == 1 && $udf->isvalid($coll1) == 1 && $udf->isvalid($coll2) == 1 && $udf->isvalid($city1) == 1 && $udf->isvalid($city2) == 1 && $udf->isvalid($phone1) == 1  && $udf->isvalid($phone2) == 1  && $udf->isvalid($mail1) == 1  && $udf->isvalid($mail2) == 1)
{

$name1=mysqli_real_escape_string($dbc,$name1);
$year1=mysqli_real_escape_string($dbc,$year1);
$sex1=mysqli_real_escape_string($dbc,$sex1);
$coll1=mysqli_real_escape_string($dbc,$coll1);
$city1=mysqli_real_escape_string($dbc,$city1);
$phone1=mysqli_real_escape_string($dbc,$phone1);
$mail1=mysqli_real_escape_string($dbc,$mail1);

$name2=mysqli_real_escape_string($dbc,$name2);
$year2=mysqli_real_escape_string($dbc,$year2);
$sex2=mysqli_real_escape_string($dbc,$sex2);
$coll2=mysqli_real_escape_string($dbc,$coll2);
$city2=mysqli_real_escape_string($dbc,$city2);
$phone2=mysqli_real_escape_string($dbc,$phone2);
$mail2=mysqli_real_escape_string($dbc,$mail2);

// TICKET NO GENERATION

$query ="SELECT * FROM `teams` ORDER BY slno DESC LIMIT 1";
$result=mysqli_query($dbc,$query)
or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 160 ");
$row = mysqli_fetch_array($result);
$ticket = $row['slno'];
$ticket=$ticket+1;
//echo $ticket;


// GENERATION OF TEAM ID

$teamid='1116';
$ts1=7;
$ts2=7;
if($sex1=='f')
{
$ts1=9;
}
if($sex2=='f')
{
$ts2=9;
}

$tyr1=1;
$tyr2=1;

if($year1=='2')
{
$tyr1=2;
}
if($year1=='3')
{
$tyr1=3;
}
if($year1=='4')
{
$tyr1=4;
}

if($year2=='2')
{
$tyr2=2;
}
if($year2=='3')
{
$tyr2=3;
}
if($year2=='4')
{
$tyr2=4;
}
$ticket2=$ticket+111;
$stkt='ITER'.$ticket2;
$ttkt=1000+$ticket;
$teamid=$teamid.$ts1.$ts2.$tyr1.$tyr2.$ttkt;

//echo $teamid;

$query="INSERT INTO `dharohar_dbase`.`teams` (`slno`, `teamid`, `name1`, `year1`, `sex1`, `coll1`, `city1`, `phno1`, `mail1`, `name2`, `year2`, `sex2`, `coll2`, `city2`, `phno2`, `mail2`, `time`)
							  VALUES (NULL, '$teamid', '$name1', '$year1', '$sex1', '$coll1', '$city1', '$phone1', '$mail1', '$name2', '$year2', '$sex2', '$coll2', '$city2', '$phone2', '$mail2', CURRENT_TIMESTAMP)";

mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 162 ");
$_SESSION['tmid']=$teamid;
$_SESSION['n1']=$name1;
$_SESSION['n2']=$name2;
$_SESSION['c1']=$coll1;
$_SESSION['c2']=$coll2;
$_SESSION['tktno']=$ticket2;

echo '<font face="Verdana, Verdana" color="#8e8c88" size="4">';
echo '<br> You Have Registered Successfully..<br> </font>
		<br> <img src="generate.php" width="0"> <img src="'.$teamid.'.png"> <br><br>
		<font face="Verdana, Verdana" color="red" size="4"><b>IMPORTANT</b><br></font><br>
		<font face="Verdana, Verdana" color="#8e8c88" size="4">
		<b> DO NOT REFRESH THE PAGE </b><br>
		<b>Please Save the Hall Ticket ( Right Click on it ->  Save Picture as ) and then take a printout. <br>
		You will require a hard copy of your Hall Ticket and Your College Identity Card for the event.</b><br><br>
		The hall ticket has also been mailed to '.$mail1.' and '.$mail2.' (please check your junk email box if it is not found in your inbox ) <br>
		<b>Duplicate Hall tickets will NOT be issued.</b><br>
		For any further quires please visit us at www.dharohar.in or mail us at care@dharohar.in or contact the event coordinators. 	
	
		</font>';

// mail dbase backup

$email_to = 'bhubaneswar.intach@gmail.com';
$email_subject = 'REGISTRATION :'.$teamid;
$email_body = "$name1 $year1 $sex1 $coll1 $city1 $phone1 $mail1 $name2 $year2 $sex2 $coll2 $city2 $phone2 $mail2 $ip " ;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($email_to, $email_subject, $email_body, $headers);
//mail


$email_to = 'bhubaneswar.intach@gmail.com';
$email_subject = 'INTACH Bhubaneswar| Dharohar Registration Details';
$email_body = 'Institute of Technical Education and Research, SOAU Welcomes you to DHAROHAR <br><br>
Your team id is : '.$teamid.' <br>
------------ HALL TICKET ------- <br> <br>
<br> <br> <img src=http://www.dharohar.in/dharohar/register/'.$teamid.'.png><br>

-----  END OF TICKET ----------- <br><br>
If the Ticket is not displayed Please Click on "Display images below",  ( your mail might be blocking images). <br><br>'."

Details :<br> 
$name1 of $coll1, $city1 and $name2 of $coll2, $city2 <br>
Contact Details:<br>
$phone1 $mail1 $phone2 $mail2 <br> 

<br><br>
<b> All the best </b> <br><br><br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($mail1, $email_subject, $email_body, $headers);
mail($mail2, $email_subject, $email_body, $headers);




}

else
{
echo '<font face="Verdana, Verdana" color="#8e8c88" size="4">';
echo "All fields are Compulsary!! <br> Please Retry filling all the text boxes <br> If you still encounter the problem you may have used super special characters which are not accepted<br> try removing them  "; 
}

?>
