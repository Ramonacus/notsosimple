<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="main-header">
		<h1 class="site-name">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>	
			</a>
		</h1>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header-menu'
			)
		);
		?>
	</header>
	<section class="main-container">