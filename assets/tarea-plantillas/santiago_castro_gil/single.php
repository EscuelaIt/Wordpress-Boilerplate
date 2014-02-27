<?php get_header (url);?>

<body class="gris">
	<h1>Soy la plantilla para los post o artículos </h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>

<?php get_footer();?>