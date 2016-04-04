<?php
//barcode
session_start();

$number=$_SESSION['tmid'];
$name1=$_SESSION['n1'];
$name2=$_SESSION['n2'];
$coll1=$_SESSION['c1'];
$coll2=$_SESSION['c2'];
$tkt=$_SESSION['tktno'];


// First call to imagecolorallocate is the background color

$barcode_font = 'FREE3OF9.TTF';
$plain_font='verdana.ttf';





$filename="ticket.png";
$my_img = imagecreatefrompng ($filename );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_colour = imagecolorallocate( $my_img, 0, 0, 0 );
$line_colour = imagecolorallocate( $my_img, 0, 0, 0 );
$white = imagecolorallocate($my_img, 255, 255, 255);
$black = imagecolorallocate($my_img, 0, 0, 0);


imagestring( $my_img, 10, 50, 130, "TEAM ID : $number", $text_colour );
imagestring( $my_img, 10, 50, 150, "Name  : $name1", $text_colour );
imagestring( $my_img, 10, 50, 170, "College : $coll1", $text_colour );
imagestring( $my_img, 10, 50, 190, "Partner's Name : $name2", $text_colour );
imagestring( $my_img, 10, 50, 210, "Partner's College : $coll2", $text_colour );
imagestring( $my_img, 10, 50, 230, "Ticket No : $tkt", $text_colour );
//bar
imagettftext($my_img, 30, 0, 500, 280, $black, $barcode_font, $number);
imagettftext($my_img, 7, 0, 540, 290, $black, $plain_font, $number);

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
?>