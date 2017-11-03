<form id="searchform" method="get" action="<?php bloginfo('url'); ?>/">

	<input type="text" placeholder="Search this site..." 

	onblur="if(this.value == '') { this.value = 'Search this site'; }" 

	onfocus="if(this.value == 'Search this site') { this.value = ''; }" name="s" id="s" />

	<input type="submit" id="searchsubmit" value="Search" class="submit" name="searchsubmit"/>

</form>