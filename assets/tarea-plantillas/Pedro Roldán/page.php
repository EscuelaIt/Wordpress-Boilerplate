<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
<header>
	<?php include("header.php") ?>
</header>
<section>
	<h1>Página (page.php): <?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a href="<?php bloginfo(home); ?>">Inicio</a>
</section>
<footer>
	<?php include("footer.php") ?>
</footer>
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
</body>
</html>