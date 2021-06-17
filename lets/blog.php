<?php 
/*
Template Name: Blog
*/
get_header(); ?>
<div id="main">
	<div class="section section-blog">
		<div class="container">
		<?php query_posts(array('post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 1)); while (have_posts()) : the_post(); ?>
			<div class="article">
				<div class="column">
					<div class="image"><?php the_post_thumbnail('full'); ?></div>
				</div>
				<div class="column">
					<p class="date"><?php the_time('F j, Y') ?></p>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<div class="share">
						<ul>
							<li>Share it on</li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=#<?php the_permalink(); ?>" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_fb2.svg" alt=""></a></li>
							<li><a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_tw2.svg" alt=""></a></li>
							<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_linkedin.svg" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php endwhile; wp_reset_query(); ?>
			<div class="article-list">
				<?php query_posts(array('post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 9, 'offset' => 1)); while (have_posts()) : the_post(); ?>
				<a class="column" href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<p class="date"><?php the_time('F j, Y') ?></p>
					<div class="image"><?php the_post_thumbnail('full'); ?></div>
				</a>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>