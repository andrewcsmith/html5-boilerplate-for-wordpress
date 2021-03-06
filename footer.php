<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

  <footer>
      <p>
        <?php bloginfo('name'); ?> is proudly powered by
        <a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.
        <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
        and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
      </p>
  </footer>
</div> <!--! end of #container -->

  <!-- Javascript at the bottom for fast page loading -->

	<!-- jQuery script to resize article columns -->
	<script type="text/javascript">
	var height_change_callback = function() {
    var bodyheight = jQuery(window).height();
    jQuery(".article-container").each(function() {
			jQuery(this).css("height", bodyheight-80);
		});
	}
	jQuery(document).ready(height_change_callback);
	// for the window resize
	jQuery(window).resize(height_change_callback);
	
	// Hide all the submenus whenever we depart the area
	function hideSubMenus() {$("ul.sub-menu").hide();}
	$(".primary-menu ul").mouseleave(function() {hideSubMenus();});
	
	// An array of the top-level menus we want to use
	var primaryMenus = [24,13,4];
	$.each(primaryMenus, function(index, value) { 
		$("#menu-item-"+value).mouseenter(function() {
			hideSubMenus();
			$("#menu-item-" + value + " ul.sub-menu").show();
		});
	});
	
	</script>
	
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <!-- WordPress.com does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->
	   
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>

</body>
</html>
