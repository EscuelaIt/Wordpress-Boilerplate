<?php get_header (url);?>

<body>
	<h1>Página de contacto <?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a href="<?php bloginfo(home); ?>">home</a><!-- con esta función php se crea un enlace a la página de inicio -->
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>

<?php get_footer();?>
