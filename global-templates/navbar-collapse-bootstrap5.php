<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-light" aria-labelledby="main-nav-label">


	<div class="<?php echo esc_attr( $container ); ?>">

		<!-- Your site branding -->
		<?php get_template_part( 'global-templates/navbar-branding' ); ?>

			<!-- Icon and link for Muzzleloader Range Log -->
		<h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>
		<div id="range-log-group">
			<a href="https://range.markelliottva.com" target="_blank"><img id="range-log-logo" src="/wp-content/uploads/2023/01/RangeLogIcon.jpg" alt="range log application link" /></a>
		</div>

		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
		
	</div><!-- .container(-fluid) -->
	
</nav><!-- #main-nav -->
