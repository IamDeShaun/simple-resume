<?php
/**
 * @package Simple_Resume
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php if ( 'post' == get_post_type() ) : ?>
    
  <?php endif; ?>
	</header><!-- .entry-header -->
  <div class="meta">
              <span> By: <?php the_author(); ?></span>
              <span><i class="far fa-clock"> <?php the_date(); ?></i></span>
              <span>
                <i class="fa fa-tags"><?php the_tags(); ?></i>
						</div>
	<?php if ( has_post_thumbnail() ) { // check for feature image ?> 
	<div class="post-banner">
		<?php the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid' )); ?>
	</div><!-- post-image -->
	<?php } ?>
	
	<div>
		<?php the_content(); ?>
		<a href="http://dev-deshaunjones/blog/"><i class="fas fa-arrow-circle-left"><strong>Back To Blog</strong></a></i> 
	</div><!-- post-body -->

</article><!-- #post-## -->
