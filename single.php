<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Simple_Resume
 */

get_header(); ?>

 <section id="blog-post">
    <div class="blog-container">
		<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', 'single' ); ?>

<?php endwhile; // End of the loop. ?>
			</div> <!-- End Blog-Container -->
</section>

	
<?php get_footer(); ?>
