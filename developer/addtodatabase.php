<?PHP
require_once 'header.php';

?>

<html>
<head>
<title> Developer | Add to Database </title>
</head>
<body>

<script language="JavaScript" type="text/javascript" src="wysiwyg.js"></script>
<div style="position: absolute; top:120px; left:80px; width: 650px; height: 133px; z-index: 10; overflow: visible;">
<font face="Verdana, Verdana" color="#990066" size="3"><b>Add to database</b></font>
</div>
 <div style="position: absolute; top:150px; left:80px; width: 650px; height: 133px; z-index: 10; overflow: visible;">
<div style="text-align:right;  line-height:35px; overflow: visible;">
			<form name="add" method="post" action="add.php">
			<font color="#ffffff" size="2"  face="Verdana">
				<font color="#0e1f5b">
				<label for="topic">Topic:</label>
				<input type="text" id="topic" name="topic"  style="width: 570px; height:30px"/> <br />
                <label for="summary">Summary:</label>
				<input type="text" id="summary" name="summary" style="width: 570px; height: 30px" /> <br />
                
				
				<textarea id="textarea1" name="textarea1" style="height: 200px; width: 600px;"></textarea>
				
				<script language="javascript1.2">
				generate_wysiwyg('textarea1');
				</script>
				

				

				<label for="category">Category of the content:</label>
				<select name="category" style="width: 270px; height: 30px">
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
					
				</select> <br /><br>
				

				</font>
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 240px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Add to Database and Publish" name="Sign"> <br />
				</font>
				</form>
                </div>
		</div>