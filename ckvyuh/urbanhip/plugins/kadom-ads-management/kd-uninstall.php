<div id="kadom" class="wrapper">
<h2>Kadom Ads - Uninstall Plugin</h2>

<?php
	if($_POST['action'] == 'uninstall'){
		
		
	   global $wpdb;
	   $kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
	   $kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
	   $kd_ads_stats = $wpdb->prefix .'kd_ads_stats';

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		
		$sql_ads_zone = "DROP TABLE ".$kd_ads_zone;
		$wpdb->query($sql_ads_zone);	
		
		$sql_ads_campaign = "DROP TABLE ".$kd_ads_campaign;
		$wpdb->query($sql_ads_campaign);
		
		$sql_ads_stats = "DROP TABLE ".$kd_ads_stats;
		$wpdb->query($sql_ads_stats);
	
		echo '<div class="warning">Kadom Ads Management correctly uninstalled</div>';
	}
	else{
?>

<div class="warning">You will lose all the database information if you uninstall the plugin</div>
							
	<form id="ZoneForm" name="ZoneForm" method="post" action="?page=kadom-ads-management/kd-uninstall.php">
		
		  <fieldset class="sub">
			  <input value="Uninstall Kadom Ads Management" class="button" type="submit"/>
			  <input value="uninstall" name="action" id="action" type="hidden"/>
		  </fieldset>
	</form>
</div>
Not Happy with Kadom Ads Management ? <a href="">Let us know why on our forum !</a>
		
<?php } ?>