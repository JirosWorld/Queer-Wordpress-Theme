<p>~</p>	
	<footer>
		<p>This is my footer</p>
		<?php 
		/* example 1 - nav menu with (top level) menu items 1 to 3 */
$args = array(
  'theme_location' => 'primary',
  'menu_item_start' => 1,
  'menu_item_end' => 1
);
wp_nav_menu($args);

$args = array(
  'theme_location' => 'primary',
  'menu_item_start' => 3,
  'menu_item_end' => 3
);
wp_nav_menu($args);

$args = array(
  'theme_location' => 'primary',
  'menu_item_start' => 2,
  'menu_item_end' => 2
);
wp_nav_menu($args);
 ?>
	</footer>
	
	<?php wp_footer(); ?>
	
	</body>
</html>