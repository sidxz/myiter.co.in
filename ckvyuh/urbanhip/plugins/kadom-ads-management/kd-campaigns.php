
<div id="kadom" class="wrapper">
<h2>Kadom Ads Campaigns Management</h2>
	
		
<?php
	

	
	$warning = "";
	$info = "";
	global $wpdb;
	$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
	$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
	$kd_ads_stats = $wpdb->prefix .'kd_ads_stats';
	
	$action = 'insert';
	$name = '';
	$zone_name = '';
	$url = '';
	$alt = '';
	$image = '';
	$start_date = '';
	$end_date = '';
	$id_zone = '';
	$masked_url = '';
	
	
	
	
	if(isset($_POST) && $_GET['status'] == "add") {
		if(!empty($_POST['name']) && !empty($_POST['url']) && !empty($_POST['image']) && !empty($_POST['zone']))
		{
		
			// Check the start date (if ads zone is full)
			$zones1 = $wpdb->get_results( "SELECT s.*,COUNT(*) AS used 
								FROM ".$kd_ads_zone." s LEFT JOIN ".$kd_ads_campaign." c ON s.id_zone = c.id_zone
								WHERE  (s.id_zone = ".$_POST['zone']." AND c.end_date >= NOW()) OR c.id_zone IS NULL
								GROUP BY s.id_zone
							");
			
			
			$zones = $wpdb->get_results( "SELECT  MIN(c.end_date) AS first_end
												FROM ".$kd_ads_zone." s  LEFT JOIN ".$kd_ads_campaign." c ON s.id_zone = c.id_zone
												WHERE c.end_date > NOW() AND s.id_zone = ".$_POST['zone']." AND
													(SELECT COUNT(*)
												    FROM ".$kd_ads_campaign." c2
												    WHERE  c2.id_zone = c.id_zone
												    AND c2.id_campaign > c.id_campaign
												) < s.nb_banner
												GROUP BY s.id_zone");
			



			$date = '';
			if($_POST['start_date'] == ""){							
				if($zones1[0]->used < $zones1[0]->nb_banner){

					$date = 'NOW()';
				}
				else $date = "'".$zones[0]->first_end."'";
			}
			else $date = "'".$_POST['start_date']."'";
			

			// Insert a Campaign
			if($_POST['action'] == 'insert'){


				
				$campaign = $wpdb->get_results( "INSERT INTO ".$kd_ads_campaign." 
												VALUES(NULL,'".$wpdb->escape($_POST['name'])."','".$wpdb->escape($_POST['url'])."','".$wpdb->escape($_POST['alt_text'])."',
												'".$wpdb->escape($_POST['image'])."',".$date.",DATE_ADD(".$date.", INTERVAL ".$_POST['period']." MONTH),
												'".$_POST['masked']."',".$_POST['zone'].")" );
				$info = "The Campaign was added successfully !";
			}
					
			// Update a Campaign
			elseif($_POST['action'] == 'update'){
			
				if($date > $_POST['end_date']){
					$warning .= "The End date must be > to the Start date : the campaign won't be active<br/>";
				}
						
				$zones = $wpdb->get_results( "UPDATE ".$kd_ads_campaign." 
												SET name = '".$wpdb->escape($_POST['name'])."', url = '".$wpdb->escape($_POST['url'])."',alt_text = '".$wpdb->escape($_POST['alt_text'])."', image = '".$wpdb->escape($_POST['image'])."'
														, start_date = ".$date.", end_date = '".$_POST['end_date']."', masked_url = '".$_POST['masked']."'
														, id_zone = '".$_POST['zone']."' WHERE id_campaign = ".$_POST['id_campaign'] );
				$info = "Campaign correctly Updated !";
			}
		}
		else
		{
			$warning .= "A mandatory field is missing !";
		}
	}
	elseif($_GET['status'] == "del") {
		$zones = $wpdb->get_results( "DELETE FROM ".$kd_ads_campaign." WHERE id_campaign=".$_GET['id']."" );
		$info = "Campaign correctly deleted !";	
	}
	elseif($_GET['status'] == 'edit') {
		$edit_camp = $wpdb->get_results( "SELECT c.*, s.name AS zone_name FROM ".$kd_ads_campaign." c LEFT JOIN ".$kd_ads_zone." s ON s.id_zone = c.id_zone WHERE c.id_campaign=".$_GET['id']."" );
		$action = 'update';
		
		$name = $edit_camp[0]->name;
		$zone_name = $edit_camp[0]->zone_name;
		$url = $edit_camp[0]->url;
		$alt = $edit_camp[0]->alt_text;
		$image = $edit_camp[0]->image;
		$start_date = $edit_camp[0]->start_date;
		$end_date = $edit_camp[0]->end_date;
		$id_zone = $edit_camp[0]->id_zone;
		$masked_url = $edit_camp[0]->masked_url;
	}
	elseif($_GET['status'] == 'renew'){
		if($_POST['action'] == 'renew'){
			if($_POST['cur_date'] != $_POST['end_date']){
				$update = $wpdb->get_results( "UPDATE ".$kd_ads_campaign." 
												SET end_date = '".$_POST['end_date']."'
												WHERE id_campaign = ".$_POST['id_campaign'] );
			}
			else{
				$update = $wpdb->get_results( "UPDATE ".$kd_ads_campaign." 
									SET end_date = DATE_ADD('".$_POST['end_date']."', INTERVAL ".$_POST['period']." MONTH)
									WHERE id_campaign = ".$_POST['id_campaign'] );
			}
			$info = "Campaign correctly Renewed !";
		}
		else{
			$campaigns = $wpdb->get_results( "	SELECT c.*
												FROM ".$kd_ads_campaign." c  
												WHERE c.id_campaign=".$_GET['id']);
										
			echo'<h3>Renew a campaign - '.$campaigns[0]->name.'</h3> 
			<div style="float:left;margin:10px;"><img src="'.$campaigns[0]->image.'" alt="'.$campaigns[0]->alt_text.'"/></div>
			<div style="float:left;margin:10px;">
					<a href="'.$campaigns[0]->url.'"><b>'.$campaigns[0]->name.'</b></a> - '.$campaigns[0]->alt_text.'
					<br/>Started on '.$campaigns[0]->start_date.'
			</div>
			<div style="clear:both;width:100%;"> </div>
			';
			
			?>

			<h3>Choose how Update the End Date</h3>
			<form id="ZoneForm" name="ZoneForm" method="post" action="?page=kadom-ads-management/kd-campaigns.php&status=renew">
				<fieldset>
					
					
					<label for="end_date">New Fix End Date :</label>
								<input class="text" type="text" name="end_date" id="end_date" value="<?php echo $campaigns[0]->end_date; ?>" /><br/>
								<p class="example">The format is 'YYYY-MM-DD hh:mm:ss' <br/>(ex: 2009-07-15 16:00:00 for the 15th of July 2009 at 16h)
								</p>
				
					<label for="period">Add a Period :</label>
					<select name="period" id="period">
						<option value="1">1 Month</option>
						<option value="2">2 Months</option>
						<option value="3">3 Months</option>
						<option value="4">4 Months</option>
						<option value="5">5 Months</option>
						<option value="6">6 Months</option>
						<option value="9">9 Months</option>
						<option value="12">1 Year</option>
					</select>	
						<p class="example">Add a period to the previous End Date</p>
												
				  </fieldset>

				  <fieldset class="sub">
					  <input value="Submit" class="button" type="submit"/>
					  <input value="renew" name="action" id="action" type="hidden"/>
					  <input value="<?php echo $campaigns[0]->end_date; ?>" name="cur_date" id="cur_date" type="hidden"/>
					  
					  <input value="<?php echo $_GET['id']; ?>" name="id_campaign" id="id_campaign" type="hidden"/>
				  </fieldset>
			</form>
			
<?php
		}
	}

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


	<h3>Ad Campaigns</h3>
<?php 	
	$campaigns = NULL;
	$campaigns = $wpdb->get_results( "SELECT c.*, s.name AS zone 
										FROM ".$kd_ads_campaign." c LEFT JOIN ".$kd_ads_zone." s ON c.id_zone=s.id_zone");
				
	
		
	$nb_list = array(
					"1" => "1",
					"2" => "2",
					"3" => "3",
					"4" => "4",
					"5" => "5",
					"6" => "6",
					"7" => "7",
					"8" => "8",
					"9" => "9",
					"10" => "10",
					"11" => "11",
					"12" => "12",
					"13" => "13",
					"14" => "14",
					"15" => "15"
					);	
	$nb_list2 = $nb_list;


	
	echo '<table>
			<thead>
			<tr class="odd">

				<th scope="col" abbr="Name">Name - Alt Text</th>
				<th scope="col" abbr="Alt Text">Banner Image</th>				
				<th scope="col" abbr="Start date">Start date</th>
				<th scope="col" abbr="End Date">End Date</th>
				<th scope="col" abbr="Masked Url">Masked Url</th>
			</tr>	
			</thead>
			<tbody>';
	$now = date("Y-m-d H:i:s",time());
	foreach($campaigns as $camp){	
	

	if( $camp->end_date < $now || $camp->start_date > $now) $style = 'style="background: #eee;"';
	else $style ='';

	
	echo '
		  <tr '.$style.'>
			<td style="text-align:left;"><a href="'.$camp->url.'"><b>'.$camp->name.'</b></a> - '.$camp->alt_text.'
				<br/>'.$camp->zone.'
				<p><a href="?page=kadom-ads-management/kd-campaigns.php&status=renew&id='.$camp->id_campaign.'" title="Renew this Banner">Renew</a>
					 | <a href="?page=kadom-ads-management/kd-campaigns.php&status=edit&id='.$camp->id_campaign.'" title="Edit the entry">Edit</a>
					 | <a href="?page=kadom-ads-management/kd-campaigns.php&status=del&id='.$camp->id_campaign.'" title="Delete the entry">Delete</a></p>
			</td>		
			<td><a href="'.$camp->image.'?KeepThis=true&amp;TB_iframe=true"  class="thickbox">Image</a></td>
			<td>'.$camp->start_date.'</td>
            <td>'.$camp->end_date.'</td>	
            <td>'.$camp->masked_url.'</td>
			</tr>';
	
	
	}
	echo '</tbody></table>';

	
	
	
	
	function display_zone_opt(){	
		global $wpdb;
		$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
		$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
		
		$opt_zones = $wpdb->get_results( "SELECT s.*, COUNT(*) AS used 
										FROM ".$kd_ads_zone." s LEFT JOIN ".$kd_ads_campaign." c ON s.id_zone = c.id_zone
										WHERE c.end_date >= NOW() OR c.id_zone IS NULL
										GROUP BY s.id_zone
									");
		
						
											
											
		foreach($opt_zones as $zone){	
		
			$cur_zone = $wpdb->get_results( "SELECT  s.*, MIN(c.end_date) AS first_end
												FROM ".$kd_ads_zone." s  LEFT JOIN ".$kd_ads_campaign." c ON s.id_zone = c.id_zone
												WHERE c.end_date > NOW( ) AND s.id_zone = ".$zone->id_zone." AND
													(SELECT COUNT(*)
												    FROM ".$kd_ads_campaign." c2
												    WHERE c2.id_zone = c.id_zone
												    AND c2.id_campaign > c.id_campaign
												) < s.nb_banner
												GROUP BY s.id_zone");
			

			if($zone->used < $zone->nb_banner){
				echo '<option value="'.$zone->id_zone.'">'.$zone->name.'</option>';
			}
			else{
				echo '<option value="'.$zone->id_zone.'">'.$zone->name.' - Currently Full until '.$cur_zone[0]->first_end.'</option>';
			}
		}

	}
	
?>

	<h3>Add a New Ads Zones</h3>
		<form id="ZoneForm" name="ZoneForm" method="post" action="?page=kadom-ads-management/kd-campaigns.php&status=add">
			<fieldset>
                
                <label for="name">Name :</label>
                  <input class="text" name="name" id="name" value="<?php echo $name; ?>" type="text" /><br/>

                <label for="url">Url :</label>
                  <input class="text" type="text" name="url" id="url" value="<?php echo $url; ?>"/><br/>
                
				<label for="image">Image Url :</label>
                  <input class="text" type="text" name="image" id="image" value="<?php echo $image; ?>" /><br/>
					<p class="example">Paste The Url of Banner.</p>
				  
				<label for="alt_text">Alt Text :</label>
                  <input class="text" type="text" name="alt_text" id="alt_text" value="<?php echo $alt; ?>" /><br/>
				
				<label for="start_date">Start Date :</label>
                  <input class="text" type="text" name="start_date" id="start_date" value="<?php echo $start_date; ?>" /><br/>
				<p class="example">Let the Field empty if you want start immediatly (if the Ad Zone is Full, it will start on the first available date.)  <br/> 
									Else the format is 'YYYY-MM-DD hh:mm:ss' <br/>(ex: 2009-07-15 16:00:00 for the 15th of July 2009 at 16h)
									<br/>Current Server Date is : 
									<?php 
										$time = $wpdb->get_results('SELECT NOW() AS cur_srv_time');
										echo $time[0]->cur_srv_time;
									?>
				</p>
				<?php if($action == 'update'){ 
					echo '<label for="end_date">End Date :</label>
							<input class="text" type="text" name="end_date" id="end_date" value="'.$end_date.'" /><br/>
							<p class="example">The format is \'YYYY-MM-DD hh:mm:ss\' <br/>(ex: 2009-07-15 16:00:00 for the 15th of July 2009 at 16h)</p>
							';				
					}
					else{
				?>
				
				<label for="period">Period :</label>
				<select name="period" id="period">
					<option value="1">1 Month</option>
					<option value="2">2 Months</option>
					<option value="3">3 Months</option>
					<option value="4">4 Months</option>
					<option value="5">5 Months</option>
					<option value="6">6 Months</option>
					<option value="9">9 Months</option>
					<option value="12">1 Year</option>
				</select>				
				<?php } ?>

				<label for="masked">Masked Url :</label>
				<select name="masked" id="masked">
				<?php if($action == 'update') echo '<option value="'.$masked_url.'">'.$masked_url.'</option>'; ?>
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				<p class="example">Use a Redirection ( /go.php?ads=2 ) generally used for Affiliate link</p>
				
				
				<label for="zone">Ad Zone :</label>
				<select name="zone" id="zone">
				<?php if($action == 'update') echo '<option value="'.$id_zone.'">'.$zone_name.'</option>'; ?>
				<?php display_zone_opt(); ?>
				</select>
				<p class="example">You must create an Ad Zone before create your first Campaign</p>
				
              </fieldset>

			  <fieldset class="sub">
                  <input value="Submit" class="button" type="submit"/>
				  <input value="<?php echo $action; ?>" name="action" id="action" type="hidden"/>
				  <input value="<?php echo $_GET['id']; ?>" name="id_campaign" id="id_campaign" type="hidden"/>
              </fieldset>
		</form>

</div>