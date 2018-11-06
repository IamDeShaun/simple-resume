<?php
/* Template Name: Home Page */

$skills_headline = get_field('skills_headline');
$skills_description = get_field('skills_description');

$experience_header = get_field('experience_header');
$experience_description = get_field('experience_description');
$experience_link_text = get_field('experience_link_text');
$experience_link = get_field('experience_link');

$job_a = get_field('job_a');
$time_employeed_a = get_field('time_employeed_a');
$job_title_a = get_field('job_title_a');
$job_description_a = get_field('job_description_a');

$second_job = get_field('second_job');
$second_job_time = get_field('second_job_time');
$job_title_b = get_field('job_title_b');
$job_description_b = get_field('job_description_b');

$home_portfolio_headline = get_field('home_portfolio_headline');
$home_portfolio_description = get_field('home_portfolio_description');
$hp_link_text = get_field('hp_link_text');
$home_portfolio_link = get_field('home_portfolio_link');


get_header(); ?>
<!-- Site Hero Area-->
<section id="site-hero" class="site-hero">
  <div class="small-container">
    <div class="about">
      <h1>
        <span class="primary">Web Developer</span> 
      </h1>
      <p>Hi, I'm
        <a href="resume.html" target="_blank">DeShaun</a>! and I’m a versatile Web Developer with 5+ years of experience designing, developing, and managing complex websites. 
      </p>
    </div>
  </div>
</section>

<!-- Technical Skills Section-->
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

                <div class="col-sm-3 card">
                <?php the_field('skill_icon'); ?>
                    <h3><?php the_field('skill_title'); ?></h3>
                </div><!-- End Card -->
                <?php endwhile; endif; wp_reset_postdata(); ?>
                </div><!-- End of Row -->
          </div><!-- End of Large Container-->
</section>
<!-- End Technical Skills Section-->

<!-- Resume Section-->
<section id="experience">
  <div class="small-container">
      <header class="section-header">
            <h2><?php echo $experience_header; ?></h2>
            <p><?php echo $experience_description; ?> <a href="<?php echo $experience_link; ?>" target="_blank"><?php echo $experience_link_text; ?></a></p>
        </header>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 job-title">
        <h5><?php echo $job_a; ?></h5>
        <div class="dates"><?php echo $time_employeed_a ; ?></div>
      </div>
      <div class="col-sm-8 job-descrip">
        <h5><?php echo $job_title_a; ?></h5>
       <?php echo $job_description_a; ?>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-sm-4 job-title">
        <h5><?php echo $second_job; ?></h5>
        <div class="dates"><?php echo $second_job_time; ?></div>
      </div>
      <div class="col-sm-8 job-descrip">
          <h5><?php echo $job_title_b; ?></h5>
       <?php echo $job_description_b; ?>
      </div>
    </div>
  </div>

</section>
<!-- End Resume Section-->

<!-- Portolio Section-->
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

<!-- Contact Section-->
<section id="contact">
    <div class="small-container">
        <header class="section-header">
              <h2>Stay In Touch</h2>
          </header>
    </div><!-- End of Small Container-->

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <a href="mailto:ceo@deshaunjones.com" target="_blank"><i class="fas fa-envelope-square fa-5x"></i><br><h6>ceo@deshaunjones.com</h6></a>
        </div>
        <div class="col-sm-4">
            <a href="https://github.com/IamDeShaun" target="_blank"><i class="fab fa-github-square fa-5x"></i><br><h6>Github.com/iamdeshaun</h6></a>
        </div>
        <div class="col-sm-4">
            <a href="https://www.linkedin.com/in/mrdjones/" target="_blank"><i class="fab fa-linkedin fa-5x"></i><br><h6>linkedin.com/in/mrdjones</h6></a>
        </div>
      </div>
    </div>
</section> <!-- End Contact Section-->








<?php get_footer(); ?>



