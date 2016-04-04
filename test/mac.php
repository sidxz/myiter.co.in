<?php
/*
* Getting MAC Address using PHP
* Md. Nazmul Basher
*/
ob_start(); // Turn on output buffering
 system('ipconfig'); //Execute external program to display output
 $mycom=ob_get_contents(); // Capture the output into a variable
 echo $mycom;
 ob_clean(); // Clean (erase) the output buffer

?>