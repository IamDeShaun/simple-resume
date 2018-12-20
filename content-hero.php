<?php 
$hero_headline = get_field('hero_headline');
$hero_description = get_field('hero_description');

?>

<!-- Site Hero Area-->
<section id="site-hero" class="site-hero">
	
	<div id="idea">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
                <span>Creativity</span>
            </div>
            <div class="col-lg-2">
                <span class="plus">+</span>
            </div>
            <div class="col-lg-5">
                <span>Development</span>
            </div>
          </div>
        </div>
      </div>
	
  <div class="small-container">
    <div class="about">
     <?php echo $hero_description; ?>
    </div>
  </div>
</section>