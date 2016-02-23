<?php
//Template Name: Our Team Page


while (have_posts()): the_post();

$q = get_posts( array( 'post_type' => 'team', 'showposts' => -1, 'suppress_filters' => false ) );
?>

<div class="our-team">
  <div class="container">
    <h2 class="section-title"><?php the_title(); ?></h2>
    <div class="specialty">
      <ul>
        <?php  
        $args = array(
          'hide_empty' => 0,
          'taxonomy' => 'speciality'
          );
        $categories = get_categories( $args ); 
        foreach ( $categories as $i => $cat ): ?>
          <li><a href="#" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
        <?php 
        endforeach; ?>
      </ul>
    </div>
  </div>

  <ul class="our-team-list">
    <div class="container">
      <div class="row">
      <?php foreach ( $q as $i => $p ): 
        $categories = get_the_terms( $p->ID, 'speciality' );
        $slug = array();
        $name = array();
        foreach ($categories as $category) {
          $slug[] = $category->slug;
          $name[] = $category->name;
        }
      ?>

        <li class="col-sm-6 col-md-3 <?php echo implode( ' ', $slug ); ?>">
          <div class="our-team-link-holder">
            <a href="#" class="taiwan">
              <div class="our-team-img-wrap" style="background:url('<?php attachment_image_src( $p->ID, 'post-thumbnail' ); ?>') no-repeat center center"></div>
              <p class="name"><?php echo $p->post_title; ?></p>
              <p class="position"><?php the_field( 'position', $p->ID ); ?></p>

              <div class="popout">
                <p class="name"><?php echo $p->post_title; ?></p>
                <p class="position"><?php echo implode( ', ', $name ); ?></p>

                <p><?php echo $p->post_content; ?></p>
              </div>
            </a>
          </div>
        </li>
      <?php endforeach; ?>

      </div>  <!-- end row -->
    </div> <!-- end container -->
  </ul>  <!-- end our team list -->

</div>

<?php
endwhile;