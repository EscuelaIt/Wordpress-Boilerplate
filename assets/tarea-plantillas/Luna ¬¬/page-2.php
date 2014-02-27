<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description") ?> </title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>"> 
</head>
<body class="especial">
	<h1>página especial (page-2.php): <?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a hrer="<?php bloginfo(home) ?>">IR A INICIO</a>

</body>
</html>
