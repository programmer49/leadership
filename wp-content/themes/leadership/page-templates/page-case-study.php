<?php
//Template Name: Case Study Page


while (have_posts()): the_post();
?>

<div class="case-study section">
	<div class="animatedParent animateOnce">
		<div class="container">
		    <h3 class="title-blue animated fadeInDownShort">Case Study</h3> 
		    <h2 class="section-title animated fadeInDownShort">Organisation transformation & leadership development in the retail industry</h2>
		</div>
	</div>

	<div class="container">

			<div class="info animatedParent animateOnce">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="where">
							<img class="animated growIn delay-500" src="/wp-content/themes/leadership/assets/images/location-icon.png" alt="...">
							<p><span>where</span> China</p>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="how-many">
							<img class="animated growIn delay-500" src="/wp-content/themes/leadership/assets/images/many-people.png" alt="...">
							<p><span>how many</span> 1000+ people</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="how-long">
							<img class="animated growIn delay-500" src="/wp-content/themes/leadership/assets/images/clock-icon.png" alt="...">
							<p><span>how long</span> 3 years</p>
						</div>
					</div>
				</div>
			</div>

			<div class="situation-challenge animatedParent animateOnce">
				<h2 class="section-title animated fadeInDownShort">The situation and challenge</h2>

				<div class="col-md-6 animated fadeInLeft">
					<p><i>A leading fashion brand in China was growing rapidly in 2010 and the team was doing a solid job managing the growth.  However business challenges were emerging</i></p>
				</div>

				<div class="col-md-6 animated fadeInRight">
					<ul class="challenge-list">
						<li>Performance was not consistent throughout the business</li>
						<li>Leaders and managers at all levels were being stretched beyond their capability</li>
						<li>Some City Managers were ‘empire building’ and some had a not invented here’ syndrome</li>
					</ul>
				</div>
				
				<div class="horizontal-gray-line"></div>

				<div class="col-md-6">
						<p><i>The Organisation and People Development challenges included</i></p>
				</div>

				<div class="col-md-6">
					<ul class="challenge-list">
						<li>Lack of an organisation and people development strategy</li>
						<li>Leaders at all levels had not been equipped with the capability to meet the challenges of their roles</li>
					</ul>
				</div>
			
			</div>

			<div class="impact animatedParent animateOnce">
				<h2 class="section-title animated fadeInDownShort">What we did and the impact of our work</h2>

				<div class="col-sm-6 col-md-6">
					<div class="team">
						<img class="animated growIn" src="/wp-content/themes/leadership/assets/images/team-icon.png" alt="...">
						<h5>team</h5>
						<p>We used our Team Effectiveness assessment with all core teams down to City Manger level and tracked clear improvements in team effectiveness scores in all city management teams.  This has been achieved not by doing team development training but by developing the capability of the City Managers to lead and manage their teams.</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 b-left">
					<div class="organisation">
						<img class="animated growIn" src="/wp-content/themes/leadership/assets/images/organisation-icon.png" alt="...">
						<h5>organisation</h5>
						<p>We run an annual Strategy Planning workshop each year where the top team analyses the current reality and re-defines long-term objectives and the Must Win Battles.  The People Development strategy focuses on building capability in order to win the Must Win Battles and includes the development of structures systems and processes, as well as the design and delivery of management and leadership development programs for the three levels of management.</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 b-top">
					<div class="individual">
						<img class="animated growIn" src="/wp-content/themes/leadership/assets/images/individual-icon.png" alt="...">
						<h5>individual</h5>
						<p>We have used The Leadership Circle 360 for the top 25 leaders as the starting point for a transformational leadership journey.  When the 360 was re-run 2 years later, results demonstrated significant shifts, many transformational, in the results moving from ‘problem-reacting’ behaviors to ‘outcome-creating’ behaviours.</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 b-left b-top">
					<div class="years">
						<img class="animated growIn" src="/wp-content/themes/leadership/assets/images/clock2-icon.png" alt="...">
						<h5>over 3 years</h5>
						<p>we built the capability of the oganisation and the top two levels of leaders (65 people), and developed core competencies throughout the organisation down to Store Manager level (1000 people).</p>
					</div>
				</div>
  		</div> 

	  	<div class="case-studies section animatedParent animateOnce">
			<?php echo do_shortcode( '[case-studies title="A selection of case studies"]' ); ?>
		</div>
</div> <!-- end container -->
</div>


<?php
endwhile;