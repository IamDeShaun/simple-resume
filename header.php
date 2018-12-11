<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_Resume
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Front End Developer, Web Design, Web Development, Wordpress, Wordpress Developer, Drupal,PHP, Laravel, SCSS, HTML5, CSS3, JavaScript, jQuery, GIT, ">
	  <meta name="description" content="Hi. My name is DeShaun Jones and I’m a versatile Front-end Developer with 5+ years of experience designing, developing, and managing complex websites. I specialize in building custom WordPress themes from the ground up. My skill set also includes PHP, Laravel, SCSS, HTML5, CSS3, JavaScript, jQuery, GIT, WordPress Drupal and Grunt.js to name a few. I love creating for the web.">
	 <meta property="og:image" content="http://deshaunjones.com/wp-content/uploads/2018/11/WP-Theme-Portfolio-Image.png" />
    
    <!-- Custom CSS Styles -->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

    <!-- Font Awesome CDN-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simple-resume' ); ?></a>



	<!-- Top Navigation Area-->
  <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <span class="brandnew"><a class="navbar-brand" href="http://dev-deshaunjones/">DeShaun <strong>Jones</strong></a></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars fa-lg" aria-hidden="true" title="Toggle navigation"></i>
              <span class="sr-only">Toggle navigation</span>
						</button>
						
						<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
						
            <?php
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'navbarsExample03',
									'menu_class'        => 'nav navbar-nav ml-auto',
									'walker'            => new WP_Bootstrap_Navwalker(),
								) );
								?>
        </div>
        </div>   
        </nav>
  </header>
  <!-- End Top Navigation Area-->