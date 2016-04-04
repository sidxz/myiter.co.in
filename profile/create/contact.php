<?PHP
require_once '../../iheader.php';
?>

<?php 


$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
$proid=$_SESSION['profileid'];
$query="SELECT * FROM `profile` WHERE `id` = $proid";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	$row = mysqli_fetch_array($result);
	
	
$phno=$row["phno"];
$regno=$row["regno"];
$fb=$row["fb"];
$tweet=$row["twitter"];
$proid=$_SESSION['profileid'];
?>







<div style="position: absolute; top:50px; left:0px; width: 650px; height: 85px; z-index: 10; overflow: visible; ">
      			<div style="text-align:right; line-height:50px; overflow: visible;">

					<form method="get" action="functions/contact_update.php" target="_self">
					<font color="#000000" size="2" face="Verdana">
				
				
					<label for="11th & 12th" >Phone Number:<br></label>
					<input type="text" id="birthday" name="phno" value="<?php echo $phno; ?>" size="30" style="width: 510px; height: 50px" /> <br />
					
					<label for="11th & 12th" >College Registration Number<br></label>
					<input type="text" id="birthday" name="regno" size="30" value="<?php echo $regno; ?>" style="width: 510px; height: 50px" /> <br />
				
					<label for="11th & 12th" >Facebook:<br></label>
					<input type="text" id="birthday" name="fb" value="<?php echo $fb; ?>" size="30" style="width: 510px; height: 50px" /> <br />
					
					<label for="11th & 12th" >Twitter <br></label>
					<input type="text" id="birthday" name="tweet" value="<?php echo $tweet; ?>"size="30" style="width: 510px; height: 50px" /> <br />
				
				
				
			
					
					
					
					
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 120px; height: 32px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Save" name="Save"> <br />
					</font>
					</form>
					
					</div>
					</div>