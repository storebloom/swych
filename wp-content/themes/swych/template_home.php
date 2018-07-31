<?php /* Template Name: Home */ get_header(); ?>
<div class="main home">
	<div class="static_section">
		<div class="static_section_dots">
			<div class="static_dot"></div>
			<div class="static_dot"></div>
			<div class="static_dot"></div>
			<div class="static_dot"></div>
			<div class="static_dot"></div>
		</div>
		<?php if( have_rows('intro_section') ): while( have_rows('intro_section') ): the_row(); ?>
		<div class="section scrollify intro_section">
			<?php if( have_rows('left') ): while( have_rows('left') ): the_row(); ?>
			<div class="left pink">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<h1 class="title_ghost"><?php the_sub_field('title_ghost'); ?></h1>
						<h1 class="title"><?php the_sub_field('title'); ?></h1>
						<p class="text"><?php the_sub_field('text'); ?></p>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php if( have_rows('right') ): while( have_rows('right') ): the_row(); ?>
			<div class="right blue">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<p>Start swyching,</p>
						<div class="links">
							<a href="<?php the_sub_field('app_store_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge.png" alt="">
							</a>
							<a href="<?php the_sub_field('google_play_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/google-play-badge.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<?php endwhile; endif; ?>
		
		<?php if( have_rows('intro_two') ): while( have_rows('intro_two') ): the_row(); ?>
		<div class="section scrollify intro_two intro_section">
			<?php if( have_rows('left') ): while( have_rows('left') ): the_row(); ?>
			<div class="left blue">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<h1 class="title_ghost"><?php the_sub_field('title_ghost'); ?></h1>
						<h1 class="title"><?php the_sub_field('title'); ?></h1>
						<p class="text"><?php the_sub_field('text'); ?></p>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php if( have_rows('right') ): while( have_rows('right') ): the_row(); ?>
			<div class="right pink">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<p>Start swyching,</p>
						<div class="links">
							<a href="<?php the_sub_field('app_store_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge.png" alt="">
							</a>
							<a href="<?php the_sub_field('google_play_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/google-play-badge.png" alt="">
							</a>
						</div>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<?php endwhile; endif; ?>
		
		<?php if( have_rows('intro_three') ): while( have_rows('intro_three') ): the_row(); ?>
		<div class="section scrollify intro_three intro_section">
			<?php if( have_rows('left') ): while( have_rows('left') ): the_row(); ?>
			<div class="left pink">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<h1 class="title_ghost"><?php the_sub_field('title_ghost'); ?></h1>
						<h1 class="title"><?php the_sub_field('title'); ?></h1>
						<p class="text"><?php the_sub_field('text'); ?></p>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php if( have_rows('right') ): while( have_rows('right') ): the_row(); ?>
			<div class="right blue">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<p>Start swyching,</p>
						<div class="links">
							<a href="<?php the_sub_field('app_store_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge.png" alt="">
							</a>
							<a href="<?php the_sub_field('google_play_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/google-play-badge.png" alt="">
							</a>
						</div>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<?php endwhile; endif; ?>
		
		<?php if( have_rows('intro_four') ): while( have_rows('intro_four') ): the_row(); ?>
		<div class="section scrollify intro_four intro_section">
			<?php if( have_rows('left') ): while( have_rows('left') ): the_row(); ?>
			<div class="left blue">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<h1 class="title_ghost"><?php the_sub_field('title_ghost'); ?></h1>
						<h1 class="title"><?php the_sub_field('title'); ?></h1>
						<p class="text"><?php the_sub_field('text'); ?></p>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		<?php endwhile; endif; ?>
			<?php if( have_rows('right') ): while( have_rows('right') ): the_row(); ?>
			<div class="right pink">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<p>Start swyching,</p>
						<div class="links">
							<a href="<?php the_sub_field('app_store_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge.png" alt="">
							</a>
							<a href="<?php the_sub_field('google_play_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/google-play-badge.png" alt="">
							</a>
						</div>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>

		
		<?php if( have_rows('intro_five') ): while( have_rows('intro_five') ): the_row(); ?>
		<div class="section scrollify intro_five intro_section">
			<?php if( have_rows('left') ): while( have_rows('left') ): the_row(); ?>
			<div class="left pink">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<h1 class="title_ghost"><?php the_sub_field('title_ghost'); ?></h1>
						<h1 class="title"><?php the_sub_field('title'); ?></h1>
						<p class="text"><?php the_sub_field('text'); ?></p>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php if( have_rows('right') ): while( have_rows('right') ): the_row(); ?>
			<div class="right blue">
				<div class="content">
					<div class="content_inner">
						<div class="graphic">
							<img src="<?php the_sub_field('graphic'); ?>" alt="">
						</div>
						<p>Start swyching,</p>
						<div class="links">
							<a href="<?php the_sub_field('app_store_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge.png" alt="">
							</a>
							<a href="<?php the_sub_field('google_play_link'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/google-play-badge.png" alt="">
							</a>
						</div>
				  	</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<?php endwhile; endif; ?>
	</div>	
	
	<div class="section mobile_play_link">
		<?php if( have_rows('intro_section') ): while( have_rows('intro_section') ): the_row(); ?>
			<p>Start swyching,</p>
			<div class="links">
				<a href="<?php the_sub_field('app_store_link'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/app_store_badge_black.png" alt="">
				</a>
				<a href="<?php the_sub_field('google_play_link'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/google_black.png" alt="">
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<?php $i = 0; if( have_rows('how_it_works') ): while( have_rows('how_it_works') ): the_row(); ?>
	<div class="section how_it_works">
		<h1 class="title"><?php the_sub_field('title'); ?></h1>
		<div class="steps">
			<?php if( have_rows('steps') ): while( have_rows('steps') ): the_row(); $i++ ?>
			<?php if ($i % 2 != 0): ?>
			<div class="step <?php echo $i; ?>">
				<div class="step_text">
					<div class="big_number"><?php echo $i; ?>.</div>
					<h1><?php the_sub_field('title'); ?></h1>
					<p><?php the_sub_field('text'); ?></p>
				</div>
				<div class="step_graphic">
					<img src="<?php the_sub_field('graphic'); ?>" alt="">
				</div>
			</div>
			<?php else: ?>
			<div class="step <?php echo $i; ?>">
				<div class="step_graphic">
					<img src="<?php the_sub_field('graphic'); ?>" alt="">
				</div>
				<div class="step_text">
					<div class="big_number"><?php echo $i; ?>.</div>
					<h1><?php the_sub_field('title'); ?></h1>
					<p><?php the_sub_field('text'); ?></p>
				</div>
			</div>
			<?php endif; endwhile; endif; ?>
		</div>
	</div>
	<?php endwhile; endif; ?>
	
	<?php $i = 0; if( have_rows('about') ): while( have_rows('about') ): the_row(); ?>
	<div class="section about">
		<h1 class="title"><?php the_sub_field('title'); ?></h1>
		<h3 class="subtitle"><?php the_sub_field('subtitle'); ?></h3>
		<div class="about_graphic">
			<?php if( have_rows('flip-cards') ) :
				while( have_rows('flip-cards') ) :
					the_row(); $i++
					?>
				<div class="flip">
					<div class="front">
						<img src="<?php the_sub_field('front'); ?>" alt="">
					</div>
					<div class="back">
						<img src="<?php the_sub_field('back'); ?>" alt="">
					</div>
				</div>
				<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
	
	<div class="section about_pink">
		<h1 class="title"><?php the_sub_field('pink_title'); ?></h1>
		<img src="<?php the_sub_field('logos'); ?>" alt="" class="logos">
		<p><?php the_sub_field('pink_text'); ?></p>
	</div>
	<?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>


