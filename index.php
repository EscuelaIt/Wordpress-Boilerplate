<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">

	<!-- Comienza el WP_HEAD -->
	<?php wp_head(); ?>
	<!-- ACABA EL WP_HEAD -->
</head>
<body>
<a class="twitter-timeline" href="https://twitter.com/Wakkos" data-widget-id="439530166520270848">Tweets por @Wakkos</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


	<p>Nombre del Sitio: <?php bloginfo("name"); ?></p>
	<p>Descripción del Sitio: <?php bloginfo("description"); ?></p>
	<p>Versión:  <strong><?php bloginfo("name"); ?></strong></p>
	<h1>HELOWWWWWW</h1>
	<div class="image">
	<img src="<?php bloginfo(template_url); ?>/screenshot.png" alt="">
	</div>

	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
</body>
</html>