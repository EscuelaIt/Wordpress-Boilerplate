<?php get_header(); ?>
<div class="especial"></div>
	<h1>Página: <?php the_title(); ?></h1>
	<p><?php the_post(); ?></p>
	<p><?php the_content(); ?></p>
	<a href="<?php bloginfo(home); ?>">Home</a>
</div>	
<?php get_footer(); ?>
</body>
</html>