
<footer>
<?php 
	$defaults = array(
	'theme_location'  => 'footer',
	'container'       => 'nav'
);
	wp_nav_menu( $defaults ); 
?>
</footer>
<?php wp_footer(); ?>
</body>
</html>