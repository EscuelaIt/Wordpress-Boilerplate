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
		<h1>SOY LA PÁGINA SINGLE</h1>
	</section>
    <aside>
		<?php include("sidebar-lateral.php") ?>
	</aside>
	<?php get_footer("footer.php"); ?> 
</body>
</html>
