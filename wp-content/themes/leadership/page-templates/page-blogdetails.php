<?php
//Template Name: Blog Details Page


while (have_posts()): the_post();
?>


<div class="container">
	<div class="blogdetails section animatedParent animateOnce">
		<h2 class="section-title animated fadeInUp delay-250">the leadership blog</h2>

		<div class="blogdetails-category-list animated fadeInUp delay-400">
			<ul>
				<li><a href="#">category</a></li>
				<li><a href="#">category</a></li>
				<li><a href="#">category</a></li>
				<li><a href="#">category</a></li>
				<li><a href="#">category</a></li>
				<li><a href="#">category</a></li>
				<li><a href="#">category</a></li>
			</ul>
		</div>

		<div class="blogdetails-banner animated fadeInUp delay-500">
			<div class="blogdetails-banner-wrap-img" style="background:url(/wp-content/themes/leadership/assets/images/blog-banner-img.jpg)no-repeat center center;">
				
				<div class="blogdetails-tagline">
					<h2 class="section-title"><strong>FIVE QUESTIONS</strong></h2>
					<h2 class="section-title">THAT RELEASE THE POWER OF HUMBLE LEADERSHIP</h2>
					
					<div class="horizontal-line"></div>

					<p>Successful leaders learn how to have confidence in others. Everything that depends on you, dies with you.</p>

				</div>
				<div class="clearfix"></div>
				
				<div class="category--btn">
					<a href="#" class="btn btn-category">category</a>
					<p>Jeremy Perks, the 4th of January 2016</p>
				</div>
			</div>
		</div>

		<div class="leadership-blog-content">
			<h2 class="section-title">5 questions that release THE power of humble leadership</h2>

			<ul class="questions">
				<li>Who is helping you succeed?</li>
				<li>What are they doing?</li>
				<li>How are you honoring them?</li>
				<li>How might you energize, engage, and enhance them?</li>
				<li>How might you get out of their way?</li>
			</ul>

			<p><i>Humility sustains leadership, arrogance limits it.</i></p>

			<div class="complaining">
				<h2 class="section-title">Complaining</h2>
				<p>Stop complaining about ineffective team members. They aren’t the problem. You are. 4 options with poor performers: <br> Develop them.Reassign them.Accept them.Remove them.</p>

				<p style="margin-top:1em;">Regardless of which option you choose, success depends on the people on your team.</p>
			</div>

			<div class="humility">
				<h2 class="section-title">Humility</h2>
				<p>Complaining about poor performers is an arrogant leader’s way of covering their butt and protecting their ego. Complaining-leaders need a good dose of accountability and responsibility. In short, if you aren’t confident in the people around you, it’s time for you to eat humble pie. Over-confident leaders find it nearly impossible to take responsibility for poor performers. You might protest, “But, I didn’t hire them.” So what? You have them now and you’re the leader. (See the four options listed above.) Humble leaders learn that success is about confidence in others.</p>
			</div>

			<div class="blog-recent-articles">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="recent-articles">
							<h2 class="section-title">Recent Articles</h2>
							<p>FIVE QUESTIONS THAT RELEASE THE POWER OF HUMBLE LEADERSHIP</p>
							<div class="horizontal-line2"></div>
							<p>THE REASON ORGANIZATIONS DON’T CHANGE</p>
							<div class="horizontal-line2"></div>
							<p>THE LEADER ON A PONY</p>
						</div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="article-ad" style="background:url(/wp-content/themes/leadership/assets/images/parker-ad-img.jpg)no-repeat center center;"></div>
					</div>
				</div>
			</div>
		</div>

	</div> <!-- end blog details -->
</div> <!-- end container -->

<div class="newsletter-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="newsletter-form">
					<h4 class="newsletter-bold">Never miss a new post !</h4>
					<h4 class="subscribe-text">Subscribe to TLG newsletter</h4>

					<form role="form">
					  <div class="form-group">
					    <input type="email" placeholder="Your email" class="form-control frm-newsletter" id="email">
					  </div>
					  <a class="btn btn-default btn-submit-newsletter"><span><img src="/wp-content/themes/leadership/assets/images/right-arrow.png"></span></a>
					</form>
				</div>
			</div>

			<div class="col-sm-6 col-md-4">
				<div class="person-img-wrap">
					<div class="person-img" style="background:url(/wp-content/themes/leadership/assets/images/jeremy-img.png) no-repeat"></div>
				</div>
			</div>

			<div class="col-sm-6 col-md-4">
				<div class="newsletter-about-text">
					<p><span>ABOUT JEREMY PERKS</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-l4 animatedParent animateOnce">
  <?php echo do_shortcode('[recent-blog-articles title="'. get_theme_mod('leader_recent_blog_text') .'"]'); ?>
</div>


<?php
endwhile;