<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
	<div class="header">
		<?php the_custom_logo(); ?>LAST TEST
		<a href="<?php echo get_home_url(); ?>" class="custom-logo-link black_logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/black_logo.png" alt="" class="custom-logo">
		</a>
		<div class="menu_open">
			<hr>
			<hr>
			<hr>
		</div>
		<div class="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
		</div>
	</div>