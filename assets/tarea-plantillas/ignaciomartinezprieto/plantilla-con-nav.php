<?php 
/*
Template Name: Plantilla con Nav
*/
 ?>
 
<?php get_header();?>
<body>
	<h2><?php the_title(); ?></h2>
	<?php the_post(); ?>
	<?php the_content();?>
	
	<?php include("menu-extra.php") ?>
</body>
<?php get_footer();


