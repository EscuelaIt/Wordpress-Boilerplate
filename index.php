<!-- Este es mi Index, la homo de mi web. Incluyo 3 archivos que juntos renderizan la home -->
	<!-- Obtenemos el header -->
<?php get_header(); ?>

<body>
	<header>
		<?php get_template_part("nav"); ?>
	</header>
	<section>
		<!-- Obtenemos el Loop de la home -->
	<?php get_template_part("the_loop"); ?>
	</section>

	<aside>
	<!-- Obtenemos el Aside o Sidebar -->
	<?php get_sidebar(); ?> 
	</aside>

	<footer>
	<!-- Obtenemos el Footer -->
	<?php get_footer(); ?>
	</footer>

</body>
</html>

	
