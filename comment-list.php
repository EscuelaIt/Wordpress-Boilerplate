<h2><?php echo get_comments_number(); ?> comentarios</h2>
<?php if ( have_comments() ) : ?>
<ul class="commentlist">
	<?php
		$args = array(
			'avatar_size'       => 32,
			'style'      => 'ul',
			'callback' => 'html_comentarios'
		);
		wp_list_comments($args);
	?>
</ul>
<?php endif; ?>