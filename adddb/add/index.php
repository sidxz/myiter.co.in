<?PHP
require_once '../../header.php';
?>

html>
<title>MyITER.co.in</title>
<body background="" style=" background-attachment: fixed; overflow-x:hidden;">

<style>
<!--


A.type5:link    {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type5:visited {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type5:active  {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type5:hover   {color:#339900; FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:13px; font-weight:italic; text-decoration:underline;}

A.type3:link    {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:visited {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:active  {color:#ffffff;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:none;}
A.type3:hover   {color:#ffffff; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:italic; text-decoration:underline;}

option.type1 {width: 270px; height: 30px; background-color:#ffffff; background:url(/static/main/trans.png); border-width:0px; border-style:solid; FONT-SIZE: 15px;  COLOR:#000000;}

//-->
</style>

<div style="background:url(/static/main/bk2.jpg) center center no-repeat; position:relative; top:0px; width:100%; height:450px; z-index:10; overflow:hidden; ">
</div>

<div style="background:url(/static/main/trans.png); position:absolute; top:0px; left:0px; height: 470px; width:100%; -moz-border-radius: 15px; z-index: 20; overflow: visible;">

</div>

<div style="background:url(/static/main/trans.png); position:absolute; top:50px; background-color:#000000; left:100px; height: 100px; width:800px; -moz-border-radius: 15px; z-index: 20; overflow: visible;">

</div>

<div style="position: absolute; top:60px; left:150px; width:470px; height: 50px; background-color: null; z-index:50; overflow: visible; FONT-SIZE: 30px; ">
<font face="Verdana, Verdana" color="#ffffff">MYITER DATABASE | Add to Database </font>

</div>

<script language="JavaScript" type="text/javascript" src="wysiwyg.js"></script>



 <div style="position: absolute; top:150px; left:80px; width: 650px; height: 133px; z-index: 500; overflow: visible;">
<div style="text-align:left;  line-height:40px; overflow: visible;">
			<form name="add" method="post" action="add.php">
			
			<font face="Verdana, Verdana" color="#ffffff" size="4"><b>
			<label for="category">What Category does the article belong to ?</label><br>
			<font face="Verdana, Verdana" color="#000000" size="4"><b>
				<select name="category" style="width: 270px; height: 40px; background-color:; background:url(/static/main/trans.png); border-width:0px; border-style:solid; FONT-SIZE: 15px;  COLOR:#ffffff;">
					<option value="news" class="type1">News ( Top Story )</option>
					<option value="event" class="type1">News ( Events and Alerts )</option>
					<option value="club" class="type1">News ( Clubs )</option>
					<option value="research" class="type1">Research</option>
					<option value="general" class="type1">General</option>
					<option value="debate" class="type1">Debate</option>
					<option value="story" class="type1">Stories</option>
					<option value="poem" class="type1">Poems</option>
					<option value="links" class="type1">Links and Downloads</option>
					<option value="faking" class="type1">Faking News</option>
					</font>
					
				</select> <br />
			
			
		
		
				<label for="topic">Topic:</label><br>
				<input type="text" id="topic" name="topic"  style="width: 650px; height:50px; background-color:; background:url(/static/main/trans.png); border-width:1px; border-color:#000000; border-style:solid; FONT-SIZE: 15px;  COLOR:#ffffff;"/> <br />
                <label for="summary">Summary:</label>
				<input type="text" id="summary" name="summary" style="width: 650px; height:50px; background-color:; background:url(/static/main/trans.png); border-width:1px; border-color:#000000; border-style:solid; FONT-SIZE: 15px;  COLOR:#ffffff;" /> <br />
                
				<label for="textarea">Content:</label>
				
				<br><br>
				<textarea id="textarea1" name="textarea1" style="height: 200px; width: 600px;"></textarea>
				
				<script language="javascript1.2">
				generate_wysiwyg('textarea1');
				</script>
				

				

				<br>
				

				</font>
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 240px; height: 32px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Submit" name="Sign"> <br />
				</font>
				</form>
                </div>
		</div>





