<?php 
/*
Template Name: Plantilla con Sidebar
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
		<div><?php get_header(header.php); ?></div>
	</header>

	<div id="contenido_sidebar">
		<section>
			<?php the_post(); ?>
			<?php the_content(); ?>
			<!--<h2>Página (page.php): <?php the_title(); ?></h2>-->

			<aside>
			<?php include("funciones-bloginfo.php"); ?> 
			</aside>
		</section>

		<div id="volver"><a href="<?php bloginfo(home); ?>">IR AL INICIO</a></div>
	</div>
	
	<footer>
		<div><?php get_footer(footer.php); ?></div>
	</footer>

</body>
</html>