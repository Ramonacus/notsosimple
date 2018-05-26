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
		$sandwich_button_html =
			'<button class="sandwich-trigger menu-trigger">'
				. '<span class="sandwich-trigger-inner">'
					. '<span class="screen-reader-text">' . __( 'Toggle menu', 'notsosimple' ) . '</span>'
				. '</span>'
			. '</button>';
		
		wp_nav_menu(
			array(
				'theme_location' => 'header-menu',
				'items_wrap' => $sandwich_button_html . '<ul id="%1$s" class="%2$s">%3$s</ul>'
			)
		);
		?>
	</header>
	<section class="main-container">