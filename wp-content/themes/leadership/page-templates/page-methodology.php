<?php
//Template Name: Methodology Page


while (have_posts()): the_post();
?>

<style type="text/css">
	.approach-list {
		display:none;
	}

	.approach-list.active {
		display:block;
	}
</style>

<div class="methodology section animatedParent animateOnce">
	<div class="container">
		<h2 class="section-title animated fadeInDown">Methodology and Approach</h2>
		<p class="header-text animated fadeInDown">Part of that makes us different is the range of methodologies we use, and our approach.  It is the combination of the methodologies and approaches that gets results.</p>
	</div>

	<div class="methodology-content animatedParent animateOnce">
		<div class="col-sm-6 col-md-3">
			<div class="gap gap-200"></div>
			<ul class="methodology-links animated fadeInLeft go delay-250">
				<li><a id="methodology">methodology</a></li>
				<li class="active"><a id="approach">approach</a></li>
			</ul>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="methodology-wheel animated fadeInUp go delay-250" style="text-align: center;">
			</div>
		</div>

		<div class="col-sm-12 col-md-3">
			<div class="container-fluid">
				<div class="gap gap-120"></div>
				<div class="methodology-list animated fadeInRight go delay-250">
					<div id="approach-partnering" class="approach-list active">
						<h5><?php the_field( 'partnering_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'partnering_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-structure" class="approach-list">
						<h5><?php the_field( 'structure_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'structure_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-head-heart" class="approach-list">
						<h5><?php the_field( 'head_heart_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'head_heart_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-transformational" class="approach-list">
						<h5><?php the_field( 'transformational_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'transformational_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-tailored" class="approach-list">
						<h5><?php the_field( 'tailored_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'tailored_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-consulting" class="approach-list">
						<h5><?php the_field( 'consulting_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'consulting_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-facilitating" class="approach-list">
						<h5><?php the_field( 'facilitating_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'facilitating_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-assessment" class="approach-list">
						<h5><?php the_field( 'assessment_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'assessment_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-training" class="approach-list">
						<h5><?php the_field( 'training_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'training_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
					<div id="approach-coaching" class="approach-list">
						<h5><?php the_field( 'coaching_title' ); ?></h5>
						<ul>
							<?php while( have_rows( 'coaching_summary' ) ): the_row(); ?>
							<li><?php the_sub_field( 'title' ); ?></li>
							<?php endwhile; ?>
						</ul>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php
endwhile;


 