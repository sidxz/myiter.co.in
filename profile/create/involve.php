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
	
	
$iter_club=$row["iter_club"];
$other_club=$row["other_club"];
$nw=$row["new"];
$other=$row["other_involvement"];
$proid=$_SESSION['profileid'];
?>







<div style="position: absolute; top:50px; left:0px; width: 650px; height: 85px; z-index: 10; overflow: visible; ">
      			<div style="text-align:right; line-height:50px; overflow: visible;">

					<form method="get" action="functions/involve_update.php" target="_self">
					<font color="#000000" size="2" face="Verdana">
					
				
					
			
		
					<label for="iter" >Have You joined any Club of ITER ?( Such as IRC, Jaago, Srishti, Gen X, MyITER )  </label>
					<input type="text" id="" name="iter_club" size="30" value="<?php echo $iter_club; ?>" style="width: 510px; height: 50px" /> <br />
					
					<label for="11th & 12th" >Are you  in any City / State / National clubs ? (Such as SAE, Ted X, ). Please specify in detail. </label>
					<input type="text" id="" name="other_club" size="30" value="<?php echo $other_club; ?>" style="width: 510px; height: 50px" /> <br />
					
					<label for="about" >If given an opportunity, would you like to start something new in ITER? <br></label>
					<textarea name="new" id="styled" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $nw; ?></textarea>
					<br>
					
					<label for="other" >Any other Thing that you are involved in? <br></label>
					<textarea name="other_involvement" id="styled" style="vertical-align: middle; width: 510px; height: 100px; font-family: Verdana; font-size:15px"  ><?php echo $other; ?></textarea>
					<br>
					
					
					
					
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 120px; height: 32px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Save" name="Save"> <br />
					</font>
					</form>
					
					</div>
					</div>