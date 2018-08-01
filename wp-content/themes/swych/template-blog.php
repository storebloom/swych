<?php
/**
 * Template Name: Blog
 */

get_header();

$args = array(
	'posts_per_page' => -1,
	'post_type'      => 'post',
);
?>
<div class="main blog">
	<div class="blog-wrap">
	<h2><?php echo esc_html__( 'Press Mentions', 'swych' ); ?></h2>

	<div class="blog-list">
		<?php
		$query = new WP_Query( $args );

		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
				<div class="blog-item">
					<div class="blog-image">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					</div>
					<div class="blog-info">
						<a href="<?php the_field( 'blog_link' ); ?>">
							<?php the_title(); ?>

							<div class="blog-publisher">
								<?php the_field( 'blog_publisher' ); ?>
							</div>
						</a>

						<div class="blog-date">
							<?php echo esc_html( get_the_date() ); ?>
						</div>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		wp_reset_postdata();
		?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
