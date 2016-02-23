<?php
//Template Name: Blog Page


while (have_posts()): the_post();

$q = get_posts( array( 'post_type' => $post_type, 'showposts' => -1, 'suppress_filters' => false ) );

$featured_post = get_post( get_theme_mod( 'leader_featured_article', 0 ) );

?>

<div class="container">
	<div class="blogdetails section animatedParent animateOnce">
		<h2 class="section-title animated fadeInDown"><?php _e( get_theme_mod( 'leader_featured_blog_title', 'The Leadership Blog' ), 'leadership' ); ?></h2>

		<div class="blogdetails-category-list animated fadeInUp">
			<ul class="category-listings">
			<?php  
			$args = array(
				'hide_empty' => 0,
				'taxonomy' => 'category'
				);
			$categories = get_categories( $args ); 
			foreach ( $categories as $i => $cat ): ?>
				<li><a href="#" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
			<?php 
			endforeach; ?>
			</ul>
		</div>

		<div class="blogdetails-banner animated fadeInUpShort">
			<div class="blogdetails-banner-wrap-img" style="background:url('<?php the_field( 'banner', $featured_post->ID ); ?>')no-repeat center center;">
				
				<div class="blogdetails-tagline">
					<h2 class="section-title"><?php echo $featured_post->post_title; ?></h2>

					<p><?php echo get_the_author_meta( 'display_name', $featured_post->post_author ); ?>, <br> <?php echo get_nth_date( $featured_post->post_date ); ?></p>
				</div>
				
			</div>
		</div>
	</div>

	<div class="blog-post animatedParent animateOnce">
		<div class="row">
			<?php foreach ( $q as $i => $p ): 
				$categories = get_the_category( $p->ID );
				$slug = array();

				foreach ($categories as $category) {
					$slug[] = $category->slug;
				}
			?>
			<div class="col-sm-6 col-md-4 <?php echo implode( ' ', $slug ); ?>">
				<div class="blog-post-box animated fadeInUpShort">
					<div class="blog-post-img" style="background: url('<?php attachment_image_src( $p->ID, 'post-thumbnail' ); ?>')no-repeat center center;"></div>

					<div class="blog-post-box-text">
						<h5><?php echo $p->post_title; ?></h5>
						
						<div class="horizontal-line3"></div>
						<p><?php echo get_the_author_meta( 'display_name', $p->post_author ); ?>, <br> <?php echo date('\t\h\e jS \o\f F Y', strtotime( $p->post_date ) ); ?></p>
						<a href="<?php the_permalink( $p->ID ) ?>" class="btn btn-learn-more">Lear More <span><img src="<?php assets( 'images/right-arrow-blue.png'); ?>"></span></a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			
		</div> <!-- end row -->

	</div> <!-- end blog post -->

</div> <!-- end container -->

<?php
	do_action( 'newsletter_and_about_summary' );
endwhile;