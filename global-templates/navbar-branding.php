<?php
/**
 * Navbar branding
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! has_custom_logo() ) { ?>

	<!-- Site branding with small portrait -->
	<div id="brand">
		<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
			<img id="brand-logo" src="/wp-content/uploads/2019/08/MarkElliott-2.jpg" alt="Mark Elliott portrait" />
		</a>
		
	</div>

	<?php
} else {
	the_custom_logo();
}
