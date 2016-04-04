	
<?php
include "../security/info.php";
$sec = New info();
?>
<script language=JavaScript>
<!--

//Disable right mouse click Script
//By Maximus (maximus@nsimail.com) w/ mods by DynamicDrive
//For full source code, visit http://www.dynamicdrive.com



///////////////////////////////////
function clickIE4(){
if (event.button==2){

return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){

return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false")

// --> 
</script>
<html>
<head>
<script type="text/javascript">

/***********************************************
* Disable "Enter" key in Form script- By Nurul Fadilah(nurul@REMOVETHISvolmedia.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
                
function handleEnter (field, event) {
		var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
		if (keyCode == 13) {
			var i;
			for (i = 0; i < field.form.elements.length; i++)
				if (field == field.form.elements[i])
					break;
			i = (i + 1) % field.form.elements.length;
			field.form.elements[i].focus();
			return false;
		} 
		else
		return true;
	}      

</script>

	<title>Developers Shell</title>
</head>

<body bgcolor="#0e1f5b" OnLoad="document.login.uname.focus();">

	
<div style="position:absolute; top:2px; right:1%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<img src="../static/main/logo_small.png">
</div>	
<div style="position:absolute; top:2px; left:0%; height: 100px; width=:600px; z-index: 102; overflow: visible;">
<font color="#ffffff" size=4 face="Verdana, Verdana">
<?php $sec->dispinfo() ?>
</font>
<br><br>
</div>
<div  style="position:absolute; bottom:1%;" link="color:white">
<font color="#dd3c10" size=5 face="Verdana, Verdana">
         <br>Developers Login Panel ( AUTHORIZED USE ONLY )<br>
	</font>

<font color="#ffffff" size=4 face="Verdana, Verdana">
<div style="line-height:35px; overflow: visible;">
 ( YOU ARE ADVICED TO PRESS F11 FOR A FULL SCREEN VIEW )

					<form name="login" method="post" action="login.php">
		
					<label for="uname">>Username:</label>
					<input type="text" id="uname" name="uname" size="50" style="width: 410px; height: 30px; background-color: #0e1f5b; border-width:0px; border-style:solid; FONT-SIZE: 20px;  COLOR:#ffffff;" onkeypress="return handleEnter(this, event)" /> <br />

					<label for="password">>Password :</label>
					<input type="password" id="password" name="password" size="50" style="width: 410px; height: 30px; background-color: #0e1f5b; border-width:0px; border-style:solid; FONT-SIZE: 20px;  COLOR:#ffffff;"  /> <br />
			
					<input type="submit" style="border: #0e1f5b 1px solid; background: #0e1f5b; width: 120px; height: 32px;  center top; color:#ffffff;" value="Login" name="login"> <br />
					</font>
					</form>
					

 			 </div>