<?php
session_start();

if(isset($_SESSION['sid']))
{
header('location: '."http://localhost/home.php");
}
if(!isset($_SESSION['mail']))
{
header('location: '."../index.php");
}
$em=$_SESSION['mail'];

$secretnum=rand(10000,99999);
$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
	$query="UPDATE `myiter_database`.`t_user` SET `idsecret` = '$secretnum' WHERE `t_user`.`temail` = '$em' LIMIT 1 ;";
	mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 162 ");
	
	$query= " SELECT * FROM `t_user` WHERE temail='$em'";
	$result=mysqli_query($dbc,$query)
or die(" Error processing request");
if(mysqli_num_rows($result) == 1)
{
$row=mysqli_fetch_array($result);
$fn=$row['tfirstname'];
$ln=$row['tlastname'];
$ty=$row['tyear'];
$tbr=$row['tbranch'];
$ttime=$row['time'];
}
?>




<html>
<head>

<title>Welcome to MyITER</title>

</head>

<body bgcolor="#ffffff" style="overflow-x:hidden">

<style>
<!--




A.type3:link    {color:#0e1f5b; FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:visited {color:#0e1f5b;FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:active  {color:#0e1f5b;FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:hover   {color:#0e1f5b; FONT-FAMILY: verdana; FONT-SIZE: 14px; line-height:13px; font-weight:italic; text-decoration:underline;}
//-->
</style>
<div style="background:url(../static/main/bk2.jpg) center center no-repeat; position:relative; top:0px; width:100%; height:265px; z-index:10; overflow:hidden; ">
</div>



<div id="bdy" class="comp" style="position:absolute; top:0px; left:100px; height: 202px; z-index:50; overflow: visible;">
	
		<img src="../static/main/logo.png">

   

</div>

<div id="bottom_bar" style="position:absolute; top:0px; left:0px; width: 100%; height: 275px; z-index: 2; overflow: visible;">
  	<table height="100%" width="100%" bgcolor="#000000">
	<td><tr></td></tr>
	</table>
</div>



<div style="background:url(../static/main/indbak.jpg); position:absolute; top:265px; width:100%; height:438px; z-index:1; overflow:hidden; ">
</div>


 <div style="position: absolute; top:280px; left:50px; width: 413px; height: 50px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px; ">
		<font face="Verdana, Verdana" color="990066">Account Validation Pending !</font></div>
			
			</font>
      </div>
      
      
      <div style="position: absolute; top:400px; left:150px; width: 456px; height: 133px; z-index: 10; overflow: visible; line-height:25px;">
	  <font color="#0e1f5b" size="3"  face="Verdana">To Confirm <?php echo $em; ?> belongs to you we have sent a secret code to your email id.<br>
	  <b>Please open your email account and paste the key here.</b><br><br></font>
<div style="text-align:right;  line-height:35px; overflow: visible;">
			<form name="valid" method="post" action="validate.php">
			<font color="#ffffff" size="2"  face="Verdana">
				<font color="#0e1f5b">
				<label for="Secretid">Secret Number:</label>
				<input type="text" id="secid" name="secid" size="30"  style="width: 250px; height: 30px" /> <br />
			

				</font>
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 150px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Validate Account!" name="Sign"> <br />
				</font>
				</form>
                </div>
		</div>
		
		
		<div style="position: absolute; top:280px; right:250px; width: 237px; height: 50px; background-color: null; z-index: 10; overflow: visible; FONT-SIZE: 40px;">
		<font face="Verdana, Verdana" color="#0e1f5b">Account Information</font>
<font face="Verdana, Verdana" color="#ffffff"></font></div>


							
    
    
    
<div style="position: absolute; top:385px; right:180px; width: 350px; height: 85px; z-index: 10; overflow: visible; ">
      			<div style="text-align:right; line-height:35px; overflow: visible;">

					<form method="post" action="delnstart.php">
					<font color="#990066" size="2" face="Verdana">
					Email : <b><?php echo $em; ?> </b><br>
					Name : <b><?php echo $fn.' '.$ln; ?></b><br>
					Year : <b><?php echo $ty; ?></b><br>
					Branch : <b><?php echo $tbr; ?></b><br>
					
					
					<font color="#0e1f5b" size="4" face="Verdana"><b>Not you ?</b><br></font>
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 280px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Delete Information & Restart" name="delete"> <br />
					</font>
					</form>
					
					
					
 			 </div>
</div>
     
		
