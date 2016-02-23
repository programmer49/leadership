<?php
//Template Name: Our Team Page


while (have_posts()): the_post();

$q = get_posts( array( 'post_type' => 'team', 'showposts' => -1, 'suppress_filters' => false ) );
?>




<div class="our-team">
  <div class="container">
    <h2 class="section-title">The Leadership Group Coaches</h2>
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
              <p class="position"><?php echo implode( ', ', $name ); ?></p>

              <div class="popout">
                <p class="name"><?php echo $p->post_title; ?></p>
                <p class="position"><?php echo implode( ', ', $name ); ?></p>

                <p><?php echo $p->post_content; ?></p>
              </div>
            </a>
          </div>
        </li>
      <?php endforeach; ?>
       <!-- <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/mandy.png) no-repeat center center"></div>
              <p class="name">Mandy Zhang</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/ray.png) no-repeat center center"></div>
              <p class="name">Ray Wang</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/jeremy-img.png) no-repeat center center"></div>
              <p class="name">Jeremy Perks</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/jeremy-img.png) no-repeat center center"></div>
              <p class="name">Jeremy Perks</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/mandy.png) no-repeat center center"></div>
              <p class="name">Mandy Zhang</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/ray.png) no-repeat center center"></div>
              <p class="name">Ray Wang</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/jeremy-img.png) no-repeat center center"></div>
              <p class="name">Jeremy Perks</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/jeremy-img.png) no-repeat center center"></div>
              <p class="name">Jeremy Perks</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/mandy.png) no-repeat center center"></div>
              <p class="name">Mandy Zhang</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/ray.png) no-repeat center center"></div>
              <p class="name">Ray Wang</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>

        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#">
              <div class="our-team-img-wrap" style="background:url(/wp-content/themes/leadership/assets/images/jeremy-img.png) no-repeat center center"></div>
              <p class="name">Jeremy Perks</p>
              <p class="position">Specialty, specialty</p>

              <div class="popout">
                <p class="name">Jeremy Perks</p>
                <p class="position">Specialty, specialty</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod ibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.orem ipsum dolor sit amet, consecteturdipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacusccumsan et viverra justo commodo.</p>
              </div>
            </a>
          </div>
        </li>-->

      </div>  <!-- end row -->
    </div> <!-- end container -->
  </ul>  <!-- end our team list -->

</div>

<?php
endwhile;