<?php
	

	
	$warning = "";
	$info = "";
	global $wpdb;
	$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
	$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
	$kd_ads_stats = $wpdb->prefix .'kd_ads_stats';
	
	
?>



<div id="kadom" class="wrapper">
<h2>Kadom Ads Statistics</h2>
Happy with Kadom Ads Management Lite ? Want to say thanks ? <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7011745">Buy us a Beer or a Coffee :)</a>
<br/>
<?php
	if($warning <> ""){
		echo'<div class="warning fade">
			'.$warning.'
			</div>';
	}
	elseif($info <> ""){
		echo'<div class="updated fade">
			'.$info.'
		</div>';
	}
?>


	<h3>Statistics of active campaigns on the last 30 days :</h3>
<?php 	
	
	$campaigns = $wpdb->get_results( "SELECT c.*, s.name AS zone 
										FROM ".$kd_ads_campaign." c LEFT JOIN ".$kd_ads_zone." s ON c.id_zone=s.id_zone
										WHERE end_date > NOW() AND start_date < NOW()
										ORDER BY end_date DESC");
				
	
	echo '<table>
			<thead>
			<tr class="odd">
			    <th scope="col" abbr="Zone">Ad Zone</th>
				<th scope="col" abbr="Name">Name</th>
				<th scope="col" abbr="impressions">Est. Impressions (Today)</th>
				<th scope="col" abbr="clicks">Est. Clicks (Today)</th>
				<th scope="col" abbr="ctr">Est. CTR % (Today)</th>


			</tr>	
			</thead>
			<tbody>';
	foreach($campaigns as $camp){	
	
	$date=date("Y-m-d 00:00:00",time());
	
	$stats = $wpdb->get_results( "SELECT SUM(s.views) AS sum_views,SUM(s.clicks) AS sum_clicks 
									FROM ".$kd_ads_stats." s
									WHERE DATEDIFF('".$date."', date) <= 30 AND s.id_campaign=".$camp->id_campaign." GROUP BY s.id_campaign
									");
	$today = $wpdb->get_results( "SELECT s.views, s.clicks 
									FROM ".$kd_ads_stats." s
									WHERE date = '".$date."' AND s.id_campaign=".$camp->id_campaign."");

	if($stats[0]->sum_views){
		$ctr = round(100 * $stats[0]->sum_clicks / $stats[0]->sum_views, 2);
	}
	else $ctr = '';
	if($today[0]->views){
		$ctr_today = round(100 * $today[0]->clicks / $today[0]->views, 2);
	}
	else $ctr_today = '';
	echo '
		  <tr>
			<td>'.$camp->zone.'</td>
			<td><a href="'.$camp->url.'">'.$camp->name.'</a></td>
			<td>'.$stats[0]->sum_views.' ('.$today[0]->views.')</td>
			<td>'.$stats[0]->sum_clicks.' ('.$today[0]->clicks.')</td>
			<td>'.$ctr.' ('.$ctr_today.')</td>
		  </tr>';
	
	
	}
	echo '</tbody></table>';


	
?>
	<h3>Statistics for each Campaign Since the beginning:</h3>
<?php 	
	
	$campaigns = $wpdb->get_results( "SELECT c.*, s.name AS zone 
										FROM ".$kd_ads_campaign." c LEFT JOIN ".$kd_ads_zone." s ON c.id_zone=s.id_zone
										ORDER BY end_date DESC");
				
	
	echo '<table>
			<thead>
			<tr class="odd">
			    <th scope="col" abbr="Zone">Ad Zone</th>
				<th scope="col" abbr="Name">Name</th>
				<th scope="col" abbr="impressions">Est. Impressions (Average per Day)</th>
				<th scope="col" abbr="clicks">Est. Clicks (Average per Day)</th>
				<th scope="col" abbr="ctr">Est. CTR %</th>


			</tr>	
			</thead>
			<tbody>';
	foreach($campaigns as $camp){	
	
	$date = date("Y-m-d 00:00:00",time());
	$now = date("Y-m-d H:i:s",time());
	
	$stats = $wpdb->get_results( "SELECT SUM(s.views) AS sum_views,SUM(s.clicks) AS sum_clicks, AVG(s.views) AS avg_views,AVG(s.clicks) AS avg_clicks  
									FROM ".$kd_ads_stats." s
									WHERE s.id_campaign=".$camp->id_campaign." AND s.date != '".$date."'  GROUP BY s.id_campaign");
	
	if($stats[0]->sum_views){
		$ctr = round(100 * $stats[0]->sum_clicks / $stats[0]->sum_views, 2);
	}
	else $ctr = '';
	
	if( $camp->end_date < $now || $camp->start_date > $now  ) $style = 'style="color:#a00000;"';
	else $style = 'style="color:#00a000;"';

	
	echo '
		  <tr>
			<td>'.$camp->zone.'</td>
			<td><a href="'.$camp->url.'" '.$style.'>'.$camp->name.'</a></td>
			<td>'.$stats[0]->sum_views.' ('.round($stats[0]->avg_views,1).')</td>
			<td>'.$stats[0]->sum_clicks.' ('.round($stats[0]->avg_clicks,1).')</td>
			<td>'.$ctr.'</td>
		  </tr>';
	
	
	}
	echo '</tbody></table>';
?>

</div>