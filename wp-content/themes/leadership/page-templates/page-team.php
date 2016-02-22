<?php
//Template Name: Our Team Page


while (have_posts()): the_post();
?>

<header>
  <nav class="navbar navbar-default navbar-menu">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle-menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand navbar-brand-black" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_theme_mod('leader_black_logo'); ?>"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse">
        
        <div class="btn btn-convert btn-convert1"><?php do_action('wpml_add_language_selector'); ?></div>
         <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>



<div class="our-team">
  <div class="container">
    <h2 class="section-title">The Leadership Group Coaches</h2>
    <div class="specialty">
      <ul>
        <li><a href="#">specialty</a></li>
        <li><a href="#">specialty</a></li>
        <li><a href="#">specialty</a></li>
        <li><a href="#">specialty</a></li>
        <li><a href="#">specialty</a></li>
        <li><a href="#">specialty</a></li>
        <li><a href="#">specialty</a></li>
      </ul>
    </div>
  </div>

  <ul class="our-team-list">
    <div class="container">
      <div class="row">
        <li class="col-sm-6 col-md-3">
          <div class="our-team-link-holder">
            <a href="#" class="taiwan">
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

      </div>  <!-- end row -->
    </div> <!-- end container -->
  </ul>  <!-- end our team list -->

</div>

<?php
endwhile;