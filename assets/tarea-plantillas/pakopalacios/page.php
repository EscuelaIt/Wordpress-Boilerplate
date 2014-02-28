<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
	<header>
		<?php get_header(header.php); ?>
	</header>
	
	<div id="contenido">
		<h2>PAGE.PHP</h2>
		<?php the_post(); ?>
		<?php the_content(); ?>
		
	</div>

	<footer>
		<?php get_footer(footer.php); ?>
	</footer>
</body>
</html>