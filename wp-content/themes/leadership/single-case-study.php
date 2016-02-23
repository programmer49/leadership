<div class="case-study section">
	<div class="animatedParent animateOnce">
		<div class="container">
		    <h3 class="title-blue animated fadeInDownShort"><?php _e( 'Case Study', 'leadership' ); ?></h3> 
		    <h2 class="section-title animated fadeInDownShort"><?php the_title(); ?></h2>
		</div>
	</div>

	<div class="container">

			<div class="info animatedParent animateOnce">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="where">
							<img class="animated growIn delay-500" src="<?php assets( 'images/location-icon.png' ); ?>" alt="...">
							<p><span>where</span> <?php the_field( 'where' ); ?></p>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="how-many">
							<img class="animated growIn delay-500" src="<?php assets( 'images/many-people.png' ); ?>" alt="...">
							<p><span>how many</span> <?php the_field( 'how_many' ); ?></p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="how-long">
							<img class="animated growIn delay-500" src="<?php assets( 'images/clock-icon.png' ); ?>" alt="...">
							<p><span>how long</span> <?php the_field( 'how_long' ); ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="situation-challenge animatedParent animateOnce">
				<h2 class="section-title animated fadeInDownShort"><?php the_field( 'situation_title' ); ?></h2>

				<div class="col-md-6 animated fadeInLeft">
					<p><i><?php the_field( 'situation_introduction' ); ?></i></p>
				</div>

				<div class="col-md-6 animated fadeInRight">
					<ul class="challenge-list">
						<?php while( have_rows( 'situation_summary' ) ): the_row(); ?>
						<li><?php the_sub_field( 'title' ); ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
				
				<div class="horizontal-gray-line"></div>

				<div class="col-md-6">
						<p><i><?php the_field( 'challenge_introduction' ); ?></i></p>
				</div>

				<div class="col-md-6">
					<ul class="challenge-list">
						<?php while( have_rows( 'challenge_summary' ) ): the_row(); ?>
						<li><?php the_sub_field( 'title' ); ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
			
			</div>

			<div class="impact animatedParent animateOnce">
				<h2 class="section-title animated fadeInDownShort"><?php the_field( 'impact_title' ); ?></h2>

				<div class="col-sm-6 col-md-6">
					<div class="team">
						<img class="animated growIn" src="<?php assets( 'images/team-icon.png' ); ?>" alt="...">
						<h5>team</h5>
						<p><?php the_field( 'team_text' ); ?></p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 b-left">
					<div class="organisation">
						<img class="animated growIn" src="<?php assets( 'images/organisation-icon.png' ); ?>" alt="...">
						<h5>organisation</h5>
						<p><?php the_field( 'organization_text' ); ?></p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 b-top">
					<div class="individual">
						<img class="animated growIn" src="<?php assets( 'images/individual-icon.png' ); ?>" alt="...">
						<h5>individual</h5>
						<p><?php the_field( 'individual_text' ); ?></p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 b-left b-top">
					<div class="years">
						<img class="animated growIn" src="<?php assets( 'images/clock2-icon.png' ); ?>" alt="...">
						<h5>over 3 years</h5>
						<p><?php the_field( 'over_3_years_text' ); ?></p>
					</div>
				</div>
  		</div> 

	  	<div class="case-studies section animatedParent animateOnce">
			<?php echo do_shortcode( '[case-studies title="'. __( get_theme_mod( 'leader_case_studies_text', 'A selection of case studies' ), 'leadership' ) .'"]' ); ?>
		</div>
</div> <!-- end container -->
</div>