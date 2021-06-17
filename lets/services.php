<?php 
/*
Template Name: Services
*/
get_header(); ?>
<div id="main">
	<div class="services-hero">
		<div class="top-content">
			<div class="container" data-aos="fade-up">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<div class="image" data-aos="fade">
			<embed src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/hero_services.svg" alt="">
		</div>
	</div>
	<div class="section section-services">
		<div class="container">
			<div class="heading">
				<h2>What we offer?</h2>
				<p>Lets offers three services: <b>Lets Pasakay</b> (temporarily unavailable due to pandemic), <b>Lets Pabili</b> and <b>Lets Padala</b>. However, this is just the start and we wanted to expand our services for your best convenience!</p>
			</div>
			<div class="block">
				<div class="item" data-aos="fade-up">
					<div class="column">
						<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature1.svg" alt=""></div>
					</div>
					<div class="column">
						<div class="body">
							<h2>Lets Pasakay</h2>
							<p>Travel to your desired destination in the fastest yet safest experience.</p>
						</div>
					</div>
				</div>
				<div class="item item-r" data-aos="fade-up">
					<div class="column">
						<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature2.svg" alt=""></div>
					</div>
					<div class="column">
						<div class="body">
							<h2>Lets Padala</h2>
							<p>Have your errands be taken care of. Documents and packages will be delivered carefully.</p>
						</div>
					</div>
				</div>
				<div class="item" data-aos="fade-up">
					<div class="column">
						<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature3.svg" alt=""></div>
					</div>
					<div class="column">
						<div class="body">
							<h2>Lets Pabili</h2>
							<p>You can get your cravings, groceries and anything you need without going outside! Our Lets will handle your needs!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section pb-0">
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