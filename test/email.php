<?php 
$sec=rand(100000, 999999);
$email_to = "siddhantrath@gmail.com";
$email_subject = "Test E-Mail (This is the subject of the E-Mail)";
$email_body = 'Your Secret number is '.$sec.'.';


if(mail($email_to, $email_subject, $email_body)){
	echo "The email($email_subject) was successfully sent.";
} else {
	echo "The email($email_subject) was NOT sent.";
}
?>
