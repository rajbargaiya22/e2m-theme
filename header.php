<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rj-mhm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rj-mhm' ); ?></a>


	<header class="rj-header">
		<div class="rj-custom-container rj-header-container">
			<div class="rj-site-logo">
				<?php if (has_custom_logo()) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
						<?php $image_alt = get_bloginfo( 'name' );
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
						<img src="<?php echo esc_url($logo_url[0]); ?>" alt="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" >
					</a>
				<?php }else { ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
							<?php $site_title = get_bloginfo( 'name' );  
							  echo $site_title; ?>
						</a>
					</h1>
				<?php } ?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hamburger_icon.png')?>" alt="">
				</button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'        => 'primary-menu',
						)
					);
				?>
				</nav>
		</div>
	</header>
