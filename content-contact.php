<?php 
$contact_headline = get_field('contact_headline');
$contact_social_media = get_field('contact_social_media');
?>

<section id="contact">
    <div class="small-container">
        <header class="section-header">
              <h2><?php echo $contact_headline; ?></h2>
          </header>
    </div><!-- End of Small Container-->

    <div class="container">
      <?php echo $contact_social_media; ?>
    </div>
</section> <!-- End Contact Section-->