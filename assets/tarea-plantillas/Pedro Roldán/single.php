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
	<h1>Soy una Entrada o Artículo (single.php): </h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
	<footer>
		<?php get_footer("footer") ?>
	</footer>
</body>
</html>