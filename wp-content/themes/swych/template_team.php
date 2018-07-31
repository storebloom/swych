<?php /* Template Name: Team */ get_header(); ?>
<div class="main team">
	<?php if( have_rows('banner') ): while( have_rows('banner') ): the_row(); ?>
	<div class="section team_banner">
		<h1 class="title"><?php the_sub_field('title'); ?></h1>
		<h3 class="subtitle"><?php the_sub_field('subtitle'); ?></h3>
	</div>
	<?php endwhile; endif; ?>
	
	<div class="section team_members">
		<?php $i = 0; if( have_rows('team_members') ): while( have_rows('team_members') ): the_row(); $i++; if ($i % 2 != 0): ?>
		<div class="team_member">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
			<img src="<?php the_sub_field('image'); ?>" alt="">
		</div>
		<?php else: ?>
		<div class="team_member">
			<img src="<?php the_sub_field('image'); ?>" alt="">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
		</div>
		<?php endif; endwhile; endif; ?>
	</div>
	
	<div class="section team_members blockchain_team">
		<?php $i = 0; if( have_rows('blockchain_lab_team') ): while( have_rows('blockchain_lab_team') ): the_row(); $i++; if ($i % 2 != 0): ?>
		<div class="team_member">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
			<img src="<?php the_sub_field('image'); ?>" alt="">
		</div>
		<?php else: ?>
		<div class="team_member">
			<img src="<?php the_sub_field('image'); ?>" alt="">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
		</div>
		<?php endif; endwhile; endif; ?>
	</div>
	
	<div class="section team_members board_of_directors">
		<?php $i = 0; if( have_rows('board_of_directors') ): while( have_rows('board_of_directors') ): the_row(); $i++; if ($i % 2 != 0): ?>
		<div class="team_member">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
			<img src="<?php the_sub_field('image'); ?>" alt="">
		</div>
		<?php else: ?>
		<div class="team_member">
			<img src="<?php the_sub_field('image'); ?>" alt="">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
		</div>
		<?php endif; endwhile; endif; ?>
	</div>
	
	<div class="section team_members advisors">
		<?php $i = 0; if( have_rows('advisors') ): while( have_rows('advisors') ): the_row(); $i++; if ($i % 2 != 0): ?>
		<div class="team_member">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
			<img src="<?php the_sub_field('image'); ?>" alt="">
		</div>
		<?php else: ?>
		<div class="team_member">
			<img src="<?php the_sub_field('image'); ?>" alt="">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
		</div>
		<?php endif; endwhile; endif; ?>
	</div>
	
		<div class="section team_members investor">
		<?php $i = 0; if( have_rows('investor') ): while( have_rows('investor') ): the_row(); $i++; if ($i % 2 != 0): ?>
		<div class="team_member">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
			<img src="<?php the_sub_field('image'); ?>" alt="">
		</div>
		<?php else: ?>
		<div class="team_member">
			<img src="<?php the_sub_field('image'); ?>" alt="">
			<div class="text">
				<div class="name">
					<h1><?php the_sub_field('name'); ?></h1>
					<h3><?php the_sub_field('position'); ?></h3>
				</div>
				<p><?php the_sub_field('bio'); ?></p>
			</div>
		</div>
		<?php endif; endwhile; endif; ?>
	</div>
	
</div>
<?php get_footer(); ?>
