<?php get_header(); ?>
<body>
	<!-- LOOP 1 -->

<?php
      $args = array('post_type' => 'attachment', 'numberposts' => -1);
       $attachments = get_posts($args);
      if ($attachments) {
        foreach ($attachments as $attachment) {
          $post_id = $attachment->post_parent;
          echo "<li>" .wp_get_attachment_image($attachment->ID, ''). "</li>";
         }
      }
    ?>

<?php
      $args = array('post_type' => 'attachment', 'numberposts' => -1);
       $attachments = get_posts($args);
      if ($attachments) {
        foreach ($attachments as $attachment) {
          $post_id = $attachment->post_parent;
          echo "<li>" .wp_get_attachment_url($attachment->ID, ''). "</li>";
         }
      }
    ?>
    
		<!-- LOOP 2 -->
		

<?php get_footer(); ?>