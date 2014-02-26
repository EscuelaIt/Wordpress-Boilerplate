<?php 
/*
Template Name: Plantilla con Nav
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
	<h1>Páginan(page.php): <?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a href="<?php bloginfo(home); ?>">IR AL INICIO</a>
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>

	<?php include("menu-extra.php") ?>
</body>
</html>