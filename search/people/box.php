<?php
$user_search = $_GET['usersearch'];

?>
		<form method="get" action="search.php?">
				<font color="#0e1f5b" size="1" face="Verdana">
				<label for="usersearch"></label>
				<input type="text" id="usersearch" name="usersearch" size="70" value="<?php echo $user_search; ?>" style="border: #ffffff 1px solid; "  />
				<label for="sort"></label>
				<input type="hidden" id="sort" name="sort" size="2" value="2">
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 30px; height: 20px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Go!" name="Search" > <br />
					</font>
					</form>
</form>

