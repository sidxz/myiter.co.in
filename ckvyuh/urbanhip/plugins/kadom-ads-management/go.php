<?php
/*
* author : Thomas BEAL
* Website : http://www.kadom.net
* Copyright Thomas BEAL all rights reserved
*/
/************************************************************************************************************/
/**
	 * enviroment variables filtering ($_GET, $_POST, etc
	 * wrapper function
	 *
	 * @return > a filtered value or redirect if filtered out as abuse  
	 * @param $_option Object > get variable by index, example: 'pagename' 
	 * @param $_old_option Object > use as default this if no value is set
	 * @param $_filter Object[optional] regexp for advanced filtering or simple /string/ to deny
 */
 
function _sopt( $_option, $_filter="/^[a-zA-Z0-9\\-\\_]+$/" )
  {
  $_value = false;

  if ( isset( $_GET[$_option] )){
    $_value = $_GET[$_option];
  }
  elseif ( isset( $_POST[$_option] )){
   $_value = $_POST[$_option];
  }

if ($_filter)
  {
  if ((( strpos($_filter,"#")!==false ) && (strpos($_filter,"#")==0) )
      ||
     (( strpos($_filter,"/")!==false ) && (strpos($_filter,"/")==0) )){
      
	  if (!preg_match ($_filter, $_value)){
          $_value = false;
          //echo "Error _sopt - unwanted chars";
        }
    }
 
   if ( strpos( $_value, $_filter )!==false)
     {
     // echo "$_value  | $_filter";
     Header( "HTTP/1.1 403 Forbidden" );
     exit;
     }
 }

  return ($_value)  ;
}
/************************************************************************************************************/



	$curr_path = dirname( __FILE__ );
	$mban_path = str_replace("\\", "/", strstr($curr_path, 'wp-content'));
	$count     = substr_count(trim($mban_path, '/'), '/');
	if ( $count > 0 )
	 for ($i=0; $i<=$count; $i++)
	  $_mban_path .= "../";
	require_once($_mban_path.'wp-config.php');
	
	global $wpdb, $wp_query, $wp_rewrite;
	$kd_ads_campaign = $wpdb->prefix .'kd_ads_campaign';
	$kd_ads_stats = $wpdb->prefix .'kd_ads_stats';


	$id = _sopt('kdid'); // now we can get variables from $_GET variable

	
	$campaign = $wpdb->get_results( "SELECT c.* 
										  FROM ".$kd_ads_campaign." c 
										  WHERE c.id_campaign=".$id);
	
	header("Location: ".$campaign[0]->url);
	header ("Content-Length: 0");


?>