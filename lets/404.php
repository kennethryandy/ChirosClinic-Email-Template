<?php 
/*
Template Name: Home
*/
get_header(); ?>
<div id="main">
	<div class="section section-page">
		<div class="container text-center">
			<h2 class="title">Page Not Found</h2>
			<p>The page you are trying to access has been removed or doesn't exist.<br>
			<p><a href="<?php echo get_site_url(); ?>" class="btn btn-primary">Click to go back to home page</a></p>
		</div>
	</div>
</div>
<?php get_footer();?>