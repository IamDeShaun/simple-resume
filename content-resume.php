<?php 
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
?>

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
        <div class="dates"><i><?php echo $time_employeed_a ; ?></i></div>
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
        <div class="dates"><i><?php echo $second_job_time; ?></i></div>
      </div>
      <div class="col-sm-8 job-descrip">
          <h5><?php echo $job_title_b; ?></h5>
       <?php echo $job_description_b; ?>
      </div>
    </div>
  </div>

</section>
<!-- End Resume Section-->
