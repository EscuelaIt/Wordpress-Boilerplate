<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php bloginfo("description"); ?></title>
<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
<p>Nombre del Sitio: <?php bloginfo("name"); ?></p>
<p>Descripción del Sitio: <?php bloginfo("description"); ?></p>
<p>Versión: <strong><?php bloginfo("name"); ?></strong></p>
<h1>Soy la plantilla de la home</h1>
<div class="image">
<img src="<?php bloginfo(template_url); ?>/screenshot.png" alt="">
</div>

<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
</body>
</html>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>