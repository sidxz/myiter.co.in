<?PHP
require_once 'header.php';

$id=$_GET['id'];

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query ="SELECT * FROM `t_main` WHERE `pid` = '$id'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");
	
	$row=mysqli_fetch_array($result);


?>
<html>
<head>
<title> Developer | Edit Posts</title>
</head>
<body>

<script language="JavaScript" type="text/javascript" src="wysiwyg.js"></script>
<div style="position: absolute; top:120px; left:80px; width: 650px; height: 133px; z-index: 10; overflow: visible;">
<font face="Verdana, Verdana" color="#990066" size="3"><b>Edit and Publish</b></font>
</div>
 <div style="position: absolute; top:150px; left:80px; width: 650px; height: 133px; z-index: 10; overflow: visible;">
<div style="text-align:right;  line-height:35px; overflow: visible;">

	
<form name="Form1" method="post">
<font color="#ffffff" size="2"  face="Verdana">
				<font color="#0e1f5b">
				<label for="topic">Topic:</label>
				<input type="text" id="topic" name="topic" value="<?php echo $row['topic']; ?>" style="width: 570px; height:30px"/> <br />
                <label for="summary">Summary:</label>
				<input type="text" id="summary" name="summary" value="<?php echo $row['summary']; ?>" style="width: 570px; height: 30px" /> <br />
                
				
				<textarea id="textarea1" name="textarea1" style="height: 200px; width: 600px;"><?php echo $row['details']; ?></textarea>
				
				<script language="javascript1.2">
				generate_wysiwyg('textarea1');
				</script>
				

				

				<label for="category">Category of the content:</label>
				<select name="category" style="width: 270px; height: 30px" document.getElementById("sel").value = 3>
					<option value="news" <?php echo $row['type'] == 'news' ? ' selected' : ''; ?>>News ( Top Story )</option>
					<option value="event" <?php echo $row['type'] == 'event' ? ' selected' : ''; ?>>News ( Events and Alerts )</option>
					<option value="club" <?php echo $row['type'] == 'club' ? ' selected' : ''; ?>>News ( Clubs )</option>
					<option value="research" <?php echo $row['type'] == 'research' ? ' selected' : ''; ?>>Research</option>
					<option value="general" <?php echo $row['type'] == 'general' ? ' selected' : ''; ?>>General</option>
					<option value="debate" <?php echo $row['type'] == 'debate' ? ' selected' : ''; ?>>Debate</option>
					<option value="story" <?php echo $row['type'] == 'story' ? ' selected' : ''; ?>>Stories</option>
					<option value="poem" <?php echo $row['type'] == 'poem' ? ' selected' : ''; ?>>Poems</option>
					<option value="links" <?php echo $row['type'] == 'links' ? ' selected' : ''; ?>>Links and Downloads</option>
					<option value="faking" <?php echo $row['type'] == 'faking' ? ' selected' : ''; ?>>Faking News</option>
				
				</select> <br /><br>
				

				</font>
<input type="button" style="border: #339900 1px solid; background: #ffffff; width: 200px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Publish" name=button1 onclick="return OnButton1();">
<input type="button" style="border: #339900 1px solid; background: #ffffff; width: 200px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Delete" name=button2 onclick="return OnButton2();">

</form>
<script language="Javascript">
function OnButton1()
{
    document.Form1.action = "editadd.php?by=<?php echo $row["postedby"] ?>";
    document.Form1.submit();             // Submit the page
    return true;
}
function OnButton2()
{
    document.Form1.action = "Page2.aspx"
    document.Form1.submit();             // Submit the page
    return true;
}
</script>		
			

                </div>
		</div>