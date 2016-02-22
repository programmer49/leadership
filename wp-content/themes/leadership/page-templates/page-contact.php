<?php
//Template Name: Contact Page


while (have_posts()): the_post();
?>


<div class="contact section ">
	
	<div class="animatedParent animateOnce">
		<div class="container">
			<h2 class="section-title animated fadeInUpShort"><?php the_title(); ?></h2>
		</div>
	</div>

	<div class="map-address animatedParent animateOnce">
		<div class="row">
			<div class="col-sm-6 col-md-6 p-0 animated fadeInLeft">
				<div class="address-holder">
					<h3 class="office-header"><?php the_field( 'beijing_office_name' ); ?></h3>
					<h4 class="contact-number"><?php the_field( 'beijing_phone_number' ); ?></h4>
					<p><?php the_field( 'beijing_english_address' ); ?></p>
					<p class="chinese-words"><?php the_field( 'beijing_chinese_address' ); ?></p>

				</div>
			</div>

			<div class="col-sm-6 col-md-6 p-0 animated fadeInDown">
				<div class="map" style="background: url('<?php the_field( 'beijing_map' ); ?>') no-repeat center center;"></div>
			</div>

			<div class="col-sm-6 col-md-6 col-md-push-6 col-sm-push-6 p-0 animated fadeInRight">
				<div class="address-holder">
					<h3 class="office-header"><?php the_field( 'kualalumpur_office_name' ); ?></h3>
					<h4 class="contact-number"><?php the_field( 'kualalumpur_phone_number' ); ?></h4>
					<p><?php the_field( 'kualalumpur_english_address' ); ?></p>
					<p class="chinese-words"><?php the_field( 'kualalumpur_chinese_address' ); ?></p>

				</div>
			</div>

			<div class="col-sm-6 col-md-6 col-md-pull-6 col-sm-pull-6 p-0 animated fadeInUp">
				<div class="map" style="background: url('<?php the_field( 'kualalumpur_map' ); ?>') no-repeat center center;"></div>
			</div>

		</div>
	</div>

	<div class="contact-form animatedParent animateOnce">
		<div class="container">
			<?php echo do_shortcode( '[gravityform id=2 title=true description=false ajax=true tabindex=49]' ); ?>
			<!--<form role="form" class="animated fadeInUp">
			  <div class="row">
					<p>You have a question ? Send us a message</p>
			  	<div class="col-md-4">
				  	<div class="form-group">
					    <input type="email" class="form-control for-height" id="name" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control for-height" id="emal" placeholder="Email">
					  </div>
				  </div>

				  <div class="col-md-4">
				  	<div class="form-group">
					    <input type="email" class="form-control for-height" id="organisation" placeholder="Organisation">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control for-height" id="phone_number" placeholder="Phone Number">
					  </div>
				  </div>

				  <div class="col-md-4">
				  	<div class="form-group">
					    <textarea class="form-control" rows="5" id="message" placeholder="Your message"></textarea>
					  </div>
				  </div>

				  <div class="col-md-12">
				  	 <div class="radio">
				      <label><input type="radio" name="optradio">I am not a robot!</label>
				    </div>
				  </div>

				 <div class="col-md-12">
				 	 <a href="#" class="btn btn-send btn-orange2">Send</a>
				 </div>

			  </div>
			</form>-->
		</div>
	</div>

</div>

	<div class="qrcode-area animatedParent animateOnce">
		<div class="container animated fadeInUp">
			<p><?php the_field( 'call_to_action_text' ); ?></p>
			<?php echo do_shortcode( '[gravityform id=1 title=false description=false ajax=true tabindex=49]' ); ?>
			<!--<form role="form">
			  <div class="form-group">
			    <input type="email" placeholder="Your email" class="form-control frm-newsletter" id="email">
			    <a class="btn btn-default btn-submit-newsletter"><span><img src="/wp-content/themes/leadership/assets/images/right-arrow.png"></span></a>
			  </div>
			  
			</form>-->

			<img src="<?php the_field( 'qr_code' ); ?>">
		</div>
	</div>


<?php
endwhile;