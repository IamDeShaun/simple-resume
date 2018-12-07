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

<?php the_post_navigation(); ?>

<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif; ?>

<?php endwhile; // End of the loop. ?>
			</div> <!-- End Blog-Container -->
</section>

	
<?php get_footer(); ?>
