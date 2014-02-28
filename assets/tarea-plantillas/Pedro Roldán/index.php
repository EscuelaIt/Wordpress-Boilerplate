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
		<h2>Soy el index (index.php)</h2>
		<div class="image">
			<img src="<?php bloginfo(template_url); ?>/screenshot.png" alt="">
		</div>
	</section>
	
	<footer>
		<?php get_footer("footer") ?>
	</footer>
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
</body>
</html>