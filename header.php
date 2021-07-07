<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klink_festival_dessau
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'klink' ); ?></a>

	<header id="masthead" class="site-header">
		<input type="checkbox" id="navigation-checkbox" role="button">
		<div id="site-navigation">
			<label for="navigation-checkbox">
				<svg width="24" height="24">
				<line x1="0" y1="12" x2="24" y2="12"></line>
					<line x1="0" y1="12" x2="24" y2="12"></line>
					<line x1="0" y1="12" x2="24" y2="12"></line>
				</svg>
			</label>
			<nav id="main-navigation">
				<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'klink' ); ?></button>-->
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
		<div id="site-branding">
			<a class="site-logo" href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
				<?php
					if ( has_custom_logo() ) {
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
						echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
						echo get_bloginfo( 'name' );
					}
				?>
			</a>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
