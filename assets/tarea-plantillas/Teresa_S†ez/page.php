<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php bloginfo("description"); ?></title>
<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
<h1>Soy la plantilla de página <?php the_title(); ?></h1>

<a href="<?php bloginfo(home); ?>">IR AL INICIO</a>
<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
</body>
</html>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>