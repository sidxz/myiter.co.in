<?php $search_text = "Search website..."; ?> 
<form id="searchform" action="<?php bloginfo('home'); ?>/" method="get">
	<fieldset>
	    <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" class="search_input" onclick="this.value=''" onblur="if (this.value == '') {this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" />
	    <input type="submit" value="SEARCH" class="search_submit" id="searchsubmit" />
    </fieldset>
</form>
