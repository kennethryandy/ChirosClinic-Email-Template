<footer>
	<div class="footer-bottom">
		<div class="container">
			<div class="column">
				<div class="logo">
					<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/logo.svg" alt="LETS">
				</div>
				<p>A rising application in your daily go-to needs</p>
			</div>
			<div class="column">
				<div class="item1">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'fallback_cb'	=> false
						) );
					?>
				</div>
				<div class="item2">
					<ul class="social">
						<li><a href="https://www.facebook.com/letsPH/" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_fb.svg" alt="Facebook"></a></li>
						<li><a href="https://twitter.com/LetsApp2020" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_tw.svg" alt="Twitter"></a></li>
						<li><a href="https://www.instagram.com/letsapp2020/" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_ig.svg" alt="Instagram"></a></li>
						<!--<li><a href="#" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_yt.svg" alt="YouTube"></a></li>-->
					</ul>
					<ul class="download">
						<li>Download App</li>
						<li><a href="https://play.google.com/store/apps/details?id=com.lets.consumer" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_gp.png" alt="Download on Google Play"></a></li>
						<li><a href="https://apps.apple.com/us/app/lets-ph/id1532356780" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_as.png" alt="Download on App Store"></a></li>
					</ul>
				</div>
				<div class="item3">
					<p>Copyright &copy; <?php echo date('Y'); ?> LETS &middot; All Rights Reserved</p>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer2-menu',
							'fallback_cb'	=> false
						) );
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div aria-hidden="true" aria-labelledby="soon" class="modal fade" id="soon" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h5 class="modal-title">Coming Soon</h5>
			</div>
		</div>
	</div>
</div>
<!-- scripts -->
<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/jquery.min.js"></script>
<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/libs.min.js"></script>
<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/scripts.js"></script>
<?php wp_footer(); ?>
</body>
</html>