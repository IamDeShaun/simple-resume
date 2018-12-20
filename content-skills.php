<?php
$skills_headline = get_field('skills_headline');
$skills_description = get_field('skills_description');
?>


<section id="skills" class="mb-4">
      
          <div class="small-container">
            <header class="section-header">
                <h2><?php echo $skills_headline; ?></h2>
                <p><?php echo $skills_description; ?></p>
              
            </header>
          </div><!-- End of Small Container-->
            
          <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
               <?php the_content(); ?>
           
             <?php endwhile; endif; ?>

             <?php 
                    $args = array(
                    'post_type' => 'techskills',
                    'order' => 'DSC'
                    );
                    $query = new WP_Query( $args );
                    $skill_icon = get_field('skill_icon');
                    $skill_title = get_field('skill_title');
                    ?>

              <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

                <div class="col-lg-4 col-md-6 col-sm-12 card">
                <?php the_field('skill_icon'); ?>
                    <h3><?php the_field('skill_title'); ?></h3>
                </div><!-- End Card -->
                <?php endwhile; endif; wp_reset_postdata(); ?>
                </div><!-- End of Row -->
          </div><!-- End of Large Container-->
</section>
<!-- End Technical Skills Section-->
