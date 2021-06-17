<?php 
/*
Template Name: Home
*/
get_header(); ?>
<div id="main" class="pt-0">
	<div class="hero-wrap">
		<div class="hero">
			<div class="container">
				<div class="content" data-aos="fade-left">
					<h1>We Cover Your Everyday Needs!</h1>
					<p>Motorcycle and Truck E-Hailing application</p>
					<ul>
						<li class="togglemenu">
							<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/btn_gplay.png" alt="Download on Google Play">
							<ul>
								<li><a href="https://play.google.com/store/apps/details?id=com.lets.consumer" target="_blank">Lets Consumer</a></li>
								<li><a href="https://play.google.com/store/apps/details?id=com.lets.driver" target="_blank">Lets Driver</a></li>
							</ul>
						</li>
						<li class="togglemenu">
							<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/btn_appstore.png" alt="Download on App Store">
							<ul>
								<li><a href="https://apps.apple.com/us/app/lets-ph/id1532356780" target="_blank">Lets Consumer</a></li>
								<li><a href="https://apps.apple.com/us/app/lets-driver/id1531271009" target="_blank">Lets Driver</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="section section2" data-parallax="scroll" data-image-src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/bg_pattern.jpg">
			<div class="container">
				<div class="block">
					<div class="column" data-aos="fade-right">
						<h2>Experience fast service</h2>
						<p>Faster than you can imagine.</p>
						<div class="image">
							<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/img1.jpg" alt="">
						</div>
					</div>
					<div class="column" data-aos="fade-left">
						<h2>Safe and Smooth Transactions</h2>
						<p>Everything is transparent.</p>
						<div class="image">
							<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/img2.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="block2">
					<div class="column">
						<h3>Be part of LETS</h3>
					</div>
					<div class="column">
						<ul>
							<li><p>Lets Merchant Partner</p>
								<p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#soon">Sign up today!</a></p>
							</li>
							<li><p>Lets Biker</p>
								<p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#soon">Sign up today!</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-features">
		<div class="container">
			<div class="heading">
				<h2>Our Services</h2>
				<p>Know more on what we can provide to you hand on hand. </p>
			</div>
			<div class="block" data-aos="fade-up">
				<div class="column">
					<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature1.svg" alt=""></div>
					<h2>Lets Pasakay</h2>
					<p>Travel to your desired destination in the fastest yet safest experience.</p>
					<p class="unavailable">Temporarily Unavailable</p>
				</div>
				<div class="column">
					<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature2.svg" alt=""></div>
					<h2>Lets Padala</h2>
					<p>Have your errands be taken care of. Documents and packages will be delivered carefully.</p>
				</div>
				<div class="column">
					<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/feature3.svg" alt=""></div>
					<h2>Lets Pabili</h2>
					<p>You can get your cravings, groceries and anything you need without going outside! Our Lets will handle your needs!</p>
				</div>

			</div>
		</div>
	</div>
	<div class="section">
		<div class="how-to-use">
			<div class="container">
				<div class="heading">
					<h2>How to Use</h2>
					<p>Book your ride in just a few steps and a biker will be in your way.<br> Easy. No hassle.</p>
				</div>
				<div class="block2">
					<div class="column" data-aos="fade-right">
						<div class="main-tab">
							<ul>
								<li><a href="#" data-tab="consumer" class="active">Consumer</a></li>
								<li><a href="#" data-tab="driver">Driver</a></li>
							</ul>
						</div>
						<div class="main-tab-list">
							<ul class="nav nav-pills" role="tablist" data-tab="consumer">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="pill" href="#step1">
										<div class="icon">1</div>
										<div>
											<h3>Install the application</h3>
											<p>Download Lets app from Google Play or App Store</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step2">
										<div class="icon">2</div>
										<div>
											<h3>Choose the Service Type that you want</h3>
											<p>Download Lets app from Google Play or App Store</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step3">
										<div class="icon">3</div>
										<div>
											<h3>Enter the Destination</h3>
											<p>Input the pick-up and drop off locations</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step4">
										<div class="icon">4</div>
										<div>
											<h3>Book your Ride</h3>
											<p>Wait for the nearest biker come to you</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step5">
										<div class="icon">5</div>
										<div>
											<h3>Share your Experience!</h3>
											<p>Give ratings and feedback on your journey!</p>
										</div>
									</a>
								</li>
							</ul><!-- Tab panes -->
							<ul class="nav nav-pills" role="tablist" data-tab="driver" style="display: none;">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="pill" href="#step1-driver">
										<div class="icon">1</div>
										<div>
											<h3>Install the application</h3>
											<p>Download Lets app from Google Play or App Store</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step2-driver">
										<div class="icon">2</div>
										<div>
											<h3>Choose the Service Type that you want</h3>
											<p>Download Lets app from Google Play or App Store</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step3-driver">
										<div class="icon">3</div>
										<div>
											<h3>Enter the Destination</h3>
											<p>Input the pick-up and drop off locations</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step4-driver">
										<div class="icon">4</div>
										<div>
											<h3>Book your Ride</h3>
											<p>Wait for the nearest biker come to you</p>
										</div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#step5-driver">
										<div class="icon">5</div>
										<div>
											<h3>Share your Experience!</h3>
											<p>Give ratings and feedback on your journey!</p>
										</div>
									</a>
								</li>
							</ul><!-- Tab panes -->
						</div>
					</div>
					<div class="column" data-aos="fade-left">
						<div class="tab-content">
							<div class="container tab-pane active" id="step1">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step1.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step2">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step2.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step3">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step3.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step4">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step4.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step5">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step5.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step1-driver">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step1.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step2-driver">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step2.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step3-driver">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step3.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step4-driver">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step4.png" alt=""></div>
							</div>
							<div class="container tab-pane fade" id="step5-driver">
								<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/step5.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-download">
		<div class="container">
			<div class="image">
				<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/download.svg" alt="" data-aos="fade-up">
			</div>
			<div class="content">
				<h2>Make LETS your everyday buddy!</h2>
				<p>Download the app for free</p>
				<ul>
					<li><a href="#" target="_blank" data-toggle="modal" data-target="#soon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_gp.png" alt="Download on Google Play"></a></li>
					<li><a href="#" target="_blank" data-toggle="modal" data-target="#soon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_as.png" alt="Download on App Store"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="section-partner">
		<ul data-aos="fade-up">
			<li>
				<div class="wrap">
					<h4>Lets Merchant Partner</h4>
					<p>Need delivery services for your 
					business? Sign up and be one of our 
					partners and experience exciting 
					perks from us! Available from small 
					to large enterprises.</p>
					<p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#soon">Sign up today!</a></p>
				</div>
				<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/delivery.png" alt=""></div>
			</li>
			<li>
				<div class="wrap">
					<h4>Lets Biker</h4>
					<p>Make your Extra Time to Extra 
					Income! Drive with us. Hurry! Just 
					click the button to register. </p>
					<p><a href="" class="btn btn-primary" data-toggle="modal" data-target="#soon">Sign up today!</a></p>
				</div>
				<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/delivery.png" alt=""></div>
			</li>
		</ul>
	</div>
</div>
<?php get_footer();?>