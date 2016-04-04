<?php
include "../security/info.php";
$sec = New info();
?>
<html>
<head>

	<title>Shell</title>
</head>

<body bgcolor="#0e1f5b">

	
<div style="position:absolute; top:2px; right:1%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<img src="../static/main/logo_small.png">
</div>	
<div style="position:absolute; top:2px; left:0%; height: 100px; width=:600px; z-index: 102; overflow: visible;">
<font color="#ffffff" size=4 face="Verdana, Verdana">
<?php $sec->dispinfo() ?>
</font>
</div>
<div  style="position:absolute; bottom:1%;" link="color:white">

<font color="#dd3c10" size=5 face="Verdana, Verdana">
         <br>Possible SQL INJECTION Detected<br>
	</font>

<font color="#ffffff" size=4 face="Verdana, Verdana">
You May Have entered Invalid Characters such as ( " ' ` ; : * ) which are not accepted by the respective text fields<br>
Please try removing those special characters.<br>
If you feel you have come across this page wrongly please Mail this to sidhs1991@live.com
