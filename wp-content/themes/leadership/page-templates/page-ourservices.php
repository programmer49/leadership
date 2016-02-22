<?php
//Template Name: Our Services Page


while (have_posts()): the_post();
?>



<div class="section section-l1 animatedParent animateOnce" id="next-section">
  <div class="container">
     <?php echo do_shortcode( '[leadership-group-services title="'. get_theme_mod( 'leader_group_services_text', get_field('second_section_title_line') ) .'"]' ); ?>
  </div>
</div>




<?php
endwhile;