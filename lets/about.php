<?php 
/*
Template Name: About
*/
get_header(); ?>
<div id="main">
	<div class="about-hero">
		<div class="top-content">
			<div class="container" data-aos="fade-left">
				<h1><span>Travelling With You Matters.</span></h1>
				<p>Lets is a rising application that offers services to the consumers through deliveries and taking care of your errands</p>
				<div class="shape"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/header_obj.svg" alt=""></div>
			</div>
		</div>
		<div class="bottom-content" data-aos="fade-up">
			<div class="block">
				<div class="column">
					<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/img_about1.png" alt="">
				</div>
				<div class="column">
					<div class="body">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
					</div>
				</div>
				<div class="column">
					<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/img_about2.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="about-image">
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/img_about.jpg" alt="">
	</div>
	<div class="section pb-0">
		<div class="container">
			<div class="about-block">
				<div class="column" data-aos="fade-right">
					<h2>Our Mission & Vision</h2>
				</div>
				<div class="column" data-aos="fade-left">
					<h3>Mission</h3>
					<p>To make our consumers experience 
					convenience, safest and no hassle 
					deliveries as possible. Our goal is not 
					only for the consumers, but also for the 
					bikers who are striving to earn more 
					money by working on this kind of field.</p>
				</div>
				<div class="column" data-aos="fade-left">
					<h3>Vision</h3>
					<p>To create opportunities for people, establish growth and make an impact in every way.</p>
				</div>
			</div>
		</div>
		<div class="about-wrapper">
			<div class="container">
				<div class="about-block about-block2">
					<div class="column" data-aos="fade-right">
						<h2>What we offer</h2>
					</div>
					<div class="column" data-aos="fade-left">
						<p>Lets offers three services: <b>Lets Pasakay</b> (temporarily unavailable due to pandemic), <b>Lets Pabili</b> and <b>Lets Padala</b>. However, this is just the start and we wanted to expand our services for your best convenience!</p>
						<div class="items">
							<div class="coln">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature1.svg" alt=""></div>
								<h2>Lets Pasakay</h2>
								<p class="unavailable">Temporarily Unavailable</p>
							</div>
							<div class="coln">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature2.svg" alt=""></div>
								<h2>Lets Padala</h2>
							</div>
							<div class="coln">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature3.svg" alt=""></div>
								<h2>Lets Pabili</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" data-aos="fade-up">
			<div class="heading">
				<h2>We are located on</h2>
				<p>2342 Peacock Street, Fairview Quezon City, NCR 1118<br>Philippines</p>
			</div>
		</div>
	</div>
	<div class="contact-block">
		<div class="container" data-aos="fade-up">
			<h3>Contact Us</h3>
			<p>+639304447777</p>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.156494388511!2d121.07354501501476!3d14.703740578482268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b09ebbffd869%3A0x7329c2dc015b7958!2sPeacock%20Street%2C%20Novaliches%2C%20Quezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1598603696406!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</div>
<?php get_footer();?>