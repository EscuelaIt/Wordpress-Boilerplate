 <?php 
 	// Esta es la plantilla que carga con el single.php
  ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<?php wp_head(); ?>
</head>
<body class="single">

<?php get_template_part("nav"); ?>