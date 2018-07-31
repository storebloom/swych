<?php /* Template Name: About */ get_header(); ?>
<div class="main about">
	<?php if( have_rows('banner') ): while( have_rows('banner') ): the_row(); ?>
	<div class="section banner" style="background-image:url('<?php the_sub_field('background'); ?>')">
		<div class="mobile_background"><img src="<?php the_sub_field('mobile_background'); ?>" alt=""></div>
		<div class="text">
			<h1><?php the_sub_field('title'); ?></h1>
			<p><?php the_sub_field('text'); ?></p>
			<a href="<?php the_sub_field('movie_link'); ?>" class="movie_link" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/images/play_btn.png" alt=">">
				Play movie
			</a>
		</div>
	</div>
	<?php endwhile; endif; ?>
	
	<div class="section">
		<div class="services">
		<?php $i = 0; if( have_rows('services') ): while( have_rows('services') ): the_row(); $i++; if ($i % 2 != 0): ?>
			<div class="service">
				<img src="<?php the_sub_field('graphic'); ?>" alt="">
				<div class="text">
					<h1 class="title"><?php the_sub_field('title'); ?></h1>
					<p class="text"><?php the_sub_field('text'); ?></p>
				</div>
			</div>
			<?php else: ?>
			<div class="service">
				<div class="text">
					<h1><?php the_sub_field('title'); ?></h1>
					<p><?php the_sub_field('text'); ?></p>
				</div>
				<img src="<?php the_sub_field('graphic'); ?>" alt="">
			</div>
		<?php endif; endwhile; endif; ?>
		</div>
	</div>
	<?php if( have_rows('features') ): while( have_rows('features') ): the_row(); ?>
	<div class="section features">
		<h1 class="title"><?php the_sub_field('title'); ?></h1>
		<div class="text_boxes">
			<?php if( have_rows('text_boxes') ): while( have_rows('text_boxes') ): the_row(); ?>
			<div class="text_box">
				<img src="<?php the_sub_field('icon'); ?>" alt="">
				<h1><?php the_sub_field('title'); ?></h1>
				<p><?php the_sub_field('text'); ?></p>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<?php endwhile; endif; ?>
	
	<div class="section retailers">
		<h1 class="title">Participating Retailers</h1>
		<div class="retailer_icons">
			<?php if( have_rows('retailers') ): while( have_rows('retailers') ): the_row(); ?>
			<div class="retailer <?php the_sub_field('country'); ?>">
				<img src="<?php the_sub_field('logo'); ?>" alt="" class="logo">
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	
	<?php if( have_rows('why') ): while( have_rows('why') ): the_row(); ?>
	<div class="section why_choose">
		<h1 class="title"><?php the_sub_field('title'); ?></h1>
		<h3 class="subtitle"><?php the_sub_field('subtitle'); ?></h3>
		<div class="main_text">
			<?php the_sub_field('text'); ?>
		</div>
	</div>
	<?php endwhile; endif; ?>
	
	<?php if( have_rows('partnership') ): while( have_rows('partnership') ): the_row(); ?>
	<div class="section partnership">
		<h1 class="title"><?php the_sub_field('title'); ?></h1>
		<div class="text_boxes">
			<?php if( have_rows('text_boxes') ): while( have_rows('text_boxes') ): the_row(); ?>
			<div class="text_box <?php if( get_sub_field('big_image') ) echo 'big_image'; ?>">
				<?php if( get_sub_field('big_image') ): ?>
				<img src="<?php the_sub_field('logo'); ?>" alt="">
				<?php else: ?>
				<?php if(get_sub_field('icon')): ?><img src="<?php the_sub_field('icon'); ?>" alt="" class="icon"><?php endif; ?>
				<h1><?php the_sub_field('title'); ?></h1>
				<p><?php the_sub_field('text'); ?></p>
				<?php endif; ?>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<?php endwhile; endif; ?>

	<div class="contact">
		<div class="section">
			<h1>Contact Us</h1>
			<?php echo do_shortcode('[contact-form-7 id="235" title="Contact Form"]'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
