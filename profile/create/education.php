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
	
	
$school=$row["school"];
$plustwo=$row["plustwo"];
$company=$row["company"];
$abe=$row["achievement_be"];
$ade=$row["achievement_de"];
$proid=$_SESSION['profileid'];
?>




<div style="position: absolute; top:50px; left:0px; width: 650px; height: 85px; z-index: 10; overflow: visible; ">
      			<div style="text-align:right; line-height:50px; overflow: visible;">

					<form method="get" action="functions/education_update.php" target="_self">
					<font color="#000000" size="2" face="Verdana">
					
				
					
			
					Please specify your Board of Education in bracets along with name and place.<br>
					e.g St Pauls School, Rourkela (ICSE)<br>
					<label for="School" >School:</label>
					<input type="text" id="birthday" name="school" value="<?php echo $school; ?>"size="30" style="width: 510px; height: 50px" /> <br />
					
					<label for="11th & 12th" >11th & 12th:</label>
					<input type="text" id="birthday" name="plustwo" value="<?php echo $plustwo; ?>" size="30" style="width: 510px; height: 50px" /> <br />
					
					<label for="11th & 12th" >Which Company would you like to join?</label>
					<input type="text" id="birthday" name="company" size="30" value="<?php echo $company; ?>" style="width: 510px; height: 50px" /> <br />
					
					<label for="about" >Achievements and Extra Curricular Activites ( before Engineering )<br></label>
					<textarea name="achievebe" id="styled" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $abe; ?></textarea>
					<br>
					
					<label for="about" >Achievements and Extra Curricular Activites ( during Engineering )<br></label>
					<textarea name="achievede" id="styled" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $ade; ?></textarea>
					<br>
					
					
					
					
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 120px; height: 32px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Save" name="Save"> <br />
					</font>
					</form>
					
					</div>
					</div>