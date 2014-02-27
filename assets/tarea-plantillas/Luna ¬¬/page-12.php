<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description") ?> </title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>"> 
</head>
<body class="especial">
	 <?php get_header("header.php"); ?> 
	 <h1>Soy la (page-12.php): <?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a href="<?php bloginfo("home") ?>">IR A INICIO</a>
	<?php get_footer("footer.php"); ?> 
</body>
</html>
