<?php get_header()?>
	<h1>Esto es el archivo de categorías</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
<?php get_footer(); ?>
</body>
</html>