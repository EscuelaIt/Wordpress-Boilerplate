<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
<?php get_header(); ?>
<h1>Y es el index. Hola! Este es mi primer tema .... </h1>

<p>

Y el tema se llama: <?php bloginfo(name); ?> <br />
Y la descripción: <?php bloginfo(description); ?> <br />
Y la dirección de wordpress: <?php bloginfo(wpurl); ?> <br />
Y la dirección del sitio: <?php bloginfo(url); ?><br />
Y la dirección del sitio: <?php bloginfo(url); ?><br />
Esta es la versión de WP <?php bloginfo(version); ?><br />
Y mi sitio está en <?php bloginfo(language); ?> <br />
La dirección de la hoja de estilos es: <?php bloginfo(stylesheet_url) ?> <br />
Para referenciar la ruta de mi tema: <?php bloginfo(template_url) ?> <br />
</p>
<?php get_footer(); ?>
</body>
</html>