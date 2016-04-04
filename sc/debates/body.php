<?PHP
require_once '../../iheader.php';
?>
<?PHP
$id=$_GET['id'];
?>
<html>
<head>

</head>
<body style="background-color:transparent;">


<div class="comp" style="position:absolute; width:280px; left:0px; height:1000px; top:10px; z-index:1000; border:none">  
	
	  <IFRAME name="iframe" src="left.php" allowTransparency="true" width="280"  height="1000" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>

</div>


<div class="comp" style="position:absolute; width:600px; height:2000px; left:315px; top:15px; z-index:1000; border:none">  
	
	  <IFRAME name="center" id="center" src="center.php?id=<?PHP echo $id; ?>" allowTransparency="true" width="600" height="2000"  align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>

</div>



<div class="comp" style="position:absolute; left:940px; width:250px; height:1000px; top:10px; z-index:1000; border:none">  
	
	  <IFRAME name="iframe" src="right.php" allowTransparency="true" width="250" height="1000" align="center" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no">
	  </IFRAME>

</div>

</body>
</html>
