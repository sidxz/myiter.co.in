<?php
	global $wpdb;
	$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
	
	$zones = $wpdb->get_results( "	SELECT s.*
										FROM ".$kd_ads_zone." s  
										WHERE s.id_zone=".$_GET['id'].
								"");
?>

<div id="kadom" class="wrapper">
<h2>Kadom Ads - Install Ad Code for <?php echo $zones[0]->name; ?></h2>

<p>Copy and paste the code below into your site where this ad zone should appear.</p>

<textarea row="4" style="width:60%;">
&lt;?php display_kd_ads(<?php echo $_GET['id'] .','; ?> 1, 5, '', true, false); ?&gt;
</textarea>


<p style="clear:both;"><br/><br/>Usage : <b>display_kd_ads( $id, $nb_columns, $margin, $url_image, $show_empty, $advertise_here);</b>
	<ul>
		<li><b>$id</b> : the ad zone ID. </li>
		<li><b>$nb_columns</b> : Number of columns banners in the ad zone ID </li>
		<li><b>$margin</b> : the margin (in pixels) around each banner (put 5 if you want a space of 10px between the ads).</li>
		<li><b>$url_image</b> : the url of custom image for empty post. (work correctly if empty and $show_empty=true.</li>
		<li><b>$show_empty</b> : (true or false) do you want show the empty ad in the ad zone.</li>
		<li><b>$advertise_here</b> : (true or false) do you want show the 'Advertise Here' link at the bottom of the Ad Zone
	</ul>
</p>
				
<?php


?>
</div>