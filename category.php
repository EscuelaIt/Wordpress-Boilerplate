<?php get_header(); ?>

		<h1><?php the_category(" "); ?></h1>
		<?php if ( have_posts() ) {

			while ( have_posts() ) : the_post(); ?>

				<?php get_template_part("loop") ?>

			<?php endwhile; ?>

			<!-- post navigation -->

		<?php }else{ ?>
			<p>NO hay posts</p>
			<!-- no posts found -->
		<?php } ?>

<?php get_footer(); ?>
