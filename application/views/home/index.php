<?php include(dirname(__FILE__).'/../includes/header.php'); ?>
<header class="intro">
	<div class="sky_bg"></div>
	<div class="gradient_overlay"></div>
	<div class="building_img"></div>
	<div class="wrap wide intro_content">
		<h1>
			<a href="#">
				<img src="<?=base_url('static/img/powem-logo.png');?>" alt="Powem">
			</a>
		</h1>
		<div class="intro text">
			<p>Got a brilliant IDEA? Let us help you BUILD it!</p>
		</div>
		<a href="#footer-section" class="alt_button arrow_button">
			I have an IDEA
		</a>
	</div>
</header>
<section id="revolution">
	<div class="wrap wide">
		<!-- <div class="rev_left">
			<img src="http://www.zapio.com/content/2-revolution/revolution40,P402x.png.pagespeed.ce.LHutBwo7PB.png" class="factory" alt="Factory">
			<h3>The Industrial <br> Revolution 4.0</h3>
		</div> -->
		<div class="rev_right">
			<div class="intro text">
				<p>We know the problems you face when trying to transform your idea, dream, business model, or an existing product into something real - what you want it to be, and better.</p>
				<p>The back and forth between developers, the micro management you have to endure to get value for your money, the stress you go through when coming up with new screens and the developer won't work on them, the uncertainty of the level of quality of your product, name it! We've gone through it, seen others go through it, and learned from the best.</p>
				<p>We have the <a href="#howitworks">solution</a> for you.</p>
			</div>
		</div>
	</div>
</section>

<section id="howitworks">
	<div class="wrap wide">
		<h3>Our services, <br> in three steps.</h3>
		<div id="anim_container">
			<div id="machine_pulse">
				<div class="pulse end" id="pulse_1"></div>
				<div class="pulse end" id="pulse_2"></div>
				<div class="pulse end" id="pulse_3"></div>
			</div>

			<div id="machine"></div>

			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="zapio_anim"></svg>
		</div>

		<div id="anim_side_content">
			
			<!-- <div id="progress_bar">
				<div id="progress_bar_bg"></div>
				<div id="progress_bar_mask" class="phase1"></div>
			</div> -->

			<div class="side_content active" id="side_content_1">
				<h2>1. Product Management</h2>
				<p>We understand your business. We help you create work-plans to help in organising your workflow, and for presentation to your stakeholders (if any), demystify your business case, and prepare your project for development.</p>
			</div>

			<div class="side_content active" id="side_content_2">
				<h2>2. Software Engineering</h2>
				<p>With proven competence, we build your product using world class software engineering processes and practices.</p>
			</div>

			<div class="side_content active" id="side_content_3">
				<h2>3. Marketing</h2>
				<p>Digital Marketing is the easiest, most affordable and practical way of getting your business out there. With our expertise, we create competitive, well thought of  campaigns to make your product stand out.</p>
			</div>

		</div>
	</div>	
</section>

<!-- <section id="features">
	<div class="wrap wide flex-container">
		<div class="flex_content">
			<h2>
				Specialized Hardware
			</h2>
			
			<p>Our platform can either connects to your existing data sources or we can provide a fully integrated suite of secure and highly configurable sensors.</p>
			<img src="http://www.zapio.com/content/4-features/hardware@2x.png" alt="hardware@2x.png" pagespeed_url_hash="148213232" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
		</div>
		<div class="flex_content">
			<h2>
				Sophisticated Software
			</h2>
			
			<p>We use advanced AI / machine learning algorithms to generate insights that create true ROI for your organization.</p>
			<img src="http://www.zapio.com/content/4-features/xdashboard.png.pagespeed.ic.A0QpfmAwwA.png" alt="dashboard.png" pagespeed_url_hash="530079410" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
		</div>
	</div>
</section> -->

<!--
<section id="newsletter-section">
	<div class="wrap wide">
		<div class="left_content">
			<h4>
				Stay up-to-date on our latest developments.
				<span>Join our mailing list.</span>
			</h4>
		</div>
		-->

		<!-- Begin MailChimp Signup Form -->
		<!--
		<div id="mc_embed_signup" class="subscribe_form">

			<form action="//zapio.us15.list-manage.com/subscribe/post-json?u=ea5c9756b821e44dc3e5ef8d2&amp;id=6538092769&c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

			    <div id="mc_embed_signup_scroll">
			    -->

					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<!--
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ea5c9756b821e44dc3e5ef8d2_6538092769" tabindex="-1" value=""></div>

					<div class="mc-field-group">
					    <p>
					    	<input type="email" value="" name="EMAIL" class="required email alt_button" id="mce-EMAIL" placeholder="Enter your email address">
					    	<input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button_submit">
					    	<span class="ajax-loader"></span>
					    </p>
					</div>

				    <div id="mce-responses" class="clear">
				        <div class="response" id="mce-error-response" style="display:none"></div>
				        <div class="response" id="mce-success-response" style="display:none"></div>
				    </div>
			    </div>
			</form>
		</div>
		-->
		<!--End mc_embed_signup-->
		<!--
	</div>	
</section>
-->

<?php include(dirname(__FILE__).'/../includes/footer.php'); ?>