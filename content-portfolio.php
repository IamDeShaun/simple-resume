<?php
$home_portfolio_headline = get_field('home_portfolio_headline');
$home_portfolio_description = get_field('home_portfolio_description');
$hp_link_text = get_field('hp_link_text');
$home_portfolio_link = get_field('home_portfolio_link');
?>

<section id="portfolio" class="mb-4">
    <div class="small-container">
        <header class="section-header">
            <h2><?php echo $home_portfolio_headline; ?></h2>
            <p><?php echo $home_portfolio_description; ?><a href="<?php echo $home_portfolio_link; ?>" target="_blank"><?php echo $hp_link_text; ?></a></p> 
        </header>
      </div><!-- End of Small Container-->

      <div class="container">
        <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
               <?php the_content(); ?>
           
             <?php endwhile; endif; ?>

             <?php 
                    $args = array(
                    'post_type' => 'home_portfolio',
                    'order' => 'DSC'
                    );
                    $query = new WP_Query( $args );
                    ?>

              <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

              <div class="col-sm-4">
                  <a href="<?php the_field('hp_link_to_modal'); ?>" data-toggle="modal">
                  <?php the_field('hp_image'); ?>
                  <h6><?php the_title();?></h6>
                </a>
                <?php the_field('hp_modal'); ?>
               
            </div><!-- End Of Porfolio Item -->
  
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
      </div>
</section>
<!-- End Portolio Section-->