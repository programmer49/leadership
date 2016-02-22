<?php
//Template Name: Our Work Page


while (have_posts()): the_post();
?>


<div class="container">
	<div class="case-studies section animatedParent animateOnce">
		<?php echo do_shortcode( '[case-studies title="A selection of case studies"]' ); ?>
	</div>
</div>


<?php
endwhile;