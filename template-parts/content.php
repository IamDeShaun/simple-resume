<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simple_Resume
 */

?>

<div class="blog-container">

	<article id="post-<?php the_ID(); ?>" class="card card-body mb-2">
	<header>
		<?php
		if ( is_singular() ) :
			the_title( '<h4 class="u-mb3">', '</h4>' );
		else :
			the_title( '<h4 class="u-mb3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif; ?>
	</header><!-- .entry-header -->
	  <div class="row">
          <div class="col-sm-4">
						<?php if ( has_post_thumbnail() ) { // Check for post image ?>
            <div class="post-thumb">
                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('full'); ?></a>
						</div>
						<?php } ?>
          </div>
          <div class="col-sm-8">
            <div>
                 <?php the_excerpt(); ?>

            </div>
            <div class="meta">
              <span> By: <?php the_author(); ?></span>
              <span><i class="far fa-clock"> <?php the_date(); ?></i></span>
              <span>
                <i class="fa fa-tags"><?php the_tags(); ?></i>
						</div>
						<footer class="entry-footer">
		<?php simple_resume_entry_footer(); ?>
	</footer><!-- .entry-footer -->
					</div>
        </div> <!-- End Row-->
</article>
</div>




