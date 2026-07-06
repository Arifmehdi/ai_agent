<?php
/**
 * Shared header + top navigation
 */
$base = get_template_directory_uri() . '/assets/images/';

if ( ! function_exists( 'cal_active' ) ) {
	function cal_active( $slug ) {
		if ( 'home' === $slug && is_front_page() ) {
			return 'active';
		}
		if ( 'home' !== $slug && is_page( $slug ) ) {
			return 'active';
		}
		return '';
	}
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="page">

	<!-- ===== HEADER ===== -->
	<header class="site-header" id="siteHeader">
		<div class="container header-inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
				<img src="<?php echo esc_url( $base ); ?>home/logo.jpg" alt="Calibras" class="brand-logo" />
			</a>
			<nav class="main-nav" id="mainNav">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo cal_active( 'home' ); ?>">Home</a>
				<a href="<?php echo esc_url( home_url( '/elector/' ) ); ?>" class="<?php echo cal_active( 'elector' ); ?>">Elector</a>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="<?php echo cal_active( 'about' ); ?>">About Us</a>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="<?php echo cal_active( 'blog' ); ?>">Blog</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="<?php echo cal_active( 'contact' ); ?>">Contact</a>
			</nav>
			<div class="header-actions">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="link-muted">Book a Demo</a>
				<a href="<?php echo esc_url( home_url( '/elector/' ) ); ?>" class="btn btn-dark">Explore Elector <span class="arr">&rarr;</span></a>
				<button class="nav-toggle" id="navToggle" aria-label="Menu">
					<span></span><span></span><span></span>
				</button>
			</div>
		</div>
	</header>
