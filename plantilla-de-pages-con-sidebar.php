<?php 
/*
Template Name: Plantilla de pages con sidebar
*/ ?>
<?php get_header()?>
	<h1>Página: <?php the_title(); ?></h1>
	<p><?php the_post(); ?></p>
	<p><?php the_content(); ?></p>
	<a href="<?php bloginfo(home); ?>">Home</a>
	<?php 
	include("sidebar.php") ?>
</body>
</html>