<?php get_header("single"); ?>

	
<main class="single">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
        <div id="entrada">
 		<!-- Aqui saco el titulo del post -->
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		<!-- Aqui saco el autor y la fecha de publicacion del post -->
                <p class="postmetadata">
                    Por <?php the_author(', '); ?> el <?php the_time('F jS, Y'); ?> en <?php the_category(', ') ?> | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
                </p>
		<!-- Aqui saco la imagen principal del post -->
             <div class="imagen-post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
             </div>
 		<!-- Aqui el contenido del post -->
            <div class="entry-single">
                <?php the_content(); ?>
            </div>
 
        </div>
 
    <?php endwhile; ?>
 
    <?php else : ?>
 
        <h2>pagina no encontrada</h2>
 
    <?php endif; ?>

</main>


<?php get_footer(); ?>
