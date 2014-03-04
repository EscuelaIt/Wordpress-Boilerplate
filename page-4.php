<?php get_header("especial"); ?>


	<?php get_template_part( "blocks/bloque-temperatura", "version2" ); ?>
	

		<?php 
		
		if ( is_home() ) {
			query_posts( 'cat=-2' );
		} 
		?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<?php the_title(); ?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>






	<h1>Página Especial (page-4.php): <?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a href="<?php bloginfo(home); ?>">IR AL INICIO</a>

<?php get_search_form(); ?>

<?php get_sidebar(); ?>

<?php get_sidebar("version2"); ?>

<?php get_footer("algo"); ?>