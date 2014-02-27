<?php 
/*
Template Name: Plantilla con menú
*/
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
	<header>
		<?php get_header("header"); ?>
	</header>
	<section>
		<h1><?php the_title(); ?></h1>
		<?php the_post(); ?>
		<?php the_content(); ?>
		<?php include("menu-bloginfo.php") ?>
		<a href="<?php bloginfo(home); ?>">Ir al Inicio</a>
	</section>
	<footer>
		<?php get_footer("footer") ?>
	</footer>
</body>
</html>