<?php
//Template Name: Home Page

while (have_posts()): the_post();
?>

	<div class="banner banner-video animatedParent animateOnce">
	    <video width="320" height="240" autoplay loop>
	      <source src="<?php the_field('banner_video_url'); ?>" type="video/mp4">
	    Your browser does not support the video tag.
	    </video>
	    <a class="navbar-brand navbar-brand-white animated fadeInLeft delay-250" href="<?php bloginfo('url'); ?>"><img
                src="<?php dist_img('logo-white.png'); ?>"></a>
	    <div class="banner-caption">
	        <h2 class="banner-title banner-title1 animated fadeInDown delay-500"><?php the_field
                ('first_section_title_line_1');
                ?></h2>
	        <p class="banner-tagline animated fadeIn delay-1000"><?php the_field('first_section_tagline'); ?></p>
	        <h2 class="banner-title banner-title2 animated fadeInUp delay-750"><?php the_field('first_section_title_line_2');?></h2>
	    </div>

	    <a href="#next-section" class="btn btn-arrow-down-white">
	        <img src="<?php dist_img('arrow-down-white.png'); ?>">
	    </a>
	</div>

	<?php get_template_part('templates/header'); ?>
	<div class="section section-l1 animatedParent animateOnce" id="next-section">
	    <div class="container">
	    	 <?php echo do_shortcode( '[leadership-group-services title="'. __( get_theme_mod( 'leader_group_services_text', get_field('second_section_title_line') ), 'leadership' ) .'"]' ); ?>
	    </div>
	</div>

	<div class="section section-l2 bg-light-blue animatedParent animateOnce">
	    <div class="container">
	        <h3 class="section-title-smaller animated fadeInUp delay-500"><?php the_field('third_section_main_title'); ?></h3>
	        <h2 class="section-title animated fadeInUp delay-250"><?php the_field('third_section_second_title'); ?></h2>
	        <p class="section-title-desc animated fadeInUp delay-750"><?php the_field('third_section_third_title'); ?></p>
	        
	        <div class="organization-list-wrap">
	            <ul class="organization-list animated fadeIn delay-1000">
	                <li>
	                    <div class="organization-list-item organization-list-item1">
	                        <h3 class="organization-list-title-smaller"><?php the_field('how_can_we_title_1'); ?></h3>
	                        <h2 class="organization-list-title"><?php the_field('how_can_we_type_1'); ?></h2>
	                        <div class="description">
	                            <p><?php the_field('how_can_we_content_1'); ?></p>
	                        </div>
	                    </div>
	                </li>
	                <li>
	                    <div class="organization-list-item organization-list-item2">
	                        <h3 class="organization-list-title-smaller"><?php the_field('how_can_we_title_2'); ?></h3>
	                        <h2 class="organization-list-title"><?php the_field('how_can_we_type_2'); ?></h2>
	                        <div class="description">
	                            <p><?php the_field('how_can_we_content_2'); ?></p>
	                        </div>
	                    </div>
	                </li>
	                <li>
	                    <div class="organization-list-item organization-list-item3">
	                        <h3 class="organization-list-title-smaller"><?php the_field('how_can_we_title_3'); ?></h3>
	                        <h2 class="organization-list-title"><?php the_field('how_can_we_type_3'); ?></h2>
	                        <div class="description">
	                            <p><?php the_field('how_can_we_content_3'); ?></p>
	                        </div>
	                    </div>
	                </li>

	            </ul>
	        </div>

	        <div class="section section-l2-2 animated fadeInUp delay-1250">
	            <h2 class="section-title"><?php the_field('our_approach_title'); ?></h2>
	            <div class="description">
	                <p><?php the_field('our_approach_content'); ?></p>
	            </div>
	            <a href="<?php the_field('our_approach_link'); ?>" class="btn btn-primary btn-orange"><?php the_field('our_approach_title_link'); ?></a>
	        </div>
	        
	    </div>
	</div>

	<div class="section section-l3 animatedParent animateOnce">
	    <div class="content">
	        <div class="content-left">
	        <h2 class="section-title section-title-white animated fadeInUp delay-250"><?php the_field('company_name'); ?></h2>
	        <div class="description animated fadeInUp delay-500">
	            <?php the_field('company_content'); ?>
	        </div>
	        <a href="<?php the_field('action_link'); ?>" class="btn btn-primary animated fadeInUp delay-750">
                <?php  the_field('action_title'); ?></a>
	    </div>
	    <div class="content-right" style="background-image: url('<?php the_field('company_banner_image'); ?>');"></div>
	    </div>
	</div>

	<div class="section section-l4 animatedParent animateOnce">
	    <?php echo do_shortcode('[recent-blog-articles title="'. get_theme_mod('leader_recent_blog_text') .'"]'); ?>
	</div>

            
<?php
endwhile;