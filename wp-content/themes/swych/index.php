<?php get_header(); ?>

<div id="primaryContent clearfix">
	
	<h1><?php single_post_title(); ?></h1>
	
	<div id="postContent clearfix">
		<?php /* Start the Loop */ ?>
		<?php while(have_posts()) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
	</div>
	
</div>

<?php get_footer(); ?>