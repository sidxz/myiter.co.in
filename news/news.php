<?PHP
require_once '../header.php';
$pid=$_GET['pid'];
?>

<html>

<body>
<style>
<!--




A.type3:link    {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:visited {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:active  {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:hover   {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:underline;}
//-->
</style>
<div style="position: absolute; top:10px; left:0px; width:100%; height: 150px; z-index: 1; overflow: visible;">
		
		<table height="100%" width="100%"  bgcolor="#eceff5" background="bar.jpg" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>

</div>
<div style="position: absolute; top:50px; left:50px; width:800px; height: 100px; background-color: null; z-index:500; overflow: visible; FONT-SIZE: 60px; ">

<font face="Verdana, Verdana" color="#ffffff"> Top Stories</font>
</div>

<div style="position:absolute; top:136px; left:15%; height:36px; width:400px; z-index:520; overflow: visible; color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;">
<FONT color="#FFFFFF" face="Verdana, Verdana" size=2>

<a FONT class="type2" href="/news" TARGET="_top">News Home</a> 


</FONT>
</div>



<div class="comp" style="position:absolute; left:0px; width:100%; height:1300px; top:180px; z-index:1000; border:none">  
	<div style="text-align:center;">
	  <IFRAME name="iframe" src="reader.php?id=<?php echo $pid; ?>" allowTransparency="true" width="1100" height="1300" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>
	</div>
</div>
<div style="position:absolute; top:1400px; left:0px; width:100%; height: 150px; z-index: 1; overflow: visible;">
		
		<table height="100%" width="100%"  bgcolor="#eceff5" background="bar.jpg" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>
</div>

<div id="bottom_text" style="position:absolute; top:1420px; Right:20px; width: 70%; height: 40px; z-index: 1110; overflow: visible; line-height:25px;">
<div style="text-align:right;">
  	<a FONT class="type3" href="http://localhost/home.php" TARGET="_top">Be a Reporter</a>.<br>
	<a FONT class="type3" href="http://localhost/home.php" TARGET="_top">Journalism</a>.<br>
	<a FONT class="type3" href="http://localhost/home.php" TARGET="_top">Legal issues</a>.<br>
</div>
</div>


</body>
</html>