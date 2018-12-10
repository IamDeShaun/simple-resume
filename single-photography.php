<?php get_header(); ?>

<!-- Full Portfolio Section -->
<section class="photography">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <div class="small-container">
          <header class="section-header">
              <h2><?php the_title(); ?></h2>
              <h4>Location: <?php the_field('photography_location') ?></h4>
              <h4>Photographer: <?php the_field('photo_credit') ?></h4>
          </header>
        </div><!-- End of Small Container-->

<div class="container">
  <div class="row">
  <?php the_field('photo_gallery') ?>
  </div>
</div>
 <?php endwhile; endif; ?> 
 </section>
<?php get_footer(); ?>