<?php
/* Template Name: Photography */

get_header(); ?>

<!-- Full Portfolio Section -->
<section class="photography">
      <div class="small-container">
          <header class="section-header">
              <h2>Check Out My Photography</h2>
          </header>
        </div><!-- End of Small Container-->

<div class="container">
  <div class="row">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
      <?php the_content(); ?>
              
      <?php endwhile; endif; ?>
   
        <?php 
           $args = array(
          'post_type' => 'photography',
          'order' => 'DSC'
                          );
          $query = new WP_Query( $args );
          ?>
   
        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        
        <div class="col-md-6">
          <a href="<?php the_permalink(); ?>"><?php the_field('money_shot'); ?>
          <h4><?php the_title(); ?></h4>
          </a>
        </div>
       <?php endwhile; endif; wp_reset_postdata(); ?>
  </div> <!-- End Row-->
</div><!-- End Container -->
</section>
<?php get_footer(); ?>