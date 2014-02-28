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

	<div id="contenido">
		<h2>INDEX.PHP</h2>
		<h3>Diseño de themes para WORDOPRESS con ESCUELTA IT.<br>Soy la plantilla de index.php</h3>
	</div>

	<footer>
		<div><?php get_footer(footer.php); ?></div>
	</footer>

	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
</body>
</html>