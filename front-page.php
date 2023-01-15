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
         
            <h1 class="text-center">A Man for All Centuries</h1>

                <h2>IT Professional</h2>
                <a href="https://markelliottvapersonal.local/professional/"><img id="it-pro-image" src="/wp-content/uploads/2023/01/ComputerDesk-1-scaled.jpg" alt="Mark Elliott's computer" /></a>
                <p id="it-opening-text">Mark Elliott has mostly earned his living in Information Technology.   He spent the first 20 or so years 
                    of his working life in IT operations, mostly in the role of a systems engineer supporting Intel servers in data centers of various sizes.  
                    He also briefly taught technology at the high school and college level in the early 2000's.  After 12 years of trying to make a go of working as a
                traditional craftsman and artist, he is now back in IT as a developer.  Unless you are extraordinarily talented and productive, one has to go where the market is to make a decent living.</p>

                <h2>Craftsman</h2>
                <a href="https://markelliottvapersonal.local/craftsman/"><img id="craftsman-image" src="/wp-content/uploads/2021/09/WPRifle19-1-scaled.jpg" alt="early Virginia flintlock rifle" /></a>
                <p id="craftsman-opening-text">Since he was a teenager, the love of Mark's life has been the American longrifle and longrifle culture.  Over the years,
                    Mark has produced many longrifles; although not as many as he would have liked.  He has also produced countless powder horns and shot pouches as well as
                    a few knives.  Unfortunately, these interests comprise a limited market, and Mark's productivity was never that high.  Making a good living in the traditional crafts has always been elusive.  Those who do make a living at it, are involved in a lot of different aspects of the craft.</p>

                <h2>Artist</h2>
                <a href="https://markelliottvapersonal.local/artist/"><img id="artist-image" src="/wp-content/uploads/2019/11/marriage_certificate_20190529_0001-scaled.jpg" alt="fraktur marriage certificate" /></a>
                <p id="artist-opening-text">Mark has been an artist his entire life producing art in many different media.  He was in the gifted and talent program for art throughout his
                    years in the Hanover County Public Schools.  He would have liked to have made it his profession but didn't see a path at the time.  At this late stage in his
                    life, he still sees it only as an avocation as opposed to a profession that can produce an adequate living. This is mostly becuase of the media and genre on which
                    Mark chose to focus.  Mark currently pursues his art in the form of fraktur - 18th and 19th century decorative documents mostly associated with the German-American community.  
                    He also enjoys architectural and landscape photography as the occasion presents itself.  
                </p>
				     

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
