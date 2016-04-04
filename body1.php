<html>
<body style="background-color:transparent;">

<style>
<!--



A.type1:link    {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:hover   {color:#0099FF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px;text-decoration:underline;}

A.type2:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type2:hover   {color:#990066; FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:13px; font-weight:bold; text-decoration:underline;}

A.type3:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:hover   {color:#990066; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:underline;}
//-->
</style>


<div style="position: absolute; top:0px; left:10px; width: 100%; height: 400px; background-color: null; z-index:5200; overflow: visible; FONT-SIZE: 50px; ">
<font face="Verdana, Verdana" color="#339900">
Headlines</font>

</div>


<div style="position: absolute; top:80px; left:18px; width:500px; height: 250px; background-color: null; z-index:5200; overflow: visible; ">
<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">

<!-- HEAD1 -->


<?PHP

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 159');

$query ="SELECT * FROM `featured` WHERE `type` LIKE 'head1'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$id1=$row['postid'];
	}
	
	
	$query ="SELECT * FROM `main` WHERE `pid` ='$id1' LIMIT 0 , 30";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$news1head=$row['topic'];
	$news1sum=$row['summary'];
	}
	
	
	$query ="SELECT * FROM `featured` WHERE `type` LIKE 'head2'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$id2=$row['postid'];
	}
	
		$query ="SELECT * FROM `main` WHERE `pid` ='$id2' LIMIT 0 , 30";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$news2head=$row['topic'];
	$news2sum=$row['details'];
	}
	
	$query ="SELECT * FROM `featured` WHERE `type` LIKE 'sc'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$id3=$row['postid'];
	}
	
		$query ="SELECT * FROM `main` WHERE `pid` ='$id3' LIMIT 0 , 30";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$schead=$row['topic'];
	$scsum=$row['summary'];
	}
	
	
	
		$query ="SELECT * FROM `featured` WHERE `type` LIKE 'tech'";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$id4=$row['postid'];
	}
	
		$query ="SELECT * FROM `main` WHERE `pid` ='$id4' LIMIT 0 , 30";
	$result=mysqli_query($dbc,$query)
	or die("Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 161 ");

	while($row = mysqli_fetch_array($result))
	{
	$techhead=$row['topic'];
	$techsum=$row['summary'];
	}
	
	
?>



<font face="Verdana, Verdana" size="5"  color="#666666">
<?php echo $news1head; ?><br>

</font>
<font face="Verdana, Verdana" size="2"  color="#666666">
<br>
<?php echo $news1sum; ?><a href="/news/news.php?pid=<?php echo $id1; ?>" target="_parent"> Read More </a>
</font>
</div>
</div>
</div>

<!-- HEAD2 -->
<div style="position: absolute; top:80px; left:550px; width:500px; height: 250px; background-color: null; z-index:5200; overflow: visible; ">
<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">
<font face="Verdana, Verdana" size="5"  color="#666666">
<?php echo $news2head; ?><br><br>

</font>
<font face="Verdana, Verdana" size="2"  color="#666666">

<?php echo $news2sum; ?><a href="/news/news.php?pid=<?php echo $id2; ?>" target="_parent"> Read More </a>
</font>
</div>
</div>
</div>



<div style="position: absolute; top:320px; left:10px; width:600px; height: 40px; background-color: null; z-index:5200; overflow: visible; FONT-SIZE: 45px; ">
<font face="Verdana, Verdana" color="#0e1f5b">Clubs & Groups</font>

</div>

<div onMouseOver="this.style.backgroundColor='#000000';" onMouseOut="this.style.backgroundColor='';"  style="background:url(static/main/trans.png); position:absolute; top:420px; left:0px; height:300px; width:350px; -moz-border-radius: 15px; z-index: 20; overflow: visible; cursor:pointer;">
<div style="position: absolute; top:10px; left:10px;  background-color: null; z-index: 30; overflow: visible; ">
<a href="/robotics" target="_parent"><img src="static/club/irc.jpg" width ="" style="-moz-border-radius: 15px;"></a>
</div>
</div>

<div onMouseOver="this.style.backgroundColor='#000000';" onMouseOut="this.style.backgroundColor='';"  style="background:url(static/main/trans.png); position:absolute; top:420px; left:370px; height:300px; width:350px; -moz-border-radius: 15px; z-index: 20; overflow: visible; cursor:pointer;">
<div style="position: absolute; top:10px; left:10px;  background-color: null; z-index: 30; overflow: visible; ">
<a href="/srishti" target="_parent"><img src="static/club/srishti.jpg" width ="" style="-moz-border-radius: 15px;"></a>
</div>
</div>


<div onMouseOver="this.style.backgroundColor='#000000';" onMouseOut="this.style.backgroundColor='';" style="background:url(static/main/trans.png); position:absolute; top:420px; left:740px; height:300px; width:350px; -moz-border-radius: 15px; z-index: 20; overflow: visible; cursor:pointer;">
<div style="position: absolute; top:10px; left:10px;  background-color: null; z-index: 30; overflow: visible; ">
<a href="/jaago/welcome" target="_parent"><img src="static/club/jaago.jpg" width ="" style="-moz-border-radius: 15px;"></a>
</div>
</div>

<div onMouseOver="this.style.backgroundColor='#000000';" onMouseOut="this.style.backgroundColor='';" style="background:url(static/main/trans.png); position:absolute; top:740px; left:0px; height:300px; width:350px; -moz-border-radius: 15px; z-index: 20; overflow: visible; cursor:pointer;">
<div style="position: absolute; top:10px; left:10px;  background-color: null; z-index: 30; overflow: visible; ">
<a href="/sae/welcome" target="_parent"><img src="static/club/sae.jpg" width ="" style="-moz-border-radius: 15px;"></a>
</div>
</div>
 
<div onMouseOver="this.style.backgroundColor='#000000';" onMouseOut="this.style.backgroundColor='';" style="background:url(static/main/trans.png); position:absolute; top:740px; left:370px; height:300px; width:350px; -moz-border-radius: 15px; z-index: 20; overflow: visible; cursor:pointer;">
<div style="position: absolute; top:10px; left:10px;  background-color: null; z-index: 30; overflow: visible; ">
<a href="/defacto" target="_parent"><img src="static/club/defacto.jpg" width ="" style="-moz-border-radius: 15px;"></a>
</div>
</div>


<div onMouseOver="this.style.backgroundColor='#000000';" onMouseOut="this.style.backgroundColor='';"  style="background:url(static/main/trans.png); position:absolute; top:740px; left:740px; height:300px; width:350px; -moz-border-radius: 15px; z-index: 20; overflow: visible; cursor:pointer;">
<div style="position: absolute; top:10px; left:10px;  background-color: null; z-index: 30; overflow: visible; ">
<a href="/veritas" target="_parent"><img src="static/club/veritas.jpg" width ="" style="-moz-border-radius: 15px;"></a>
</div>
</div>




<div style="position: absolute; top:1150px; right:0px; width:250px; height: 250px; background-color: null; z-index:5200; overflow: visible; ">
<font face="Verdana, Verdana" color="#339900">
Find us at : </font>

<font face="Verdana, Verdana" size="3"  color="#666666">

<a href="http://www.facebook.com/groups/myiter/" target="_blank"><img src="static/buttons/fb.png" height="40" width="40"></a>
<a href="http://twitter.com/#!/myiter" target="_blank"><img src="static/buttons/tweet.png" height="40" width="40"></a>
<a href="http://www.youtube.com/user/sidhs0091?feature=mhee" target="_blank"><img src="static/buttons/youtube.png" height="40" width="40"></a>

</font>
<br><br>
</font> 
</div>
</body>
</html>