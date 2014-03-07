<main>
<?php if ( have_posts() ) {
	while ( have_posts() ) : the_post(); ?>
		<!-- //Abrimos elemento o contenedor que contiene la información del post -->
		<article>
			<header>
				<h1><?php the_title(); ?></h1>
				<small><?php the_author(); ?></small> · <small><?php the_date(); ?></small>
			</header>
		

			<?php
			// Nos muestra las imágenes del post
			$args = array( 'post_type' => 'attachment', 'post_parent' => get_the_ID() );
			$attachments = get_posts($args);
			if ($attachments) {
				foreach ($attachments as $attachment) {
					$post_id = $attachment->post_parent;
					echo "<img src='" .wp_get_attachment_url($attachment->ID, 'medium'). "' />";
				}
			}
			?>
			<!-- Imprime un resumen de la entrada -->
			<?php the_excerpt(); ?>
			
			<footer>
				<small><strong>Etiquetas:</strong>	<?php the_tags("-"); ?>	</small>
				<small><strong>Categorías:</strong> <?php the_category("-"); ?></small>
			</footer>
	</article>

<?php endwhile; ?>


<?php }	else { ?>
	<p>NO hay posts</p>
<?php } ?>

</main>