<?php get_header("page"); ?>


<?php get_template_part("the_loop-page"); ?>

<hr /><hr />

<?php
	// The Query
	$args = array(
		'category_name' => 'entrantes',
		'posts_per_page' => 4
	);

	query_posts( $args );

	// The Loop
	while ( have_posts() ) : the_post();
	?>
		<?php the_title(); ?><br />
		Posted On: <?php the_date(); ?>
	  <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
	<?php
	endwhile;

	// Reset Query
	wp_reset_query();
?>

<hr /><hr />

<?php get_footer("page"); ?>