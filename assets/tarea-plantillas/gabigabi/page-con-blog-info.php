<?php 
/*
	Template Name: Página con Blog Info
*/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("name"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
<?php get_header(); ?>
<h1>Esta sería la plantilla de la página</h1>
<div class="colDer">
	<?php include("bloginfo-info.php") ?>
</div>
<?php get_footer(); ?>
</body>
</html>