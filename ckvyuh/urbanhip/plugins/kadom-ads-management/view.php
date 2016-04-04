<?php
	
	$curr_path = dirname( __FILE__ );
	$kd_ads_path = str_replace("\\", "/", strstr($curr_path, 'wp-content'));
	$count     = substr_count(trim($kd_ads_path, '/'), '/');
	if ( $count > 0 )
	for ($i=0; $i<=$count; $i++)
		$_kd_ads_path .= "../";
	require_once($_kd_ads_path.'wp-config.php');
	
	global $wpdb, $wp_query, $wp_rewrite;
	$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
	$kd_ads_stats = $wpdb->prefix .'kd_ads_stats';
	$date=date("Y-m-d 00:00:00",time());

	$stat = $wpdb->get_results( "SELECT s.* 
									  FROM ".$kd_ads_stats." s 
									  WHERE s.id_campaign=".$_GET['id']." AND s.date='".$date."'");
	if($stat[0] <> NULL){
		$update = $wpdb->get_results( "UPDATE ".$kd_ads_stats." SET views='".($stat[0]->views + 1)."', date='".$date."' WHERE id=".$stat[0]->id); 
	}
	else{
		$insert = $wpdb->get_results( "INSERT INTO ".$kd_ads_stats." VALUES(NULL,'".$date."','1','0',".$_GET['id'].")"); 
	}

	echo 'ok';


?>