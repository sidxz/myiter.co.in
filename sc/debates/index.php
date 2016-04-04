<?PHP
require_once '../../header.php';


if(!isset($_GET['id']))
{

$id=1;
}
else
{
$id=$_GET['id'];
}
?>

<html>
<head>
<title> MyITER | Students Corner </title>
</head>

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
		
		<table height="100%" width="100%"  bgcolor="#eceff5" background="../bar.jpg" border="0" bordercolor="#ffffff">
<tr><td></td></tr>
</table>

</div>
<div style="position: absolute; top:50px; left:50px; width:800px; height: 400px; background-color: null; z-index:10; overflow: visible; FONT-SIZE: 60px; ">

<font face="Verdana, Verdana" color="#ffffff">Students Corner</font>
</div>

<style>
<!--

A.type2:link    {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:hover   {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:underline;}

//-->
</style>


<div style="position:absolute; top:134px; left:20%; height: 36px; width=:40px; z-index: 120; overflow: visible;">
<FONT color="#FFFFFF" face="Verdana, Verdana" size=2>

<a FONT class="type2" href="/sc" TARGET="_top">Home</a>&#160; &#124; &#160
<a FONT class="type2" href="/sc/general/" TARGET="_top">General</a>&#160; &#124; &#160;
<a FONT class="type2" href="/sc/debates/" TARGET="_top">Debates</a>&#160; &#124; &#160;

<a FONT class="type2" href="/sc/stories/" TARGET="_top">Stories</a>&#160; &#124; &#160;
<a FONT class="type2" href="/sc/poems/" TARGET="_top">Poems</a>&#160; &#124; &#160;
<a FONT class="type2" href="/sc/links/" TARGET="_top">Links and Downloads</a>&#160; &#124; &#160;
<a FONT class="type2" href="/sc/faking/" TARGET="_top">Faking News</a>

</FONT>
</div>




<div class="comp" style="position:absolute; left:0px; width:100%; height:2200px;  top:170px; z-index:1000; border:none">  
	<div style="text-align:center;">
	  <IFRAME name="iframe" id="bod" src="body.php?id=<?PHP echo $id; ?>" allowTransparency="true" width="1200" height="2200" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>
	</div>
</div>



<!--
<div style="position:absolute; top:1400px; left:0px; width:100%; height: 100px; z-index: 1; overflow: visible;">
		
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
-->

</body>
</html>