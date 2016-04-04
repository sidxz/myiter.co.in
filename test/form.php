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
					<option value="gossip" <?php echo $row['type'] == 'gossip' ? ' selected' : ''; ?>>Gossip</option>
					<option value="debate" <?php echo $row['type'] == 'debate' ? ' selected' : ''; ?>>Debate</option>
					<option value="research" <?php echo $row['type'] == 'research' ? ' selected' : ''; ?>>Research</option>
					<option value="story" <?php echo $row['type'] == 'story' ? ' selected' : ''; ?>>Stories</option>
					<option value="poem" <?php echo $row['type'] == 'poem' ? ' selected' : ''; ?>>Poems</option>
					<option value="idea" <?php echo $row['type'] == 'idea' ? ' selected' : ''; ?>>Ideas</option>
					<option value="tips" <?php echo $row['type'] == 'tips' ? ' selected' : ''; ?>>Tips n Tricks</option>
					<option value="tech" <?php echo $row['type'] == 'tech' ? ' selected' : ''; ?>>Technology</option>
				</select> <br /><br>
				

				</font>
<input type="button" style="border: #339900 1px solid; background: #ffffff; width: 200px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Publish" name=button1 onclick="return OnButton1();">
<input type="button" style="border: #339900 1px solid; background: #ffffff; width: 200px; height: 32px; background: transparent url(../static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Delete" name=button2 onclick="return OnButton2();">

</form>
<script language="Javascript">
function OnButton1()
{
    document.Form1.action = "Page1.aspx"
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