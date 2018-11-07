<?php
/* Template Name: Portfolio Page */

get_header(); ?>

 <!-- Full Portfolio Section -->
 <section id="fullportfolio">
      <div class="small-container">
          <header class="section-header">
              <h2>My Work</h2>
          </header>
        </div><!-- End of Small Container-->

        <div class="container">

            <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
            <?php the_content(); ?>
           
            <?php endwhile; endif; ?>

                <?php 
                        $args = array(
                        'post_type' => 'mywork',
                        'order' => 'DSC'
                        );
                        $query = new WP_Query( $args );
                        ?>

            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-sm-6 makeroom">
                    <a href="<?php the_field('portfolio_link_to_modal'); ?>" data-toggle="modal">
                    <?php the_field('portfolio_image'); ?>
                    <h5><?php the_title(); ?></h5>
                  </a>

                  <!-- Portfolio Modal -->
                  <?php the_field('portfolio_modal'); ?>
                </div><!-- End Of Porfolio Item -->
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </div><!-- End of Row-->
          </div><!-- End of Large Container-->
  </section> <!-- End Full Portfolio Section -->
<?php get_footer(); ?>