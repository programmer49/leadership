<?php
//Template Name: Our Work Page


while (have_posts()): the_post();
?>


<div class="container">
	<div class="case-studies section animatedParent animateOnce">
		<?php echo do_shortcode( '[case-studies title="'. __( get_theme_mod( 'leader_case_studies_text', 'A selection of case studies' ), 'leadership' ) .'"]' ); ?>
	</div>
</div>


<?php
endwhile;