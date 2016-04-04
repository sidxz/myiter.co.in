<?php
session_start();

if(!isset($_GET["redirect"]))
{
$redirect="/home.php";
}
else{
$redirect=$_GET["redirect"];
}

if(isset($_SESSION['email']))
{
header('location: '."home.php");
}
if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookpass']))
{
header('location: '."account/login.php?redirect=".$redirect);
}




?>




<html>
<head>

<title>Welcome to MyITER</title>







</head>

<body bgcolor="#EEEEEE" style="overflow-x:hidden">

<style>
<!--




A.type3:link    {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:10px; font-weight:italic; text-decoration:none;}
A.type3:visited {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:10px; font-weight:italic; text-decoration:none;}
A.type3:active  {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:10px; font-weight:italic; text-decoration:none;}
A.type3:hover   {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:10px; font-weight:italic; text-decoration:underline;}
//-->
</style>
<div id="bdy" class="comp" style="position:absolute; top:10px; left:0px; z-index:0; overflow: visible;">
	


   <img src="static/main/diwali.jpg">

</div>

<div style="position:absolute; top:2px; left:0px; height: 36px; width:100%; z-index: 100; overflow: visible;">
<table height="100%" width="100%" background="static/main/bar.png" bgcolor="#000000">
<tr><td></td></tr>
</table>
</div>
<div style="position:absolute; top:0px; left:0px; height: 520px; width:100%; z-index: 1; overflow: visible;">
<table height="100%" width="100%" background="static/main/trans.png" bgcolor="">
<tr><td></td></tr>
</table>
</div>

<div id="bdy" class="comp" style="position:absolute; top:30px; left:50px; height: 202px; z-index:500; overflow: visible;">
	<div style="text-align:center;">

		<img src="static/main/logo.png">

    </div>
	</div>


<div style="position:absolute; top:2px; left:10%; height: 36px; width=:40px; z-index: 102; overflow: visible;">
<img src="static/main/logo_small.png"></a>
</div>





    
    
    
    <div style="position: absolute; top:200px; left:900px; width: 237px; height: 50px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px;">
		<font face="Verdana, Verdana" color="#ffffff">Login</font>
<font face="Verdana, Verdana" color="#ffffff"></font></div>


							
    
    
    
<div style="position: absolute; top:250px; left:800px; width: 350px; height: 85px; z-index: 10; overflow: visible; ">
      			<div style="text-align:right; line-height:35px; overflow: visible;">

					<form method="post" action="account/login.php?redirect=<?php echo $redirect; ?> ">
					<font color="#ffffff" size="2" face="Verdana">
					<label for="email"><font color="#ffffff">Email:</font></label>
					<input type="text" id="email" name="email" size="30" style="width: 210px; height: 30px" /> <br />

					<label for="password">Password:</label>
					<input type="password" id="password" name="password" size="30" style="width: 210px; height: 30px" /> <br />
					<input type="checkbox" name="remember" value="remember"> Keep me logged in<br>
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 120px; height: 32px; background: transparent url(static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Login" name="login"> <br />
					</font>
					</form>
					
					<a FONT class="type3" href="/account/psswdrecovery/" TARGET="_top">Forgot your password ?</a>.<br>
					<a FONT class="type3" href="/developers/" TARGET="_top">About Us</a>.<br>
					<a FONT class="type3" href="/developer/" TARGET="_top">Developers Login</a>.<br>
 			 </div>
</div>
     
     
     
     
      
      <div style="position: absolute; top:240px; left:200px; width: 356px; height: 133px; z-index: 10; overflow: visible;">
<div style="text-align:right;  line-height:35px; overflow: visible;">
			<form name="signup" method="post" action="account/register.php">
			<font color="#ffffff" size="2"  face="Verdana">
				<font color="#ffffff">
				<label for="nusername">Email:</label>
				<input type="text" id="emailAddr" name="emailAddr" size="30"  style="width: 230px; height: 30px" /> <br />
				<label for="npassword">New Password:</label>
				<input type="password" id="npassword" name="npassword" size="30" style="width: 230px; height: 30px"/> <br />
                <label for="fname">First Name:</label>
				<input type="text" id="fname" name="fname" size="30" style="width: 230px; height: 30px" /> <br />
                <label for="lname">Last Name:</label>
				<input type="text" id="lname" name="lname" size="30"  style="width: 230px; height: 30px"/> <br />

				

				<label for="year">Year:</label>
				<select name="year" style="width: 230px; height: 30px">
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="M.Tech">M.Tech</option>
					<option value="MCA">MCA</option>
					<option value="Passed Out">Passed Out</option>
					<option value="Faculty">Faculty</option>
					<option value="Administrative">Administrative</option>
				</select> <br />
				<label for="branch">Branch:</label>
				<select name="branch" style="width: 230px; height: 30px">
					<option value="Electronics & Communication">Electronics & Communication</option>
					<option value="Electrical">Electrical</option>
					<option value="Electrical & Electronics">Electrical & Electronics</option>
					<option value="Computer Science">Computer Science</option>
					<option value="Instrumentation & Control">Instrumentation & Control</option>
					<option value="Information & Technology">Information & Technology</option>
					<option value="Mechanical Engineering">Mechanical Engineering</option>
					<option value="Civil">Civil</option>
					<option value="Applied Electronics & Instrumentation">Applied Electronics & Instrumentation</option>
				</select> <br />

				</font>
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 140px; height: 32px; background: transparent url(static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Create an Account" name="Sign"> <br />
				</font>
				</form>
                </div>
		</div>

     


            
            
            
      


	  
<div style="position:absolute; bottom:0px; left:0px; height:25px; width:100%; z-index: 1; overflow: visible;">
<table height="100%" width="100%" background="static/main/bar.png" bgcolor="#000000">
<tr><td></td></tr>
</table>
</div>      
</body>
</html>
