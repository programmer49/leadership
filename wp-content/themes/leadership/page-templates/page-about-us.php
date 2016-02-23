<?php
//Template Name: About Us Page


while (have_posts()): the_post();
?>

<div class="about-us section">
	<div class="container">
		<h2 class="section-title"><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>

	<div class="what-we-do section section-l3 animatedParent animateOnce">
    <div class="content">
        <div class="content-left">
	        <h2 class="section-title section-title-white animated fadeInUp delay-250 go"><?php the_field( 'what_we_do_title' ); ?></h2>
	        <div class="description animated fadeInUp delay-500 go">
	            <?php the_field( 'what_we_do_content' ); ?>
	        </div>

					<div class="row">
						<div class="col-md-12">
							<ul>
								<?php foreach( get_field( 'what_we_do_keyword' ) as $i => $p ):; ?>
								<li><?php echo $p['title']; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>

    		</div>
    		<div class="content-right" style="background-image: url('<?php the_field( 'picture' ); ?>');"></div>
    </div>
	</div>

	<div class="container">
		<div class="our-philosophy section">
			<h2 class="section-title"><?php the_field( 'our_philosophy_title' ); ?></h2>
			<?php the_field( 'our_philosophy_content' ); ?>
		</div>
	</div>

	<div class="the-leadership-team">
		<div class="container">
			<h2 class="section-title"><?php the_field( 'team_title' ); ?></h2>
			<p class="header-text"><?php the_field( 'team_content' ); ?></p>
			<?php $q = get_posts( array( 'post_type' => 'team', 'post__in' => get_field( 'members' ) ) ); ?>
			<ul class="the-leadership-team-list">
				<div class="row">
				<?php foreach ( $q as $i => $p ): ?>
					<li class="col-sm-6 col-md-4 the-leadership-team-list-item">
						<div class="our-team-link-holder">
							<div class="our-team-img-wrap" style="background:url('<?php attachment_image_src( $p->ID, 'post-thumbnail' ); ?>') no-repeat center center"></div>
							<p class="name"><?php echo $p->post_title; ?></p>
							<p class="position"><?php the_field( 'position', $p->ID ); ?></p>
						</div>
	        		</li>
	    		<?php endforeach; ?>

	        

	        <li class="col-sm-6 col-md-4 the-leadership-team-list-item">
	          <div class="our-team-link-holder">
	            <div class="consulting-team">
	            	<h4 class="consulting-team-header"><?php the_field(  'last_box_title' ); ?></h4>
		            <ul>
		            	<?php while ( have_rows( 'back_office_staff' ) ): the_row(); ?>
		            	<li><strong><?php the_sub_field( 'name' ); ?></strong> (<?php the_sub_field( 'position' ); ?>)</li>
		            	<?php endwhile; ?>
		            </ul>

		            <a href="<?php the_permalink( get_page_by_path( 'our-team' ) ); ?>" class="btn btn-primary btn-orange consulting-team-link"><?php the_field( 'last_box_button_text' ); ?></a>
	            </div>
	          </div>
	        </li>

				</div>  <!-- end row -->
			</ul>  <!-- end ul -->

		</div> <!-- end container -->
	</div> <!-- end the leadership team -->

	<div class="our-clients section">
		<div class="container">
			
			<h2 class="section-title"><?php the_field( 'client_title' ); ?></h2>

			<ul class="nav nav-tabs clients-list">
				<?php foreach ( get_field( 'clients' ) as $i => $p ):?>
			    <li class="<?php echo $i == 0 ? 'active' : ''; ?> col-sm-6 col-md-3">
			    	<a data-toggle="tab" href="#client-<?php echo $i; ?>"><img src="<?php echo $p['logo']; ?>" class="grayscale" alt=""></a>
			    </li>
				<?php endforeach ?>
		  	</ul>

		  <div class="tab-content client-testimonial">
		  	<?php foreach ( get_field( 'clients' ) as $i => $p ): ?>
		    <div id="client-<?php echo $i; ?>" class="tab-pane fade in <?php echo $i == 0 ? 'active' : ''; ?>">
		      <p>“<?php echo $p['testimonial']; ?>"</p>
		      <div class="testimonial-author">
		      	<p><?php echo $p['name']; ?><br>
		      	<?php echo $p['position']; ?> <br>
		      	<?php echo $p['company']; ?></p>
		      </div>
		    </div>
			<?php endforeach; ?>
		  </div>
			<a href="<?php the_permalink( get_page_by_path( 'our-services' ) ); ?>" class="btn btn-primary btn-orange discover-offers"><?php the_field( 'discover_button_text' ); ?></a>
		</div>
	</div> <!-- end our clients -->

	<div class="our-partners section">
		<div class="container">
			<h2 class="section-title"><?php the_field( 'partners_title' ) ?></h2>
			<div class="row">
				<?php foreach ( get_field( 'partners' ) as $i => $p ): ?>
				<div class="col-sm-6 col-md-4">
					<div class="partners-img-wrap">
						<div class="partners-img" style="background: url('<?php echo $p['logo']; ?>')no-repeat center center;"></div>
					</div>
					<p><?php echo $p['descirption']; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<div class="open-positions section">
		<div class="container">
			<h2 class="section-title"><?php the_field( 'join_us_title' ); ?></h2>

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php foreach( get_field( 'jobs' ) as $i => $j ): ?>
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading-1">
				      <h4 class="panel-title">
				        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>"><?php echo $j['title']; ?></a>
				      </h4>
				    </div>
				    <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse <?php echo $i == 0 ? 'in' : ''; ?>" role="tabpanel" aria-labelledby="heading-1" aria-expanded="<?php echo $i == 0 ? true : false; ?>">
				      <div class="panel-body">
				       	<?php echo $j['description']; ?>

				       	<p class="for-more-info">
				       		for more info,<a href="mailto:<?php echo $j['email']; ?>"><?php echo $j['email']; ?></a>
				       	</p>
				      </div>
				    </div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

</div> <!-- end about us -->


<?php
endwhile;