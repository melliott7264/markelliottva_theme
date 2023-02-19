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
			<!-- <div class="col-md-8 content-area " > inserted to limit page width -->

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

            <div>

			<main class="site-main" id="main">  
                 <h1 class="carousel-heading text-center">A Man for All Centuries</h1>
                 <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
			
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="15000">
							<h2 class="slide-heading">20th & 21st Centuries</h2>
							<a href="/professional/"><img class="slide-image" src="/wp-content/uploads/2023/01/ComputerDesk-1-scaled.jpg" class="d-block w-100" alt="Mark Elliott's computer"></a>
							<p class="carousel-item-text">I have mostly earned my living in Information Technology, both in the 20th and 21st centuries. I have been coding since the early days of personal computers and spent the first 20 or so years of my working life in IT operations, mostly in the role of a systems engineer supporting Intel servers in data centers of various sizes. I also briefly taught technology at the high school and college level in the early 2000's.  After 12 years of trying to make a go of working as a traditional craftsman and artist, I am now back in IT as a developer.</p>
						</div>
						<div class="carousel-item" data-bs-interval="12000">
							<h2 class="slide-heading">18th & 19th Centuries</h2>
							<a href="/craftsman/"><img class="slide-image" src="/wp-content/uploads/2021/09/WPRifle19-1-scaled.jpg" class="d-block w-100" alt="early Virginia flintlock rifle"></a>
							<p class="carousel-item-text">Since I was a teenager, the American longrifle and longrifle culture has held a special place in my heart.  Over the years, I have produced many longrifles.  I have also produced countless powder horns and shot pouches as well as a few knives.  After a number of years trying to make a living practicing my traditional crafts, I am now pursuing it just as a hobby.</p>
						</div>
						<div class="carousel-item" data-bs-interval="11000">
							<h2 class="slide-heading">18th & 19th Centuries</h2>
							<a href="/artist/"><img class="slide-image" src="/wp-content/uploads/2019/11/marriage_certificate_20190529_0001-scaled.jpg" class="d-block w-100" alt="fraktur marriage certificate"></a>
							<p class="carousel-item-text">I have been an artist my entire life producing art in many different media. Currently I pursue my artistic expression in the form of fraktur - 18th and 19th century decorative documents mostly associated with the German-American community.</p>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
					
					</div>

				

			</main>

			</div>

            <!-- </div> -->

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
