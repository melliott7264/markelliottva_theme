<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-light"  aria-labelledby="main-nav-label">
				
	<!-- <h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2> -->
	<div id="brand">
		<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
			<img id="brand-logo" src="/wp-content/uploads/2019/08/MarkElliott-2.jpg" />
		</a>
		
	</div>
	<h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>
	<div id="range-log-group">
		<a href="https://range.markelliottva.com" target="_blank"><img id="range-log-logo" src="/wp-content/uploads/2023/01/RangeLogIcon.jpg" alt="range log application link" /></a>
		<!-- <a id="range-log-instructions" class="text-center" href="https://markelliottva.com/2022/09/muzzleloader-range-log/" >Range Log Instructions</a> -->
	</div>
<?php if ( 'container' === $container ) : ?>
	<div class="container">
<?php endif; ?>

		<!-- <?php get_template_part( 'global-templates/navbar-branding' ); ?> -->

		<button
			class="navbar-toggler"
			type="button"
			data-toggle="collapse"
			data-target="#navbarNavDropdown"
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
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

<?php if ( 'container' === $container ) : ?>
	</div><!-- .container -->
<?php endif; ?>

</nav><!-- #main-nav -->
