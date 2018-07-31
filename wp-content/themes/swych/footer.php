<div class="footer">
	<div class="disclaimer">
		<p>The merchants represented are not sponsors of Swych or otherwise affiliated with Swych. The logos and other identifying marks attached are trademarks of and owned by each represented company and/or its affiliates. Please visit each company’s website for additional terms and conditions.</p>
	</div>
	<div class="footer_main">
		<div class="column">
			<?php the_custom_logo(); ?>
			<div class="social_links">
				<a href="<?php the_field('facebook_url', 'options'); ?>"><span class="fa fa-facebook"></span></a>
				<a href="<?php the_field('linkedin_url', 'options'); ?>"><span class="fa fa-linkedin"></span></a>
				<a href="<?php the_field('twitter_url', 'options'); ?>"><span class="fa fa-twitter"></span></a>
				<a href="<?php the_field('instagram_url', 'options'); ?>"><span class="fa fa-instagram"></span></a>
			</div>
		</div>
		<div class="column menucolumn">
			<h1>Product</h1>
			<?php wp_nav_menu( array( 'theme_location' => 'product_menu', 'items_wrap' => '%3$s' ) ); ?>
		</div>
		<div class="column menucolumn">
			<h1>Company</h1>
			<?php wp_nav_menu( array( 'theme_location' => 'company_menu', 'items_wrap' => '%3$s' ) ); ?>
		</div>
		<div class="column menucolumn">
			<h1>Legal</h1>
			<?php wp_nav_menu( array( 'theme_location' => 'legal_menu', 'items_wrap' => '%3$s' ) ); ?>
		</div>
		<div class="column menucolumn">
			<h1>Learn More</h1>
			<?php wp_nav_menu( array( 'theme_location' => 'learn_more_menu', 'items_wrap' => '%3$s' ) ); ?>
		</div>
	</div>
	<div class="footer_bottom">
		<p>Made with <img src="<?php echo get_template_directory_uri(); ?>/images/heart.png" alt=""> by Swych</p>
	</div>
	
</div>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollify.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.custom.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
