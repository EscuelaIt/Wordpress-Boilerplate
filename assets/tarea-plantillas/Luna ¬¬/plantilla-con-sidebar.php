<?php 
/*
Template Name: Plantilla con sidebar
*/
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
	 <?php get_header("header.php"); ?> 
	<section>
		<h3>CONTENT</h3>
	</section>
    <aside>
		<?php include("sidebar-lateral.php") ?>
	</aside>
	 <?php get_footer("footer.php"); ?> 
	
</body>
</html>