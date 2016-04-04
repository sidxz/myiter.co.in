<?php
session_start();
$redirect = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
if(!isset($_SESSION['email']))
{
header('location: '."/index.php?redirect=http://".$redirect);
}


?>
<html>


<body style="background-color:transparent;">


<div style="position:absolute; top:0px; left:0px; height: 36px; width:100%; z-index: 100; overflow: visible;">
<table height="100%" width="100%" background="/static/main/bar.png" bgcolor="#000000">
<tr><td></td></tr>
</table>
</div>

<div style="position:absolute; top:2px; left:10%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<a href="/home.php"><img src="/static/main/logo_small.png"></a>
</div>

<style>
<!--

A.type2:link    {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:hover   {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:underline;}

//-->
</style>



<div style="position:absolute; top:9px; left:25%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<FONT color="#FFFFFF" face="Verdana, Verdana" size=2>

<a FONT class="type2" href="/home.php" TARGET="_top">Home</a>&#160; &#124; &#160 
<a FONT class="type2" href="/profile.php?pid=<?php echo $_SESSION['profileid']; ?>" TARGET="_top">Profile</a>&#160; &#124; &#160;
<a FONT class="type2" href="/adddb" TARGET="_TOP">Database</a>&#160; &#124; &#160;
<!--<a FONT class="type2" href="/search/search.php?usersearch=&sort=2&Search=Go!" TARGET="_top">Search Database</a>&#160; &#124; &#160 -->
<a FONT class="type2" href="/sc" TARGET="_TOP">Students Corner</a>&#160; &#124; &#160;
<a FONT class="type2" href="/pcell" TARGET="_TOP">Placement Cell</a>&#160; &#124; &#160;
<a FONT class="type2" href="/research" TARGET="_TOP">Evoked Potentials</a>


</FONT>
</div>
<div style="position:absolute; top:9px; right:20px; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<FONT color="#FFFFFF" face="Verdana, Verdana" size=2>
<?php echo $_SESSION['email']; ?>&#160; &#124; &#160;
<a FONT class="type2" href="/account/logout.php" TARGET="_top">logout</a>



</FONT>
</div>





</body>
</html>