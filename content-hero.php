<?php 
$hero_headline = get_field('hero_headline');
$hero_description = get_field('hero_description');

?>

<!-- Site Hero Area-->
<section id="site-hero" class="site-hero">
  <div class="small-container">
    <div class="about">
      <h1>
        <span class="primary"><?php echo $hero_headline ?></span> 
      </h1>
     <?php echo $hero_description; ?>
    </div>
  </div>
</section>