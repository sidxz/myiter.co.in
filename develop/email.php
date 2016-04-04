<?php 

$em=$_POST["mail"];
$num=$_POST["num"];

$n=$_POST["name"];

$yr=$_POST["year"];
$br=$_POST["branch"];

$email_to = "sidhs1991@live.com";
$email_subject = "JOURNALISM";
$email_body = $n.' '.$num.' '.$em.' '.$yr.' '.$br;

echo '<font face="Verdana, Verdana" color="#444444" size="3">';
if(mail($email_to, $email_subject, $email_body)){
	echo 'Thank You For Regestring! We will Get back to you soon!';
} else {
	echo "Oopz Server Busy .... Please Try Again Later ....";
}
?>
