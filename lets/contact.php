<?php 
/*
Template Name: Contact
*/
get_header(); ?>
<div id="main" class="contact">
	<div class="container">
		<div class="content" data-aos="fade-up">
			<div class="column">
				<div class="body">
					<h2>Lets would love to hear from you</h2>
					<p>Fill out the form below for your inquiries, 
					opinions, suggestions and concerns. </p>
					<p>Get in touch with us!</p>
					<div class="image">
						<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_contact.svg" alt="">
					</div>
					<p class="text">All your messages will be sent to support@lets.com.ph</p>
				</div>
			</div>
			<div class="column">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>