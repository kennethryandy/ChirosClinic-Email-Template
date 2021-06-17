<?php get_header(); ?>
<div id="main">
	<div class="page-header">
		<h1><?php the_title(); ?></h1>
		<?php $subheading = get_field('subheading'); 
		if ($subheading) {  ?>
			<p><?php echo $subheading; ?></p>
		<?php } ?>
	</div>
	<div class="section section-page">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<div class="image-featured"><?php the_post_thumbnail('full'); ?></div>
		</div>
	</div>
</div>
<?php get_footer();?>