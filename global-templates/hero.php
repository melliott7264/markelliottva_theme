<?php
/**
 * Hero setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) || is_active_sidebar( 'herocanvas' ) ) :
	?>

	<div class="wrapper row d-flex justify-content-center bg-light" id="wrapper-hero">
	

		<?php
		get_template_part( 'sidebar-templates/sidebar', 'hero' );?>

		<div id=hero-canvas>
			<?php	
			get_template_part( 'sidebar-templates/sidebar', 'herocanvas' );?>

		</div>

		<?php
		get_template_part( 'sidebar-templates/sidebar', 'statichero' );
		?>
		
	

	</div>

	<?php
endif;
