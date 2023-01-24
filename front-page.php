<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

?>



<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row d-flex justify-content-center">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

            <div>

			<main class="site-main" id="main">  
                 <h1 class="carousel-heading text-center">A Man for All Centuries</h1>
                <section id="carousel-container"> 
                    <div class="carousel-slide">

                        <!-- <h2>IT Professional</h2>
                        <a href="https://markelliottvapersonal.local/professional/"><img id="it-pro-image" src="/wp-content/uploads/2023/01/ComputerDesk-1-scaled.jpg" alt="Mark Elliott's computer" /></a>
                        <i class="fa-solid fa-circlechevron-right"></i>
                        <button id="slide-pause-btn"><i class="fa-solid fa-circle-pause"></i></button>
                        <i class="fa-solid fa-circlechevron-left"></i>
                        <p id="it-opening-text">Mark Elliott has mostly earned his living in Information Technology.   He spent the first 20 or so years 
                            of his working life in IT operations, mostly in the role of a systems engineer supporting Intel servers in data centers of various sizes.  
                            He also briefly taught technology at the high school and college level in the early 2000's.  After 12 years of trying to make a go of working as a
                        traditional craftsman and artist, he is now back in IT as a developer.  Unless you are extraordinarily talented and productive, one has to go where the market is to make a decent living.</p>
                         -->
                    </div>
				     
                </section>
			</main>

            </div>

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
