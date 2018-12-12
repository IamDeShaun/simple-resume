<?php get_header(); ?>

<!-- Full Portfolio Section -->
<section class="photography">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <div class="small-container">
          <div class="event-info">
              <span><p><?php the_title(); ?></p></span>
              <span><p>Location: <?php the_field('photography_location') ?></p></span>
              <span><p>Photographer: <?php the_field('photo_credit') ?></p></span>
          </div>
        </div><!-- End of Small Container-->

<div class="container">
  <div class="row">
  <?php the_field('photo_gallery') ?>
  </div>
</div>
 <?php endwhile; endif; ?> 
 </section>
<?php get_footer(); ?>