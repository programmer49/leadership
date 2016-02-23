
<div class="development section animatedParent animateOnce">
	<div class="container">
		<h2 class="section-title animated fadeInDown delay-250"><?php the_title(); ?></h2>
		<p class="motto animated fadeInDown"><?php the_field( 'sub_title' ); ?></p>
	</div>

	<div class="development-list section">
		<div class="container">
			<div class="col-md-6 animated fadeInLeft">
				<div class="engage-us">
					<h4><?php the_field( 'left_section_title' ); ?></h4>
					<ul>
						<?php while( have_rows( 'left_section_bullets' ) ): the_row(); ?>
						<li><?php the_sub_field( 'title' ); ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>

			<div class="col-md-6 animated fadeInRight">
				<div class="expect">
					<h4><?php the_field( 'right_section_title' ); ?></h4>
					<ul>
						<?php $cnt=1; while( have_rows( 'right_section_list' ) ): the_row(); ?>
						<li><span class="number-bullets"><?php echo $cnt; ?></span><span><?php the_sub_field( 'title' ); ?></span> <?php the_sub_field( 'description' ); ?></li>
						<?php $cnt++; endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="leadership-system animatedParent animateOnce">
	<div class="container">
		<div class="row">
			<div class="col-md-3 animated fadeInLeft">
				<h5><?php the_field( 'system_content_title_1' ); ?></h5>
				<p><?php the_field( 'system_content_description_1' ); ?></p>

				<div class="gap gap-50"></div>

				<h5><?php the_field( 'system_content_title_2' ); ?></h5>
				<p><?php the_field( 'system_content_description_2' ); ?></p>
			</div>

			<div class="col-md-6 animated growIn">
				<img src="/wp-content/themes/leadership/assets/images/wheel-system.png" alt="">
			</div>

			<div class="gap gap-50"></div>

			<div class="col-md-3 text-right  animated fadeInRight">
				<h5><?php the_field( 'system_content_title_3' ); ?></h5>
				<p><?php the_field( 'system_content_description_3' ); ?></p>

				<div class="gap gap-50"></div>

				<h5><?php the_field( 'system_content_title_4' ); ?></h5>
				<p><?php the_field( 'system_content_description_4' ); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="section section-l1 animatedParent animateOnce" id="next-section">
  <div class="container">
      <?php echo do_shortcode( '[leadership-group-services title="'. get_theme_mod( 'leader_group_services_text', 'THE LEADERSHIP GROUP SERVICES' ) .'"]' ); ?>
  </div>
</div>

