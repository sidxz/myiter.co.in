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
	
	
$about=$row["about"];
$objective=$row["objective"];
$gender=$row["gender"];
$birthday=$row["birthday"];
$language=$row["languages"];
$proid=$_SESSION['profileid'];
?>




<div style="position: absolute; top:50px; left:0px; width: 650px; height: 85px; z-index: 10; overflow: visible; ">
      			<div style="text-align:right; line-height:50px; overflow: visible;">

					<form method="get" action="functions/basic_update.php" target="_self">
					<font color="#000000" size="2" face="Verdana">
					
					<label for="about" >About You:</label>
					<textarea name="about" id="styled" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px; "  ><?php echo $about; ?></textarea>
					<br>
					Why are you into engineering ?<br>
					<label for="about" >i.e Your Career Objectives:</label>
					<textarea name="objective" id="objective" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $objective; ?></textarea>
					<br>
					
					<label for="gender" >Gender:</label>
					<select name="gender" style="width: 230px; height:30px; width: 510px;">
					<option value="male" <?php echo $gender == 'male' ? ' selected' : ''; ?>>Male</option>
					<option value="female" <?php echo $gender == 'female' ? ' selected' : ''; ?>>Female</option>
					</select>
					<br>
					
					
					<label for="birthday" >Birthday:</label><br>
					<input type="text" id="birthday" name="birthday" value="<?php echo $birthday; ?>"size="30" style="width: 510px; height: 50px" /> <br />
					
					<label for="lang" >Languages:</label><br>
					<input type="text" id="lang" name="lang" value="<?php echo $language; ?>"size="30" style="width: 510px; height: 50px" /> <br />
					
					
					
					
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 120px; height: 32px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Save" name="Save"> <br />
					</font>
					</form>
					
					</div>
					</div>