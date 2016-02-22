<?php
//Template Name: Development Page


while (have_posts()): the_post();
?>




<div class="development section animatedParent animateOnce">
	<div class="container">
		<h2 class="section-title animated fadeInDown delay-250">Leadership development</h2>
		<p class="motto animated fadeInDown">“Effective leaders outperform ineffective leaders every time.”  Bill Adams</p>
	</div>

	<div class="development-list section">
		<div class="container">
			<div class="col-md-6 animated fadeInLeft">
				<div class="engage-us">
					<h4>Engage us for Leadership Development when</h4>
					<ul>
						<li>You want to build the effectiveness of your top 50 leaders</li>
						<li>You want to accelerate the development of your local leadership</li>
						<li>You want a structured Management & Leadership Development Program for your emerging / middle managers</li>
						<li>You have a high potential / important leader who has the potential to achieve so much more</li>
					</ul>
				</div>
			</div>

			<div class="col-md-6 animated fadeInRight">
				<div class="expect">
					<h4>WHAT TO EXPECT</h4>
					<ul>
						<li><span>An ongoing process</span> Leadership development is a journey and one-off initiatives don’t work.</li>
						<li><span>World-class tools</span> We use cutting edge tools to assess the current reality, inform the development journey and track the progress.</li>
						<li><span>Vertical Learning</span> Leadership Development requires increasing Capability (Horizontal Learning) and Consciousness (Vertical Learning).</li>
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
				<h5>The Leadership System</h5>
				<p>The significant research behind the model and the tool shows strong correlations between strength in the Creative dimensions, and Leadership Effectiveness & business results.</p>

				<div class="gap gap-50"></div>

				<h5>The Leadership System</h5>
				<p>The tool not only provides insight into the behaviours a leader is demonstrating, but also the underlying assumptions and beliefs that are driving those behaviours.  It is in raising the Leader’s consciousness of these underlying patterns of thinking where transformational shifts in performance occur.</p>
			</div>

			<div class="col-md-6 animated growIn">
				<img src="/wp-content/themes/leadership/assets/images/wheel-system.png" alt="">
			</div>

			<div class="gap gap-50"></div>

			<div class="col-md-3 text-right  animated fadeInRight">
				<h5>The Leadership System</h5>
				<p>Designed to increase collective leadership effectiveness. The Leadership Circle is a universal model of leadership development and the best leadership 360 that we know of.</p>

				<div class="gap gap-50"></div>

				<h5>The Leadership System</h5>
				<p>The Leadership Circle points to levels of adult development.</p>
			</div>
		</div>
	</div>
</div>

<div class="section section-l1 animatedParent animateOnce" id="next-section">
  <div class="container">
      <h2 class="section-title animated fadeInUp delay-250"><?php the_field('second_section_title_line'); ?></h2>

      <div class="leadership-list-wrapper">
      	<?php $q = get_posts(array('post_type' => 'service', 'showposts' => -1, 'order' => 'asc', 'suppress_filters' => false)); ?>
      	<?php if (count($q) > 0): ?>
          <ul class="leadership-list animated fadeInUp delay-500">
          	<?php foreach ($q as $i => $s): 
          		$image = '';
          		if (has_post_thumbnail($s->ID)) {
          			$image = wp_get_attachment_image_src(get_post_thumbnail_id($s->ID), 'full')[0];
          		}
          		?>
              <li>
                <div class="leadership-list-wrap leadership-list-wrap1">
                  <div class="leadership-list-img-wrap">
                      <div class="leadership-list-img" style="background-image: url('<?php echo $image;?>');"></div>
                  </div>
                  <h3 class="leadership-list-title"><?php echo $s->post_title; ?></h3>
                  <div class="leadership-list-desc">
                      <hr>
                      <div class="description">
                          <p><?php echo $s->post_content; ?></p>
                      </div>
                  </div>
                </div>
              </li>
          	<?php endforeach; ?>
          </ul>
      	<?php endif; ?>
      </div>
  </div>
</div>


<?php
endwhile;