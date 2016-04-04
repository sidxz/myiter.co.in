<?php
#==================================================================
#
#	Added functionality and custom functions for theme
#
#==================================================================



#-----------------------------------------------------------------
# Retrieve database options with $shortname
#-----------------------------------------------------------------


// Get theme variables, default action is echo 
//................................................................

//	$option = the option name in the database (without $shortname)
// 	$echo = print the return value (true, false). Default: true
// 	$default = value returned is no value exists in database

function theme_var($option, $act = 'echo', $default = '') {
	global $shortname;

	if ($default !== '') {
		$theme_option = get_option($shortname.$option, $default);
	} else {
		$theme_option = get_option($shortname.$option);
	}
	
	switch ($act){
		case "return":
			return $theme_option;
			break;
		default:
			echo $theme_option;
			break;
	}
}

// Shortcut for options without echo 
//................................................................

function get_theme_var($option, $default = '') {
	return theme_var($option, 'return', $default);
}



#-----------------------------------------------------------------
# Pagination function (<< 1 2 3 >>)
#-----------------------------------------------------------------

function get_pagination($range = 4) {

	// $paged - number of the current page
	global $paged, $wp_query, $firstPage;

	// How many pages do we have?
	if ( !$max_page ) {
		$max_page = $wp_query->max_num_pages;
	}
	
	// We need the pagination only if there are more than 1 page
	if($max_page > 1) {

		echo '<div class="pagination">';

		if (!$paged){ $paged = 1;}
		
		// On the first page, don't put the First page link
		// if($paged != 1){ echo "<a href=" . get_pagenum_link(1) . "> First </a>"; }
		
		// For home page, posts on page may be different from page 2, 3, etc. To prevent
		// inacurate page numbering, only show "next page" link. The query must also be
		// taking this into account and be modified with offset for other pages
		if ($firstPage && is_home()) {
			if($max_page > 1) {
				// show next link on home page
				next_posts_link('More &raquo; ');
			}
		} else {
			
			// another special feature of the home page... we offset the count (paged) using a -1 because the second page 
			// of results is actaually the first page minus the posts on the home page. This makes the offset a lot
			// easier to do. So, when we show page 2 on page 3, it means we may not have the link to page 4. To ensure we 
			// have all links to pages we need to add 1 to the total # of pages!
			if (is_home()) { 
				$max_page = $max_page + 1;
				if (!$firstPage) {
					$paged = $paged + 1;	// needs to be upped 1 to counter act the subtraction on home page (or the wrong # shows active :)
				}
			}
			
			// To the previous page
			previous_posts_link(' &laquo;');
			
			// We need the sliding effect only if there are more pages than is the sliding range
			if ($max_page > $range) {
			
			  // When closer to the beginning
				if ($paged < $range) {
					for($i = 1; $i <= ($range + 1); $i++) {
						echo "<a href='" . get_pagenum_link($i) ."'";
						if($i==$paged) echo "class='current'";
						echo ">$i</a>";
					}
				} elseif($paged >= ($max_page - ceil(($range/2)))){
					// When closer to the end	
					for($i = $max_page - $range; $i <= $max_page; $i++){
						echo "<a href='" . get_pagenum_link($i) ."'";
						if($i==$paged) echo "class='current'";
						echo ">$i</a>";
					}
				} elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
					// Somewhere in the middle
					for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
						echo "<a href='" . get_pagenum_link($i) ."'";
						if($i==$paged) echo "class='current'";
						echo ">$i</a>";
					}
				}
			} else{
				// Less pages than the range, no sliding effect needed
				for($i = 1; $i <= $max_page; $i++){
					echo "<a href='" . get_pagenum_link($i) ."'";
					if($i==$paged) echo "class='current'";
					echo ">$i</a>";
				}
			}
			
			// Next page
			next_posts_link('&raquo; ');
			
		}
		// On the last page, don't put the Last page link
		//if($paged != $max_page){ echo " <a href=" . get_pagenum_link($max_page) . "> Last </a>"; }
		
		echo '</div>';
	}
}

// Function to allow paging to work with offsets (needed for home page)
//................................................................

function my_post_limit($limit) {
	global $paged, $myOffset;
	if (empty($paged)) {
			$paged = 1;
	}
	$postperpage = intval(get_option('posts_per_page'));
	$pgstrt = ((intval($paged) -1) * $postperpage) + $myOffset . ', ';
	$limit = 'LIMIT '.$pgstrt.$postperpage;
	return $limit;
}


#-----------------------------------------------------------------
# Main Menu Functions
#-----------------------------------------------------------------


// Retrieve variables for the main menu from the database
//................................................................

$_MM_ItemLevels = get_option($shortname.'MM-ItemLevels');
$_MM_ItemLevels = $_MM_ItemLevels['MainMenu'];
$_MM_ItemValues = get_option($shortname.'MM-ItemValues');


// Print the main menu
//................................................................

function printMenuItems($list = false, $options = false, $isChild = false) {
	
	if (!is_array($list)) {$list = $GLOBALS['_MM_ItemLevels'];}
	if (!is_array($options)) {$options = $GLOBALS['_MM_ItemValues'];}
	
	if (is_array($list)) {
		foreach ($list as $key => $value) {
		
			// get variables setup
			$id = $value['id'];
			$className = '';
			$URL = '';
	
			// check for the type of item being printed
			if ($options['mm-'. $id .'-linkTitle'] == 'mm-separator') {
				if ($isChild == false) {
					?>
					</ul>
					<div class="mmDivider"><!-- separator --></div>				
					<ul class="sf-menu">
					<?php
				} else {
					?>
					<li class="separator-item"><hr /></li>	
					<?php
				}				
			} else {
			
				// get link path
				switch ($options['mm-'. $id .'-linkType']) {
					case 'page':
						$URL = get_page_link($options['mm-'. $id .'-linkPage']);
						break;
					case 'category':
						$URL = get_category_link($options['mm-'. $id .'-linkCategory']);
						break;
					case 'url':
						$URL = $options['mm-'. $id .'-linkURL'];
						break;
					default:
						$URL = "#";
						break;
				} // end switch linkType
							
				?>
				<li class="<?php echo $className ?>">
					<a href="<?php echo htmlspecialchars_decode(stripslashes($URL)) ?>" title="<?php echo $options['mm-'. $id .'-linkDescription'] ?>"><?php echo htmlspecialchars_decode(stripslashes($options['mm-'. $id .'-linkTitle'])) ?></a>
					<?php
	
					
					// check for child elements
					if (is_array($value['children'])) {
						echo "<ul>";
						printMenuItems($value['children'], $options, true);
						echo "</ul>";
					} 
					?>
				</li>
			<?php
			} // end if (separator) else 
		}
	}
}
?>