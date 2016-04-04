<?PHP
session_start();
include "fun.php";
$udf = &New fun;
$_session=array();


 //$dbc = mysqli_connect('localhost','dharohar_bot','_fT$-8b9uC_X','dharohar_dbase')
 //or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$dbc = mysqli_connect('localhost','myiter_srishti','I3J@w(4XV1P7','myiter_srishtiwrk')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');



$photomania=" ";
$webosis=" ";
$mediacove=" ";
$cadiology=" ";

$name=$_POST["name"];
$num=$_POST["num"];
$mail=$_POST["mail"];
$mail1=$_POST["mail1"];
$year=$_POST["year"];
$photomania=$_POST["photomania"];
$webosis=$_POST["webosis"];
$mediacove=$_POST["mediacove"];
$cadiology=$_POST["cadiology"];



$ip=GetHostByname($_SERVER['REMOTE_ADDR']);

if ( $udf->isvalid($name) == 1 && $udf->isvalid($num) == 1 && $udf->isvalid($mail) == 1 && $udf->isvalid($year) == 1 && $udf->isvalid($mail1) == 1 )
{

$name=mysqli_real_escape_string($dbc,$name);
$num=mysqli_real_escape_string($dbc,$num);
$mail=mysqli_real_escape_string($dbc,$mail);
$mail1=mysqli_real_escape_string($dbc,$mail1);
// TICKET NO GENERATION

$query ="SELECT * FROM `workshop` ORDER BY id DESC LIMIT 1";
$result=mysqli_query($dbc,$query)
or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 160 ");
$row = mysqli_fetch_array($result);
$ticket = $row['id'];
$ticket=$ticket+1;
//echo $ticket;


// GENERATION OF TEAM ID

$teamid='202011';
$ticket2=$ticket+111;
$stkt='ITER'.$ticket2;
$ttkt=$ticket+1000;
$teamid=$teamid.$ttkt;

//echo $teamid;

$query="INSERT INTO `myiter_srishtiwrk`.`workshop` (`id`, `name`, `number`, `mail`, `year`, `p`, `w`, `m`, `c`) VALUES 
			(NULL, '$name', '$num', '$mail', '$year', '$photomania', '$webosis', '$mediacove', '$cadiology')";
mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 162 ");
$_SESSION['tmid']=$teamid;
$_SESSION['n1']=$name;
$_SESSION['n2']=$num;
$_SESSION['c1']=$mail;
$_SESSION['c2']=$year;
$_SESSION['tktno']="$photomania $webosis $mediacove $cadiology";

echo '<font face="Verdana, Verdana" color="#8e8c88" size="4">';
echo '<br> You Have Registered Successfully..<br> </font>
		<br> <img src="generate.php" width="0"> <img src="http://www.myiter.co.in/srishti/workshops/register/'.$teamid.'.png"> <br><br>
		<font face="Verdana, Verdana" color="red" size="4"><b>IMPORTANT</b><br></font><br>
		<font face="Verdana, Verdana" color="#8e8c88" size="4">
		<b> DO NOT REFRESH THE PAGE </b><br>
		<b>Please Save the registration slip ( Right Click on it ->  Save Picture as ) and then take a printout. 
		<br> If The IMAGE is NOT displayed properly, Right click on the image and press "RELOAD IMAGE"
		<br>YOU CAN ALSO FIND THE SAME IMAGE (REGISTRATION SLIP IN YOUR MAIL ID)<br>
		You will require a hard copy of this slip for the event.</b><br><br>
		The hall ticket has also been mailed to '.$mail1.' and '.$mail2.' (please check your junk email box if it is not found in your inbox ) <br>
		<b>Duplicate Registration Slips will NOT be issued.</b><br>
		For any further quires please visit us at www.myiter.co.in/srishti or mail us at care@myiter.co.in or contact the event coordinators. 	
	
		</font>';

// mail dbase backup

$email_to = 'srishti.soa@gmail.com';
$email_subject = 'REGISTRATION :'.$teamid;
$email_body = "$teamid $name $num $mail $year $photomania $webosis $mediacove $cadiology" ;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($email_to, $email_subject, $email_body, $headers);
//mail

$email_subject = 'SRISHTI Workshop Registration Details';
$email_body = 'Institute of Technical Education and Research<br><br>
Your team id is : '.$teamid.' <br>
------------ REGISTRATION SLIP ------- <br> <br>
<br> <br> <img src="http://www.myiter.co.in/srishti/workshops/register/'.$teamid.'.png"><br>

-----  END  ----------- <br><br>
If the REGISTRATION SLIP is not displayed Please Click on "Display images below",  ( your mail might be blocking images). <br><br>'."

 

<br><br>
<b> Thank you </b> <br><br><br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($mail1, $email_subject, $email_body, $headers);





}

else
{
echo '<font face="Verdana, Verdana" color="#8e8c88" size="4">';
echo "All fields are Compulsary!! <br> Please Retry filling all the text boxes <br> If you still encounter the problem you may have used super special characters which are not accepted<br> try removing them  "; 
}

?>
