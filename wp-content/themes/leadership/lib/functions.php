<?php

function get_nth_date( $date ) {
	return date('\t\h\e jS \o\f F Y', strtotime( $date ) );
}


function assets( $file, $echo = true ) {
	$file = get_template_directory_uri() . '/assets/'. $file;
	if ( ! $echo ) return $file;

	echo $file;
}

function get_posts_array( $post_type = 'post' ) {
	$q = get_posts( array( 'post_type' => $post_type, 'showposts' => $showposts, 'suppress_filters' => false ) );

	$arr = array();
	foreach ($q as $i => $p) {
		$arr[$p->ID] = $p->post_title;
	}

	return $arr;

}

function attachment_image_src( $post_id, $size = 'thumbnail', $placeholder = '', $echo = true ) {
	$placeholder = '';
	if ( has_post_thumbnail( $post_id ) ) {
		$placeholder = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size )[0];
	}

	if ( ! $echo ) return $placeholder;


	echo $placeholder;
}

function dist_img($name, $echo = true) {
  $img = get_stylesheet_directory_uri() . '/dist/images/' . $name;

  if (!$echo) return $img;

  echo $img;
}


function recent_blog_articles_shortcode_handler($atts, $content = null) {
	extract(shortcode_atts( array(
		'title' => 'Recent Blog Articles',
		'showposts' => 2
	), $atts ));



	$q = get_posts(array('post_type' => 'post', 'showposts' => $showposts, 'suppress_filters' => false));
	

	if (count($q)) {
		$output .= '<h2 class="section-title animated fadeInUp delay-250">'. $title .'</h2>';
		$output .= '<div class="content">';
		foreach ($q as $i => $s) {
			$image = wp_get_attachment_image_src(get_post_thumbnail_id($s->ID), 'post-thumbnail')[0];
			$name = get_the_author_meta('user_firstname', $s->post_author) .' '. get_the_author_meta('user_lastname', $s->post_author);

			if (trim($name) == '') {
				$name = get_the_author_meta('display_name', $s->post_author);
			}

	        $output .= '<div class="col-md-6 content-article animated fadeInUp delay-500">';
	            $output .= '<div class="content-left">';
	                $output .= '<div class="col-md-6 content-article-img" style="background-image: url('. $image .');"></div>';
	                $output .= '<div class="col-md-6 content-article-desc">';
	                    $output .= '<h3 class="article-title">'. $s->post_title .'</h3>';
	                    $output .= '<hr>';
	                    $output .= '<div class="description">';
	                        $output .= '<p>'. $name .',<br> the '. date('jS F Y', $s->post_date) .'</p>';
	                    $output .= '</div>';
	                    $output .= '<a href="'. get_permalink($s->ID) .'" class="btn btn-learn">Learn More <span><img src="'. dist_img('arrow-down-blue.png', false) .'"></span></a>';
	                $output .= '</div>';
	            $output .= '</div>';
	        $output .= '</div>';
		}

	}


	$output .= '</div>';

	return $output;
}

add_shortcode('recent-blog-articles', 'recent_blog_articles_shortcode_handler');

add_filter('show_admin_bar', '__return_false');


add_shortcode( 'leadership-group-services', 'leadership_group_services_shortcode_handler');

function leadership_group_services_shortcode_handler( $attr ) {

	extract(shortcode_atts( array(
		'title' => 'THE LEADERSHIP GROUP SERVICES',
	), $atts ));

	$q = get_posts(array('post_type' => 'service', 'showposts' => -1, 'order' => 'asc', 'suppress_filters' => false)); 


	$output = '';
	$output .= '<h2 class="section-title animated fadeInUp delay-250">'. $title .'</h2>';
      $output .= '<div class="leadership-list-wrapper">';
      	
      	if ( count( $q ) > 0 ) {
         $output .= '<ul class="leadership-list animated fadeInUp delay-500">';
          	foreach ( $q as $i => $s ) {
            $output .= '<li>';
            	$output .= '<a href="'. get_permalink( $s->ID ) .'">';
            	$output .= '<div class="leadership-list-wrap leadership-list-wrap1">';
	            	$output .= '<div class="leadership-list-img-wrap">';
	            		$output .= '<div class="leadership-list-img" style="background-image: url(\''. attachment_image_src( $s->ID, 'full', '', false ) .'\');"></div>';
	            	$output .= '</div>';
		                $output .= '<h3 class="leadership-list-title">'. $s->post_title .'</h3>';
		                $output .= '<div class="leadership-list-desc">';
		                	$output .= '<hr>';
		                	$output .= '<div class="description">';
		                	$output .= '<p>'. $s->post_content .'</p>';
		                	$output .= '</div>';
	            		$output .= '</div>';
        		$output .= '</div>';
    		$output .= '</a>';
    		$output .= '<li>';
    		}
          $output .= '</ul>';
      }
    $output .= '</div>';

    return $output;
}


add_shortcode( 'case-studies', 'case_studies_shortcode_handler' );

function case_studies_shortcode_handler( $atts ) {

	extract(shortcode_atts( array(
		'title' => 'A SELECTION OF CASE STUDIES',
	), $atts ));

	$q = get_posts(array('post_type' => 'case-study', 'showposts' => -1, 'order' => 'asc', 'suppress_filters' => false)); 


	$output = '';
	$output .= '<h2 class="section-title animated fadeInUp delay-250">'. $title .'</h2>';
		if ( count( $q ) > 0 ) {
		$output .= '<ul class="case-studies-list animated fadeInUp delay-500">';
			foreach ( $q as $i => $s ) {
				$output .= '<li>';
					$output .= '<div class="casestudies-list-wrap">';
						$output .= '<div class="casestudies-list-img-wrap">';
							$output .= '<div class="casestudies-list-img" style="background:url(\''. attachment_image_src( $s->ID, 'full', '', false ) .'\')no-repeat center top;"></div>';
						$output .= '</div>';
						$output .= '<h3 class="leadership-list-title">'. $s->post_title .'</h3>';
						$output .= '<a href="'. get_permalink( $s->ID ) .'" class="casestudy-field">'. get_field( 'case_study_field', $s->ID ) .'</a>';
					$output .= '</div>';
				$output .= '</li>';
			}
		}

	$output .= '</ul>';

	return $output;
}

add_shortcode( 'featured-blog-post', 'featured_blog_post_shortcode_handler' );




add_action( 'newsletter_and_about_summary', 'newsletter_and_about_shortcode_handler' );
function newsletter_and_about_shortcode_handler() {
	$output = '';

	$output .= '<div class="newsletter-section animatedParent animateOnce">';
		$output .= '<div class="container">';
			$output .= '<div class="col-md-4">';
				$output .= '<div class="newsletter-form animated fadeInLeft">';
					$output .= '<h4 class="newsletter-bold">Never miss a new post !</h4>';
					$output .= do_shortcode( '[gravityform id=1 title=true description=false ajax=true tabindex=49]' );
			$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="col-sm-6 col-md-4">';
			$output .= '<div class="person-img-wrap animated fadeInUpShort">';
				$output .= '<div class="person-img" style="background:url(\''. get_theme_mod( 'leader_about_picture' ) .'\') no-repeat"></div>';
			$output .= '</div>';
		$output .= '</div>';

		$output .= '<div class="col-sm-12 col-sm-6 col-md-4">';
			$output .= '<div class="newsletter-about-text animated fadeInRight">';
				$output .= '<p><span>'. get_theme_mod( 'leader_about_title' ) .'</span> '. get_theme_mod( 'leader_about_description' ) .'</p>';
			$output .= '</div>';
		$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	echo $output;
}