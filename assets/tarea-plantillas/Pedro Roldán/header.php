<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
	<h1><?php bloginfo("name"); ?></h1>
	<h3><?php bloginfo("description"); ?></h3>
	<header>
		<h2>Soy el header</h2>
		<img src="<?php bloginfo(template_url); ?>/header.png" alt="Y yo un plátano">
	</header>
</body>
</html>