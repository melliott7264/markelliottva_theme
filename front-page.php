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
                 <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
			
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="5000">
						<h2 class="slide-heading">20th & 21st Centuries</h2>
						<img class="slide-image" src="/wp-content/uploads/2023/01/ComputerDesk-1-scaled.jpg" class="d-block w-100" alt="Mark Elliott's computer">
						<div class="">
							<p>I have mostly earned my living in Information Technology, both in the 20th and 21st centuries. I have been coding since the early days of personal computers and spent the first 20 or so years of my working life in IT operations, mostly in the role of a systems engineer supporting Intel servers in data centers of various sizes. I also briefly taught technology at the high school and college level in the early 2000's.  After 12 years of trying to make a go of working as a traditional craftsman and artist, I am now back in IT as a developer.  Unless you are extraordinarily talented, productive and lucky, it is very difficult to make a living in the arts, particularly historic arts and crafts.  You have to go where the market is; and that is the technology of the current age.</p>
						</div>
						</div>
						<div class="carousel-item" data-bs-interval="5000">
						<h2 class="slide-heading">18th & 19th Centuries</h2>
						<img class="slide-image" src="/wp-content/uploads/2021/09/WPRifle19-1-scaled.jpg" class="d-block w-100" alt="early Virginia flintlock rifle">
						<div class="">
				
							<p>Since I was a teenager, the American longrifle and longrifle culture has held a special place in my heart.  Over the years, I have produced many longrifles; although not as many as I would have liked.  I have also produced countless powder horns and shot pouches as well as a few knives.  Unfortunately, these interests represent a limited market, and my productivity was never that high.  Making a good living in the traditional crafts has always been elusive.  Those who do make a living at it are involved in a lot of different aspects of the craft as well as being extraordinarily talented and productive</p>
						</div>
						</div>
						<div class="carousel-item" data-bs-interval="5000">
						<h2 class="slide-heading">18th & 19th Centuries</h2>
						<img class="slide-image" src="/wp-content/uploads/2019/11/marriage_certificate_20190529_0001-scaled.jpg" class="d-block w-100" alt="fraktur marriage certificate">
						<div class="">
		
							<p>I have been an artist my entire life producing art in many different media.  I was in the gifted and talent program for art throughout my years in the Hanover County Public Schools, and I would have liked to have made it my vocation.  However, I didn't see a path at the time.  Actually, after tring to make a living at it later in life,  I still don't see a path to a good living.  This is mostly becuase of my focus on historical crafts. It seems that what money there is, is in fine arts.  Currently I pursue my artistic expression in the form of fraktur - 18th and 19th century decorative documents mostly associated with the German-American community.  I also enjoy architectural and landscape photography as the occasion presents itself.</p>
						</div>
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

			

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
