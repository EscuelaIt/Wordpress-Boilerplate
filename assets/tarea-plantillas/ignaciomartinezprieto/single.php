<?php get_header()?>
<h2><?php the_title();?></h2>
<?php the_post(); ?>	
<div class="contenedor">
	<?php the_content();?>
</div>
<?php get_footer();?>