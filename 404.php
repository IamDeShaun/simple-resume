<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Simple_Resume
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
			<div class="small-container">
			<header class="section-header">
					<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'simple-resume' ); ?></h2><br >
					<p> Let's travel back to the <a href="http://dev-deshaunjones/">home page</a></p>
				</header><!-- .page-header -->
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<h5 style="text-align:center;">View my resume in the mean time</h5> 
						<iframe src="https://drive.google.com/file/d/177KospaEkOc8gKUkuTfpfamFINgT1ati/preview" width="100%" height="1000px"></iframe>

					</div>
					<aside class="side-info col-sm-4">
					<aside id="secondary" class="widget-area" role="complementary">
					<section id="text-2" class="widget widget_text">
						<h4 class="widget-title">Hire Me</h4>			
						<div class="textwidget"><strong>Best Web Design &amp; Development services online! </strong>I'm currently available for any freelancing opportunities. Contact me know so we can get started building your web presence!<br><br><a href="mailto:ceo@deshaunjones.com" class="btn btn-warning"> Lets Work</a></div>
					</section>
		
						</aside>
					</aside>
				</div> <!-- End .row -->
			</div> <!-- End .container -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
