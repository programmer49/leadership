<?php while (have_posts()) : the_post(); 
$featured_post = get_post( get_theme_mod( 'leader_featured_article', 0 ) );
?>
<div class="container">
  <div class="blogdetails section animatedParent animateOnce">
    <h2 class="section-title animated fadeInDown"><?php echo get_theme_mod( 'leader_featured_blog_title', 'THE LEADERSHIP BLOG' ); ?></h2>

    <div class="blogdetails-category-list animated fadeInUp delay-400">
      <ul>
      <?php  
      $args = array(
        'hide_empty' => 0,
        'taxonomy' => 'category'
        );
      $categories = get_categories( $args ); 
      foreach ( $categories as $i => $cat ): ?>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) . '#' . $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
      <?php 
      endforeach; ?>
      </ul>
    </div>

    <div class="blogdetails-banner animated fadeInUp delay-500">
      <div class="blogdetails-banner-wrap-img" style="background:url('<?php the_field( 'banner' ); ?>')no-repeat center center;">
        
        <div class="blogdetails-tagline">
          <h2 class="section-title"><?php the_title(); ?></h2>
          <div class="horizontal-line"></div>
          <p><?php the_content(); ?></p>
        </div>
        <div class="clearfix"></div>
         <div class="category--btn">
          <?php $categories = get_the_category (); 
          foreach ( $categories as $cat ): ?>
          <a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) . '#' . $cat->slug; ?>" class="btn btn-category"><?php echo $cat->name; ?></a>
          <?php 
          endforeach; ?>
          <p><?php the_author(); ?>, <?php echo get_the_date( '\t\h\e jS \o\f F Y' ); ?></p>
        </div>
        
      </div>
    </div>



    <div class="leadership-blog-content">
      <h2 class="section-title"><?php the_field( 'heading_1' ); ?></h2>

      <ul class="questions">
        <?php while ( have_rows( '5_questions' ) ): the_row(); ?>
        <li><?php the_sub_field( 'title' ); ?></li>
        <?php endwhile; ?>
      </ul>

      <p><i><?php the_field( 'excerpt_text' ); ?></i></p>

      <div class="complaining">
        <h2 class="section-title"><?php the_field( 'heading_2' ); ?></h2>
        <?php the_field( 'heading_2_content' ); ?>
      </div>

      <div class="humility">
        <h2 class="section-title"><?php the_field( 'heading_3' ); ?></h2>
        <?php the_field( 'heading_3_content' ); ?>
      </div>

      <div class="blog-recent-articles">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="recent-articles">
              <h2 class="section-title">Recent Articles</h2>
              <?php
                $args = array( 'numberposts' => '3', 'suppress_filters' => true );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){ ?>
                  <p><?php echo strip_tags( $recent["post_title"] ); ?></p>
                  <div class="horizontal-line2"></div>
                <?php }
              ?>
            </div>
          </div>

          <div class="col-sm-6 col-md-6">
           <a href="<?php echo get_theme_mod( 'leader_recent_article_link' ); ?>"><div class="article-ad" style="background:url('<?php echo get_theme_mod( 'leader_recent_article_logo' ); ?>')no-repeat center center;"></div></a>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- end blog details -->
</div> <!-- end container -->
<?php 
  do_action( 'newsletter_and_about_summary' );
endwhile; ?>
