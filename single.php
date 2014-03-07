<?php get_header("single"); ?>

	
<main>
		
	<?php the_post(); ?>
 
        <article>
 			<header>
 			<!-- Aqui saco el titulo del post -->
            <h1><?php the_title(); ?></h1>
			<!-- Aqui saco el autor y la fecha de publicacion del post -->
                <small>
                    Por <?php the_author(', '); ?> el <?php the_time('F jS, Y'); ?> en <?php the_category(', ') ?> | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
                </small>
         	</header>       
 			<!-- Aqui el contenido del post -->
			<div class="single-content">
                <?php the_content(); ?>
            </div>

 
        </article>

</main>


<?php get_footer(); ?>
