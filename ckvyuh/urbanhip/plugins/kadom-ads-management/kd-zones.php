<?php
	
	$warning = "";
	$info = "";
	global $wpdb;
	$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
	$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
	
	
	$action = 'insert';
	
	$name = '';
	$position_edit = '';
	$width = '';
	$height = '';
	$cost = '';
	$nb_banner = '';
	$max_banner = '';
	$widget = '';
	
	//$wpdb->show_errors();
	
	if(isset($_POST) && $_GET['status'] == 'add') {
		if(!empty($_POST['name']) && !empty($_POST['width']) && !empty($_POST['height']) && !empty($_POST['nb_banner']) && !empty($_POST['max_banner']))
		{
			if($_POST['action'] == 'insert'){
				$zones = $wpdb->get_results( "INSERT INTO ".$kd_ads_zone." 
												VALUES(NULL,'".$wpdb->escape($_POST['name'])."','".$_POST['position']."',".$_POST['width'].",".$_POST['height']."
														,".$_POST['cost'].",".$_POST['nb_banner'].",".$_POST['max_banner']."
														,'".$_POST['widget']."')" );
				$info = "Ads Zone correctly added, You can now add a campaign !";
			}
			elseif($_POST['action'] == 'update'){
			
				$zones = $wpdb->get_results( "UPDATE ".$kd_ads_zone." 
												SET name = '".$wpdb->escape($_POST['name'])."', position = '".$_POST['position']."',width = ".$_POST['width'].", height = ".$_POST['height']."
														, cost = ".$_POST['cost'].", nb_banner = ".$_POST['nb_banner'].", max_banner_display = ".$_POST['max_banner']."
														, widget = '".$_POST['widget']."' WHERE id_zone = ".$_POST['id_zone'] );
				$info = "Ads Zone correctly Updated !";
			
			}
		}
		else
		{
			$warning = "A mandatory field is missing !";
		}
	}

	elseif($_GET['status'] == 'del') {
		$zones = $wpdb->get_results( "DELETE FROM ".$kd_ads_zone." WHERE id_zone=".$_GET['id']."" );
		$info = "Ads Zone correctly deleted !";	
	}
	elseif($_GET['status'] == 'edit') {
		$edit_zones = $wpdb->get_results( "SELECT s.* FROM ".$kd_ads_zone." s WHERE s.id_zone=".$_GET['id']."" );
		$action = 'update';
		
		$name = $edit_zones[0]->name;
		$position_edit = $edit_zones[0]->position;
		$width = $edit_zones[0]->width ;
		$height = $edit_zones[0]->height;
		$cost = $edit_zones[0]->cost;
		$nb_banner = $edit_zones[0]->nb_banner;
		$max_banner = $edit_zones[0]->max_banner_display;
		$widget = $edit_zones[0]->widget;
	}

	
	
	
	
	
	
	
	
	
	
?>
<div id="kadom" class="wrapper">
<h2>Kadom Ad Zone Management</h2>

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
	


	<h3>Current Ad Zones</h3>
<?php 	
	
	$zones = $wpdb->get_results( "	SELECT s.*, COUNT(c.id_campaign) AS used 
										FROM ".$kd_ads_zone." s LEFT JOIN ".$kd_ads_campaign." c ON c.id_zone = s.id_zone 
										WHERE (TO_DAYS(c.end_date) >= TO_DAYS(NOW()) AND TO_DAYS(c.start_date) <= TO_DAYS(NOW())) OR c.id_zone IS NULL
										GROUP BY s.id_zone
								");

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
	$position = array(
					"Top Left" => "Top Left",
					"Top Center" => "Top Center",
					"Top Right" => "Top Right",
					"Middle Left" => "Middle Left",
					"Center" => "Center",
					"Middle Right" => "Middle Right",
					"Bottom Left" => "Bottom Left",
					"Bottom Center" => "Bottom Center",
					"Bottom Right" => "Bottom Right",
					"Premium Rotation" => "Premium Rotation",
	);	

	
	echo '<table>
			<thead>
			<tr class="odd">
				<th scope="col" abbr="Name">Name</th>
				<th scope="col" abbr="Width">Width</th>
				<th scope="col" abbr="Height">Height</th>	
				<th scope="col" abbr="Number of Banners">Number of Banners / Available</th>
				<th scope="col" abbr="Max Banner">Max Banner to Display</th>
				<th scope="col" abbr="Widget">Widget</th>
				<td class="column1">&nbsp;</td>
				<td class="column1">&nbsp;</td>
			</tr>	
			</thead>
			<tbody>';
	foreach($zones as $zone){	
		$kd_path = get_bloginfo('wpurl').'/wp-content/plugins/kadom-ads-management';
		if($zone->widget == "no") $get_code = ' - <a href="?page=kadom-ads-management/kd-get-ad-code.php&amp;id='.$zone->id_zone.'">Get Ad Code</a>';
		else $get_code = '';
		
		echo '
			  <tr>
				<td>'.$zone->name.'</td>
				<td>'.$zone->width.'</td>			
				<td>'.$zone->height.'</td>
				<td>'.$zone->used.'/'.$zone->nb_banner.'</td>
	            <td>'.$zone->max_banner_display.'</td>	
	            <td>'.$zone->widget.' '.$get_code.'</td>
				<th scope="row" class="column1"><a href="?page=kadom-ads-management/kd-zones.php&status=edit&id='.$zone->id_zone.'" title="Update the entry">Edit</a></th>
				<th scope="row" class="column1"><a href="?page=kadom-ads-management/kd-zones.php&status=del&id='.$zone->id_zone.'" title="Delete the entry">Delete</a></th>			
			  </tr>';
	
	
	}
	echo '</tbody></table>';

?>
	<h3>Add a New Ad Zone</h3>
		<form id="ZoneForm" name="ZoneForm" method="post" action="?page=kadom-ads-management/kd-zones.php&status=add">
			<fieldset>
                
                <label for="name">Name :</label>
                  <input class="text" name="name" id="name" value="<?php echo $name; ?>" type="text" /><br/>
				<label for="position">Position :</label>
				<select name="position" id="position">
				
				<?php 
				if($position_edit != '') echo'<option value="'.$position_edit.'">'.$position_edit.'</option>';
				while(list($key, $val) = each($position)){ ?>
					<option value="<?php echo $val; ?>"><?php echo $key; ?></option>
				<?php } ?>
				</select>
				  
                <label for="width">Banner Width (px) :</label>
                  <input class="text" type="text" name="width" id="width" value="<?php echo $width; ?>"/><br/>
							<p class="example">ex: '125' for a width of 125 pixels</p>	
				<label for="height">Banner Height (px) :</label>
                  <input class="text" type="text" name="height" id="height" value="<?php echo $height; ?>"/><br/>
							<p class="example">ex: '125' for a height of 125 pixels</p>	
				<label for="nb_banner">Number of Banners :</label>
				<select name="nb_banner" id="nb_banner">
				<?php
					if($nb_banner != '') echo'<option value="'.$nb_banner.'">'.$nb_banner.'</option>';				
					while(list($key, $val) = each($nb_list)){ ?>
					<option value="<?php echo $val; ?>"><?php echo $key; ?></option>
				<?php } ?>
				</select>
				

				<label for="max_banner">Max Number of Banner displayed :</label>
				<select name="max_banner" id="max_banner">
				<?php
					if($max_banner != '') echo'<option value="'.$max_banner.'">'.$max_banner.'</option>';					
					while(list($key, $val) = each($nb_list2)){ ?>
					<option value="<?php echo $val; ?>"><?php echo $key; ?></option>
				<?php } ?>
				</select>	
				<p class="example">If Max &lt; number of banner (the banner will rotate).</p>
				
                <label for="cost">Cost in $ :</label>
                  <input class="text" type="text" name="cost" id="cost" value="<?php echo $cost; ?>"/><br/>
				  <p class="example">Used on the advertise template page and In the email template</p>
				
				<label for="widget">Widget :</label>
				<select name="widget" id="widget">
				<?php
					if($widget != '') echo'<option value="'.$widget.'">'.$widget.'</option>';	?>
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				<p class="example">Register a Widget in the widget section (for Sidebar Widget)</p>
				
				
				
              </fieldset>

			  <fieldset class="sub">
                  <input value="Submit" class="button" type="submit"/>
				  <input value="<?php echo $action; ?>" name="action" id="action" type="hidden"/>
				  <input value="<?php echo $_GET['id']; ?>" name="id_zone" id="id_zone" type="hidden"/>
              </fieldset>
		</form>
		
		
		
		
</div>