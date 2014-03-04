<?php get_header(); ?>
<body>
	<!-- LOOP 1 -->
	<?php rewind_posts(); ?>
		
		<?php 
		
		if ( is_home() ) {
			query_posts( 'cat=-2' );
		} 
		?>

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
			<p>NO hay posts en el LOOP 1</p>
			<!-- no posts found -->
		<?php } ?>

			<hr>
		<!-- LOOP 2 -->
		<?php rewind_posts(); ?>
		<?php query_posts("cat=1,2,3"); ?>
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