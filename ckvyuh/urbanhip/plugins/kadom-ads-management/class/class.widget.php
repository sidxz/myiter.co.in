<?php
/**
* KadomAdsWidget Footer Class
*/
/*******************************************************************************************************************************************/
/*******************************************************************************************************************************************/



class KadomAdsWidget extends WP_Widget {
	/** constructor */
	function KadomAdsWidget() {
		$widget_ops = array('classname' => 'KadomAdsWidget', 'description' => 'Multi-instance Kadom Ads Widget' );
		$this->WP_Widget('kadom_ads', 'Kadom Ads Widget', $widget_ops);
	}

	/** @see WP_Widget::widget */
	/*******************************************************************************************************************************************/
	function widget($args, $instance) {		
		extract($args, EXTR_SKIP);
		
		
		echo $before_widget; 
		if($instance['title'] <> '') echo $before_title.$instance['title'].$after_title;
		/*********************************/
		
		global $wpdb;
		
		display_kd_ads( $instance['ad_zone'], $instance['nb_columns'], $instance['margin'], $instance['url_image'], $instance['show_empty'], $instance['advertise_here'] );
		
		/*********************************/
		echo $after_widget;
	}
	
	
	
	
	

	/** @see WP_Widget::update */
	/*******************************************************************************************************************************************/
	function update($new_instance, $old_instance) {				
		return $new_instance;
	}

	/** @see WP_Widget::form */
	/*******************************************************************************************************************************************/
	function form($instance) {				

		$instance = wp_parse_args( (array) $instance, array( 'title' => '','url_image' => '', 'ad_zone' => '', 'show_empty' => true, 'advertise_here' => false,'margin' => '5','nb_columns' => '2') );
		$title = strip_tags($instance['title']);
		$url_image = strip_tags($instance['url_image']);
		$ad_zone = strip_tags($instance['ad_zone']);
		$show_empty = strip_tags($instance['show_empty']);
		$advertise_here = strip_tags($instance['advertise_here']);
		$margin = strip_tags($instance['margin']);
		$nb_columns = strip_tags($instance['nb_columns']);
		
		
		global $wpdb;
		$kd_ads_zone = $wpdb->prefix .'kd_ads_zone';
		$zones = $wpdb->get_results( "SELECT zone.* FROM ".$kd_ads_zone." zone WHERE zone.widget = 'yes'");
		$current = $wpdb->get_results( "SELECT zone.* FROM ".$kd_ads_zone." zone WHERE zone.id_zone =".attribute_escape($ad_zone));		?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('entry_title'); ?>">
				Select the Ad zone to display: 
				<select id="<?php echo $this->get_field_id('ad_zone'); ?>" name="<?php echo $this->get_field_name('ad_zone'); ?>" class="widefat">
					<option value="<?php echo attribute_escape($ad_zone); ?>"><?php echo $current[0]->name; ?></option>
					
					<?php foreach($zones AS $zone){
								echo '<option value="'.$zone->id_zone.'">'.$zone->name.'</option>';
						}
					?>
				</select>
				</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('url_image'); ?>">
				Custom image URL for empty zone: <input class="widefat" id="<?php echo $this->get_field_id('url_image'); ?>" name="<?php echo $this->get_field_name('url_image'); ?>" type="text" value="<?php echo attribute_escape($url_image); ?>" />
			</label>
		</p>
		<input class="checkbox" type="checkbox" <?php checked($instance['show_empty'], true) ?> id="<?php echo $this->get_field_id('show_empty'); ?>" name="<?php echo $this->get_field_name('show_empty'); ?>" />
		<label for="<?php echo $this->get_field_id('show_empty'); ?>">Show Empty Zone ?</label><br />
		
		<input class="checkbox" type="checkbox" <?php checked($instance['advertise_here'], true) ?> id="<?php echo $this->get_field_id('advertise_here'); ?>" name="<?php echo $this->get_field_name('advertise_here'); ?>" />
		<label for="<?php echo $this->get_field_id('advertise_here'); ?>">Show "Advertise Here" text link ? (bottom of the widget)</label><br />
		
		<br/>
		<p>
			<label for="<?php echo $this->get_field_id('margin'); ?>">
				Margin in px (between Ads): <input class="widefat" id="<?php echo $this->get_field_id('margin'); ?>" name="<?php echo $this->get_field_name('margin'); ?>" type="text" value="<?php echo attribute_escape($margin); ?>" />
			</label>
		</p>
	    <p>
			<label for="<?php echo $this->get_field_id('nb_columns'); ?>">
				Number of columns banners: <input class="widefat" id="<?php echo $this->get_field_id('nb_columns'); ?>" name="<?php echo $this->get_field_name('nb_columns'); ?>" type="text" value="<?php echo attribute_escape($nb_columns); ?>" />
			</label>
		</p>
		
		
		<?php
	}

} // class KadomAdsWidget
/*******************************************************************************************************************************************/
/*******************************************************************************************************************************************/

register_widget("KadomAdsWidget");
?>