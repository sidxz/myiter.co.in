
<?php
$num1=rand(1,5);
$num2=rand(1,5);
$ans=$num1+$num2;



?>
<div style="background-color:#333333; position:absolute; top:0px; left:0px; height: 300px; width:800px; -moz-border-radius: 15px; z-index: 20; overflow: visible;">

</div>
<div class="comp"style="position: absolute; top:20px; left:700px; width:77px; height:100px; z-index:30; overflow:visible; ">
<img  style="border:0px solid #FFFFFF;" width="77" height="100" src="../../static/buttons/lock.png" alt=""></a>
</div>

<div style="position: absolute; top:50px; left:100px; width: 450px; height: 85px; z-index: 100; overflow: visible; ">
      			<div style="text-align:right; line-height:35px; overflow: visible;">

					<form method="post" action="check.php">
					<font color="#ffffff" size="2" face="Verdana">
					<label for="email"><font color="#ffffff">Email:</font></label>
					<input type="text" id="email" name="email" size="30" style="width: 310px; height: 30px" /> <br />
					<font color="#ffffff" size="3" face="Verdana">
					<b>What is <?php echo $num1; ?> + <?php echo $num2; ?> ? </b><br>
					</font>
					<label for="ans">Answer:</label>
					<input type="text" id="answer" name="answer" size="30" style="width: 310px; height: 30px" /> <br />
					<input type="hidden" id="result" name="result" size="0" style="width: 310px; height: 30px" value="<?php echo $ans; ?>" /> <br />
					<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 150px; height: 32px; background: transparent url(../../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Recover Password" name="login"> <br />
					<br>
					Your Password will be mailed to you.
					
					<br>
					</font>
					</form>
					
					
 			 </div>
</div>
     