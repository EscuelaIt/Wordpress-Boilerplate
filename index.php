<?php get_header(); ?>
<body>
	<p>Nombre del Sitio: <?php bloginfo("name"); ?></p>
	<p>Descripción del Sitio: <?php bloginfo("description"); ?></p>
	<p>Versión:  <strong><?php bloginfo("name"); ?></strong></p>
	<h1>HELOWWWWWW</h1>
	<div class="image">
	<img src="<?php bloginfo(template_url); ?>/screenshot.png" alt="">
	</div>


	<?php if ( have_posts() ) {

			while ( have_posts() ) : the_post(); ?>

				<!-- post -->
				<article>
					<header><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></header>
					<?php //the_excerpt() ?>
					<?php the_date('d \d\e F , Y') ?> <?php the_time() ?> por <?php the_author() ?>
					<?php the_content(" Más! "); ?>

					<p></p>
					<p></p>
					<p><?php the_excerpt(); ?></p>

					<p><?php the_content();?></p>
				</article>

			<?php endwhile; ?>

			<!-- post navigation -->

		<?php }else{ ?>
			<p>NO hay posts</p>
			<!-- no posts found -->
		<?php } ?>

<?php get_footer(); ?>