<?php
/*
 Plugin Name: Kadom Ads Management
 Plugin URI: http://www.kadom.net/
 Description: Manage all your Ads on your website.  Create Ad Zones, Campaigns...
 Author: Thomas BEAL
 Author URI:    http://www.thomasbeal.com
 Version: 1.0.2
 License: Copyright (c) 2009 Thomas BEAL. All rights reserved.
 */



global $action, $kdads_options;


add_thickbox();
global $wpdb,$kd_path,$blog_dir;
$kd_path = ereg_replace( str_replace("\\","/",ABSPATH)  , '' , str_replace('\\','/',dirname(__FILE__)));
$blog_dir = ereg_replace( str_replace("\\","/",get_bloginfo('url'))  , '' , str_replace('\\','/',get_bloginfo('wpurl')));

if((!is_array($_SESSION)) xor (!$_SESSION)) {
  session_start();
  $_SESSION['kd_human'] = false;
  $_SESSION['kd_test'] = 'testsession';
}


// Option List
/*******************************************************************************************************************/
	$kdads_options = array();

	$kdads_options[] = array(	"name" => "Main Options",
						"type" => "title");	
	$kdads_options[] = array(	"name" => "Advertise Page URL",
						"desc" => "Paste the full URL of your \"Advertise Here\" Page",
						"id" => "kd_ads_page",
						"std" => "",
						"type" => "text");					 							    
	

						
	$kdads_options[] = array(	"name" => "CSS Style",
						"desc" => "Here you can modify the CSS for the ads zone and for the table in the Advertise page",
						"id" => "kd_css_page",
						"std" => "div.kd_ads{width:100%;}
div.kd_ads_block{display:block;overflow:hidden;margin:0 auto 0 auto;}
div.kd_ads_block a.kdads-link{background:transparent;display:block;float:left;}
div.advertisehere{width:100%;display:block;text-align:center;}
div.kd_ads_block a.kdads-empty{background:#e7e7e7;display:block;float:left;border:#CCC 1px solid;color:#666;font-weight:bold;font-size:12px;text-align:center;}
div.kd_ads_block a.kdads-empty:hover{background:#DDD;display:block;border:#999 1px solid;color:#333;text-decoration:none;}

#advertise	table { width:98%;border:1px solid;  margin:1em auto; border-collapse:collapse; }
#advertise	td {  padding:.6em 1em; text-align:center; }
#advertise .column1{text-align:left;}
#advertise	thead th {text-align:center;border-bottom:1px solid;font:bold 1.2em/1.5em \"Century Gothic\",\"Trebuchet MS\",Arial,Helvetica,sans-serif;}
",
						"type" => "textarea");
						
	$kdads_options[] = array(	"name" => "Statistics Options",
						"type" => "title");	
						
	$kdads_options[] = array(	"name" => "Enable Statistics (views &amp; clicks)",
						"desc" => "",
						"id" => "kd_enable_stats",
						"std" => "true",
						"type" => "checkbox");	

	$kdads_options[] = array(	"name" => "Enable Kadom Link",
						"desc" => "Just one link under the table on your advertise page (with the Shortcode)",
						"id" => "kd_enable_link",
						"std" => "true",
						"type" => "checkbox");							
						
/*******************************************************************************************************************/


// Plugin Management Add Admin Menu
/************************************************************************/


add_action('admin_menu', 'kadom_ads_menu');
function kadom_ads_menu() {

	add_menu_page('Kadom Ads Management Plugin', 'Kadom Ads', 'manage_ads', __FILE__, 'kd_main_setting_page', plugins_url('images/kadom.png'));

	add_submenu_page('kadom-ads-management/kadom-ads-management.php', 'Kadom Manage Zones', 'Manage Zones', 'manage_ads', 'kadom-ads-management/kd-zones.php'); 
	add_submenu_page('kadom-ads-management/kadom-ads-management.php', 'Kadom Manage Campaigns', 'Manage Campaigns', 'manage_ads', 'kadom-ads-management/kd-campaigns.php'); 
	add_submenu_page('kadom-ads-management/kadom-ads-management.php', 'Kadom Ads Stats', 'View Stats', 'manage_ads', 'kadom-ads-management/kd-stats.php'); 
	add_submenu_page('kadom-ads-management/kadom-ads-management.php', 'Kadom Uninstall Plugin', 'Uninstall', 'manage_ads', 'kadom-ads-management/kd-uninstall.php'); 
	
	add_submenu_page('', 'Kadom Ad Zone Install Code', 'install-code', 'manage_ads', 'kadom-ads-management/kd-get-ad-code.php'); 

	
	$role = get_role('administrator');
	if(!$role->has_cap('manage_ads')) {
		$role->add_cap('manage_ads');
    }
}
// Plugin Management Add Admin Menu
/************************************************************************/
add_action('widgets_init', 'kadom_register_widget'); 


function kadom_register_widget() {
	global $wpdb;
	$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
	$zones = $wpdb->get_results( "SELECT zone.* FROM ".$kd_ads_zone." zone WHERE zone.widget = 'yes'");
	if($zones <> NULL){	
		include_once('class/class.widget.php');  
	}
}


// ADD Rewrite rule
/************************************************************************/


function kadom_rewrite_rules() {
	global $wp_rewrite,$kd_path,$blog_dir;
	
	add_rewrite_rule('go/([0-9]+)$', $blog_dir.$kd_path.'/go.php?kdid=$1');

}
add_action('init', 'kadom_rewrite_rules');


function kd_flush_rewrites() {
	global $wp_rewrite,$kd_path;
	add_rewrite_rule('go/([0-9]+)$', $blog_dir.$kd_path.'/go.php?kdid=$1');
	$wp_rewrite->flush_rules(true);
}
register_activation_hook( __FILE__, 'kd_flush_rewrites');




//add_action('init', 'kadom_rewrite_rules');
// Plugin Management Database Tables Creation
/************************************************************************/

register_activation_hook( __FILE__, 'create_tables');
function create_tables() {

   global $wpdb;
   $kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
   $kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
   $kd_ads_stats = $wpdb->prefix .'kd_ads_stats';

   
	if ($wpdb->get_var("show tables like '$kd_ads_zone'") != $kd_ads_zone) {
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		$sql_ads_zone = "CREATE TABLE " .$kd_ads_zone. " (
				id_zone int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
				name varchar(100) NOT NULL,
				position varchar(100) NOT NULL,
				width int(8) UNSIGNED NOT NULL,
				height int(8) UNSIGNED NOT NULL,
				cost int(8) UNSIGNED NOT NULL,
				nb_banner int(8) UNSIGNED NOT NULL,
				max_banner_display int(8) UNSIGNED NOT NULL,
				widget ENUM('yes', 'no') NOT NULL,
				UNIQUE KEY id_zone (id_zone)
			   );";
		dbDelta($sql_ads_zone);	
		$sql_ads_campaign = "CREATE TABLE " . $kd_ads_campaign . " (
				id_campaign int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
				name varchar(100) NOT NULL,
				url varchar(255) NOT NULL,
				alt_text varchar(255) NOT NULL,
				image varchar(255) NOT NULL,
				start_date timestamp NULL default NULL,
				end_date timestamp NULL default NULL,
				masked_url ENUM('yes', 'no') NOT NULL,
				id_zone int(8) UNSIGNED NOT NULL,
				UNIQUE KEY id_campaign (id_campaign)
			   );";
		dbDelta($sql_ads_campaign);
		$sql_ads_stats = "CREATE TABLE " . $kd_ads_stats . " (
				id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				date timestamp NOT NULL,
				views bigint(20) UNSIGNED NOT NULL,
				clicks bigint(20) UNSIGNED NOT NULL,
				id_campaign int(8) UNSIGNED NOT NULL,
				UNIQUE KEY id (id)
			   );";
		dbDelta($sql_ads_stats);
	 }
	 
	global $kdads_options;
	update_kdads_setting();	
}

// Css For Admin Setting Page
/************************************************************************/

add_action('admin_head', 'kd_admin_css');
function kd_admin_css() { ?>

<style>

	#kadom	fieldset {margin: 0px 10px 5px 0px; border: 1px solid #E3E3E3;padding: 8px 10px 27px 0;  text-align: center;}
	#kadom	fieldset.sub { padding: 1em; text-align: center;}
	#kadom	fieldset.sub .alt { margin-left: .5em; font-size: .87em;}
	#kadom	legend {margin: 10px 0 10px 3px;border: 1px solid #FFFBDE;padding: 3px 8px;font-size: 1em;letter-spacing: 1px;text-transform: uppercase;color: #777;}
	#kadom	label {float: left;clear: both;width: 25%;	margin: 3px 2% 0;padding-top: 5px;text-align: right;}
	#kadom	fieldset p.example { clear: both;margin: 0 0 5px 29%;font-size: .87em;color: #999;width: 65%; padding: 0;}
	#kadom	input.text,  input.url,  textarea,  select {float: left;	display: block;	width: 64%;	margin: 5px 15px 5px 0;	border: 1px solid #777;padding: 3px; background: #F0F0F0;}
	#kadom	textarea#apidesc{height: 100px;	}
	#kadom  fieldset h3{float:left;margin:0 0 0 10px;}
    #kadom  input.checkbox{float: left;clear: both;margin: 10px 2% 0 30%;	display: block;	border: 1px solid #777;}
    #kadom	label.checkbox {float: left;background:transparent;clear: none;width: 60%;	margin: 3px 15px 5px 0;text-align: left;}
	
	
	
	#kadom	table { width:90%; border-top:1px solid #e5eff8; border-right:1px solid #e5eff8; margin:1em auto; border-collapse:collapse; }
	#kadom	td { color:#666; border-bottom:1px solid #e5eff8; border-left:1px solid #e5eff8; padding:.3em 1em; text-align:center; }
	#kadom	tr.odd td {background:#f7fbff}
	#kadom	tr.odd .column1 {background:#f4f9fe;}
	#kadom	.column1 {background:#f9fcfe;}
	#kadom	thead th {background:#f4f9fe;text-align:center;font:bold 1.2em/2em "Century Gothic","Trebuchet MS",Arial,Helvetica,sans-serif;color:#66a3d3;}

	#kadom	td p{margin:0;padding:0;font-size:11px}
	
	#kadom-post label {float: left;clear: both;width: 15%;	margin: 3px 2% 0;padding-top: 5px;text-align: left;}
	#kadom-post	input.text,  input.url,  textarea,  select {float: left;	display: block;	width: 64%;	margin: 5px 15px 5px 0;	border: 1px solid #777;padding: 3px; background: #F0F0F0;}
	#kadom-post p.example { clear: both;margin: 0 0 5px 22%;font-size: .87em;color: #999;width: 64%; padding: 0;}
	
	#kadom .warning { background: #FFEBE8; border: 1px dotted #CC0000; padding: 10px; color: #333; font-weight: bold; }

</style>
<?php }
// CSS & JS For Admin Setting Page 
/* JS used for banner statistics
/************************************************************************/

add_action('wp_head', 'kd_css');
function kd_css() { ?>
	<style>
	<?php echo get_option('kd_css_page'); ?>
	</style>
<?php }




add_action('wp_head', 'kd_js');



// view will test if the visitor have Javascript Activate (Human or Robot).
function kd_js() { 

	$kd_url_path = WP_PLUGIN_URL.'/kadom-ads-management';
	if(get_option('kd_enable_stats') == 'on'){
	?>
	<script type="text/javascript">
	<!--
		function clk(id){
		  (new Image()).src="<?php echo $kd_url_path.'/click.php?id='; ?>"+id;
		  return true;
		}
	-->
	</script>
	
	
	<script type="text/javascript">
		function view(id) {
			var xhr_object = null;

			if(window.XMLHttpRequest) 
			xhr_object = new XMLHttpRequest();
			else if(window.ActiveXObject) 
			xhr_object = new ActiveXObject("Microsoft.XMLHTTP");

			xhr_object.open("GET", "<?php echo $kd_url_path.'/view.php?id='; ?>"+id, true);
                
			xhr_object.send(null);
		}
	</script> 
	
<?php  }

}



// Parse content for display automaticaly the ads zone available 
/************************************************************************/

add_shortcode('kadom-ads-table', 'kadom_shortcode_callback');


function kadom_shortcode_callback( $attr ) {
	global $wpdb;
	$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
	$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
	$kd_ads_stats = $wpdb->prefix .'kd_ads_stats';
	$zones = $wpdb->get_results( "	SELECT s.*, COUNT(c.id_campaign) AS used 
										FROM ".$kd_ads_zone." s LEFT JOIN ".$kd_ads_campaign." c ON c.id_zone = s.id_zone 
										WHERE c.end_date >= NOW() AND c.start_date <= NOW() OR c.id_zone IS NULL
										GROUP BY s.id_zone
								");
	
	
	$out = '<div id="advertise">
			<table>
			<thead>
			<tr class="odd">
				<th scope="col" abbr="Name">Ad Zone</th>
				<th scope="col" abbr="size">Size (px)</th>	
				<th scope="col" abbr="Number of Banners">Sold/Available</th>
				<th scope="col" abbr="Max Banner">Max Banners</th>';
				
	if(get_option('kd_enable_stats') == 'on'){			
		$out .=	'<th scope="col" abbr="estim">Est. Impressions per ad</th>';
	}
	$out .=	'	<th scope="col" abbr="price">$/month</th>
				
			</tr>	
			</thead>
			<tbody>';
	
	$date=date("Y-m-d 00:00:00",time());
	foreach($zones as $zone){	
		if(get_option('kd_enable_stats') == 'on'){	
			$stats = $wpdb->get_results( "SELECT (AVG(s.views)*30) AS avg_views 
									FROM ".$kd_ads_stats." s LEFT JOIN ".$kd_ads_campaign." c ON c.id_campaign=s.id_campaign LEFT JOIN ".$kd_ads_zone." sp ON sp.id_zone=c.id_zone
									WHERE sp.id_zone = ".$zone->id_zone." AND TO_DAYS(NOW()) - TO_DAYS(s.date) <= 30 AND s.date != '".$date."'");
			$estimation = round($stats[0]->avg_views, -2);
			if ($stats[0]->avg_views == "" || $stats[0]->avg_views == 0) $estimation = 'n/a';
		}
	
	if ($zone->nb_banner > $zone->max_banner_display) $rotate= 'This ad will rotate !';
	else $rotate='';
	
		$out .= '
			  <tr>
				<td class="column1">
					<b>'.$zone->name.'</b>
					<p>'.$zone->position.'
					<br/>'.$rotate.'</p>
				</td>
				<td>'.$zone->width.'x'.$zone->height.'</td>			
				<td>'.$zone->used.'/'.$zone->nb_banner.'</td>
				<td>'.$zone->max_banner_display.'</td>';
		if(get_option('kd_enable_stats') == 'on'){	
			$out .= '<td>'.$estimation.'</td>';
		}		
	
		$out .= '<td>$'.$zone->cost.'</td>
			  </tr>';
	
	
	}
	$out .= '</tbody>
			</table>';
	if(get_option('kd_enable_link') == 'on'){		
	$out .= '	<div style="float:right;overflow:hidden;margin-bottom:10px;">
					<a href="http://www.kadom.net/159/kadom-ads-management" title="Kadom Ads Management: Wordpress Plugin">
						<small>Ads Powered by KAM</small>
					</a>
				</div>';
	}
			
	$out .= '</div>';
	
	return $out;
}











// Display a Kadom 
/************************************************************************/

function display_kd_ads( $id, $nb_columns, $margin, $image_url, $show_empty, $advertise_here ){
			/*********************************/
		
		global $wpdb,$wp_rewrite;
		$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
		$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
		$kd_ads_stats = $wpdb->prefix .'kd_ads_stats';
		
		$zones = $wpdb->get_results( "SELECT zone.* FROM ".$kd_ads_zone." zone WHERE zone.id_zone = ".$id);
		
		$max_banner = $zones[0]->max_banner_display;
		
		$width = ($nb_columns*$zones[0]->width) + ($margin * $nb_columns * 2);
		
		$campaign = $wpdb->get_results( "SELECT c.* 
										  FROM ".$kd_ads_campaign." c LEFT JOIN ".$kd_ads_zone." s ON  c.id_zone = s.id_zone 
										  WHERE s.id_zone=".$id." AND c.start_date <= NOW() AND c.end_date >= NOW() ORDER BY RAND() LIMIT 0,".$max_banner);
		
		
		
		
		$kd_url_path = WP_PLUGIN_URL.'/kadom-ads-management';
		echo	'<div class="kd_ads">
					<div class="kd_ads_block" style="width:'.$width.'px;">';
					

		$date=date("Y-m-d 00:00:00",time());
		$i = 0;
		
		
		
		foreach ($campaign AS $camp){

			if(get_option('kd_enable_stats') == 'on' ){
				echo'
				<script type="text/javascript">
					if (window.attachEvent) {window.attachEvent(\'onload\', function(){ view('.$camp->id_campaign.'); });}
					else if (window.addEventListener) {window.addEventListener(\'load\', function(){ view('.$camp->id_campaign.'); }, false);}
					else {document.addEventListener(\'load\', function(){ view('.$camp->id_campaign.'); }, false);} 
				</script>	
				';	
				$onmousedown = 'onmousedown="return clk(\''.$camp->id_campaign.'\')"';
			}

			
			// If Mod Rewrite Url is active :



			if($camp->masked_url == 'yes') {

				if(isset($wp_rewrite) && $wp_rewrite->using_permalinks()){
					$url = ' href="'.get_bloginfo('wpurl').'/go/'. $camp->id_campaign .'" '.$onmousedown ;
				}
				else{
					global $kd_path;
					$url = ' href="'.$kd_url_path.'/go.php?id='. $camp->id_campaign .'" '.$onmousedown ;
				}
			}
			else {
				$url = ' href="'. $camp->url .'" '.$onmousedown ;
			}
			
			
			echo '<a '.$url.' title="'.$camp->alt_text.'" target="_blank" class="kdads-link" style="margin:'.$margin.'px !important;margin:'.$margin.'px '.$margin.'px '.$margin.'px '.($margin-3).'px; ">
					<img src="'.$camp->image.'" alt="'.$camp->alt_text.'" style="width:'.$zones[0]->width.'px;height:'.$zones[0]->height.'px;"/>
				  </a>';
			$i++;
		}
		

		/***************************************************************************************************************/
	

		/*margin:'.$margin.'px '.$margin.'px '.$margin.'px '.($margin-3).'px; */
		$i = $max_banner - $i;
		if($i > 0 && $show_empty){
			for($j=0;$j < $i;$j++){
				if($image_url <> ''){

				echo '<a href="'.get_option('kd_ads_page').'" title="Advertise Here" class="kdads-link" style="margin:'.$margin.'px !important;margin:'.$margin.'px '.$margin.'px '.$margin.'px '.($margin-3).'px; ">
						<img src="'.$image_url.'" alt="Advertise Here" style="width:'.$zones[0]->width.'px;height:'.$zones[0]->height.'px;"/>
				  </a>';
				}
				else{
				echo '<a href="'.get_option('kd_ads_page').'" title="Advertise Here" class="kdads-empty" style="margin:'.$margin.'px !important;margin:'.$margin.'px '.$margin.'px '.$margin.'px '.($margin-3).'px;  width:'.($zones[0]->width - 2).'px;height:'.($zones[0]->height - 2).'px;line-height:'.($zones[0]->height * 8).'%;">
						Advertise Here
					</a>';
				
				}
			}

		
		}	
			
			
		
		if($advertise_here) echo '<div class="advertisehere"><a href="'.get_option('kd_ads_page').'" title="Advertise Here" >Advertise Here</a>
		</div>';
		

		echo	'	
					
					</div>
				</div>';
}


function update_kdads_setting(){
	global $kdads_options;
	if ( $_GET['page'] == 'kadom-ads-management/kadom-ads-management.php' ) {	
        if ( 'save' == $_REQUEST['action'] ) {
	
                foreach ($kdads_options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
                foreach ($kdads_options as $value) {
				   	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } 
				}					
				$saved = true;
		}
	}
}



// Main Setting Page
/************************************************************************/
function kd_main_setting_page(){
	
	$saved = false ;
	global $kdads_options;
	update_kdads_setting();					
	kadom_rewrite_rules();					
						
	if ( $_GET['page'] == 'kadom-ads-management/kadom-ads-management.php' ) {	
        if ( 'save' == $_REQUEST['action'] ) {
	
                foreach ($kdads_options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
                foreach ($kdads_options as $value) {
				   	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } 
				}					
				$saved = true;
		}
	}
	
	
	
	?>
	<div id="kadom" class="wrapper">
		<h2>Kadom Ads Main Setting Page</h2>
		
		Happy with Kadom Ads Management Lite ? Want to say thanks ? <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7011745">Buy us a Beer or a Coffee :)</a>
		

		<form id="ZoneForm" name="ZoneForm" method="post" action="?page=kadom-ads-management/kadom-ads-management.php">
						<?php if ( $saved ) { ?><div class="updated">Kadom Ads Management's Options has been updated!</div><?php } ?>
						
						<div style="clear:both;height:20px;"></div>
						
							
							<?php
							    
								$i=0;	
								foreach ($kdads_options as $value) { ?>
	
									<?php if ( $value['type'] <> "title" && $value['type'] <> "checkbox" ) { ?>
										<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?>: </label>
									<?php } 
										switch ( $value['type'] ) {
										case 'text':
									?>
									
		        							<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="text" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings($value['id']); } else { echo $value['std']; } ?>" />
		
									<?php
										break;
										case 'select':
									?>
		
	            						<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                					<?php while(list($key, $val) = each($value['items'])){ ?>
	                						<option<?php if ( get_settings( $value['id'] ) == $val) { echo ' selected="selected"'; } elseif ($val == $value['std']) { echo ' selected="selected"'; } ?> value="<?php echo $val; ?>"><?php echo $key; ?></option>
	                					<?php } ?>
	            						</select>
		
									<?php
		
										break;
										case 'textarea':
									?>
										<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" rows="8"><?php  if( get_settings($value['id']) != "") { echo stripslashes(get_settings($value['id'])); } else { echo $value['std']; } ?></textarea>
		
									<?php
										break;
										case "checkbox":
										
										if(get_settings($value['id'])) { $checked = 'checked="checked"'; } else { $checked = ""; }
									
									?>
		            				
		            				<input type="checkbox" class="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" <?php echo $checked; ?> />
									<label for="<?php echo $value['id']; ?>" class="checkbox"><?php echo $value['name']; ?></label>
									<?php
		
										break;	
										case "title":
										    $i++;
											if($i>1){
												?>
												</fieldset>
											    <fieldset>	
												<h3 class="hndle"><span><?php echo $value['name']; ?></span></h3><br/>
											<?php }
											else { ?>
												<fieldset>	
												<h3 class="hndle"><span><?php echo $value['name']; ?></span></h3><br/>

									<?php 	}
										
										break;
										
										
										default:
										break;}
									 ?>
	
									<?php if ( $value['type'] <> "title" ) { ?>
										<p class="example"><?php echo $value['desc']; ?></p>
										
	
									<?php } ?>		
	
							<?php } ?>
			</fieldset>
			  <fieldset class="sub">
                  <input value="Submit" class="button" type="submit"/>
				  <input type="hidden" name="action" value="save" />
              </fieldset>
		</form>
		
		<h3>You want display your available plans on your Advertise Page ? </h3>
		<p>
			It's simple Just add the shortcode : [kadom-ads-table] in your Advertise page 
			<br/>
			<br/>Note : You can edit the CSS of the table on this page in CSS Style textarea.
			
		</p>
		
		
		
	</div>
	<?php
}
?>