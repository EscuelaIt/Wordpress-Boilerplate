<!-- post -->
	<article>
		<header><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></header>
		<div class="post-desc">
			<?php the_excerpt() ?>
			<a class="post-entry" href="<?php the_permalink(); ?>">Continúa leyendo hay mas &rarr;</a>
		</div>
	</article>