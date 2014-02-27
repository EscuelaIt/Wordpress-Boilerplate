<?php get_header(); ?>
<body class="especial">
	<h1>Página Especial: <?php the_title(); ?></h1>
	<p><?php the_post(); ?></p>
	<p><?php the_content(); ?></p>
	<a href="<?php bloginfo(home); ?>">Home</a>
	
</body>
</html>