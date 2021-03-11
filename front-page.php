<?php
 
get_header();
?>
 
 <!-- widget area-->
 <div class="sidebar-column">
			<?php dynamic_sidebar( 'rightsidebar' ) ?>
 </div>
<!-- end widget area-->
</div><!-- end container class-->
<!-- widget area2-->
<div class="bottomsidebar-column">
			<?php dynamic_sidebar( 'bottomsidebar' ) ?>
 </div>
<!-- end widget area2-->



<?php
get_footer();
 
?>