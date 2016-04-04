<?php
session_start();
if(!isset($_SESSION['quasistatic']))
{
header('location: '."index.php");
}
include "../security/info.php";
$sec = New info();

?>






<div style="position:absolute; top:2px; left:0px; height: 100px; width:100%; z-index: 100; overflow: visible;">
<table height="100%" width="100%"  bgcolor="#0e1f5b">
<tr><td></td></tr>
</table>
</div>

<div style="position:absolute; top:2px; right:0px; height: 36px; width:120px; z-index: 102; overflow: visible;">
<a FONT class="type2" href="home.php" TARGET="_top"><img src="/static/main/logo_small.png"></a> 
</div>

<style>
<!--

A.type2:link    {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:hover   {color:#FFFFFF; FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:13px; font-weight:bold; text-decoration:underline;}

//-->
</style>



<div style="position:absolute; top:11px; left:0px; height:100px; width:600px; z-index: 102; overflow: visible;">
<FONT color="#FFFFFF" face="Verdana, Verdana" size="2">

<?php $sec->dispinfo() ?>

</FONT>
</div>
<div style="position:absolute; top:11px; right:200px; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<FONT color="#FFFFFF" face="Verdana, Verdana" size=2>
<a FONT class="type2" href="logout.php" TARGET="_top">logout</a>
</FONT>
</div>






