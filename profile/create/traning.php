<?PHP
require_once '../../iheader.php';
?>

<?php 
//session_start();

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');
$proid=$_SESSION['profileid'];
$query="SELECT * FROM `profile` WHERE `id` = $proid";
$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	$row = mysqli_fetch_array($result);
	
	
$interests=$row["interests"];
$passion=$row["passion"];
$commendations=$row["commendations"];
$training=$row["training"];
$courses=$row["courses"];
$sports=$row["sports"];
$proid=$_SESSION['profileid'];
?>





<div style="position: absolute; top:50px; left:0px; width: 650px; height: 85px; z-index: 10; overflow: visible; ">
      			<div style="text-align:right; line-height:50px; overflow: visible;">

					<form method="get" action="functions/traning_update.php" target="_self">
					<font color="#000000" size="2" face="Verdana">
					
				
					
			
					
					<label for="interests" >Your areas of interest:</label>
					<input type="text" id="" name="interests" value="<?php echo $interests; ?>"  size="30" style="width: 510px; height: 50px" /> <br />
					
					<label for="passion" >Passionate about:</label><br>
					<input type="text" id="birthday" name="passion" value="<?php echo $passion; ?>" size="30" style="width: 510px; height: 50px" /> <br />
					
				
					
					<label for="commendations" >Commendations ( Honors and Awards ):</label><br>
					<textarea name="commendations" id="styled"  style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $commendations; ?></textarea>
					<br>
					
						<label for="about" >Industrial Tranings / Internships  :</label><br>
					<textarea name="training" id="styled" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $training; ?></textarea>
					<br>
					
					<label for="courses" >Do you know any of the following ( C C++ JAVA .NET PHP MY SQL ORACLE DB2 LINUX / SCADA PLC MATLAB MULTISIM SIMULINK or any other equivalent stuffs? Please specify in detail. </label><br>
					<textarea name="courses" id="styled" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $courses; ?></textarea>
					<br>
					
					
					<label for="Sports" >Sports?</label><br>
					<input type="text" id="birthday" name="sports" value="<?php echo $sports; ?>"  size="30" style="width: 510px; height: 50px" /> <br />
					
					
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 120px; height: 32px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Save" name="Save"> <br />
					</font>
					</form>
					
					</div>
					</div>