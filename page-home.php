<?php
/* Template Name: Home Page */

$skills_headline = get_field('skills_headline');
$skills_description = get_field('skills_description');

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
                <div class="col-sm-3 card">
                    <i class="fab fa-html5 fa-5x" style="color:#e34f26"></i>
                    <h3>HTML</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="fab fa-css3-alt fa-5x" style="color:#0645ad;"></i>
                    <h3>CSS</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="fab fa-sass fa-5x" style="color:#c69;"></i>
                    <h3>SCSS</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="fab fa-js fa-5x" style="color:#f7df1e;"></i>
                    <h3>Javascript</h3>
                </div>
            </div><!-- End of Row-->

            <div class="row">
                <div class="col-sm-3 card">
                    <i class="fab fa-php fa-5x" style="color:#4f5b93;"></i>
                    <h3>PHP</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="fas fa-database fa-5x" style="color: #00758f;"></i>
                    <h3>Sql</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="fab fa-github fa-5x" style="color: #6e5494;"></i>
                    <h3>Git</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="fas fa-terminal fa-5x"></i>
                    <h3>Command Line</h3>
                </div>
            </div><!-- End of Row-->

            <div class="row">
                <div class="col-sm-3 card">
                    <i class="fab fa-wordpress-simple fa-5x" style="color:#21759b;"></i>
                    <h3>WordPress</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="fab fa-drupal fa-5x" style="color:#0077c0;"></i>
                    <h3>Drupal</h3>
                </div>
                <div class="col-sm-3 card">
                    <i class="far fa-smile-wink fa-5x" style="color:#45bafc"></i>
                    <h3>Pizza Connoisseur</h3>
                </div>
            </div><!-- End of Row-->

          </div><!-- End of Large Container-->
</section>
<!-- End Technical Skills Section-->

<!-- Resume Section-->
<section id="experience">
  <div class="small-container">
      <header class="section-header">
            <h2>Experience </h2>
            <p>Some of the position's I held. Here is my full <a href="resume.html" target="_blank">Resume.</a></p>
        </header>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 job-title">
        <h5>Rensselaer Polytechnic Institute</h5>
        <div class="dates">August 2016 - Present</div>
      </div>
      <div class="col-sm-8 job-descrip">
        <h5>Web Developer</h5>
        <p>Currently improving the web presence for the Folsom Library department at Rensselaer. Responsibilities include re developing the Folsom Library websites, maintenance and communication.</p>
          <ul>
            <li>Collaborate with other team members and stakeholders.</li>
            <li>Create quality mockups and prototypes on tight timelines.</li>
            <li>Maintain branding throughout the product’s interface.</li>
            <li>Develop functional and appealing web applications based on usability.</li>
            <li>Provide website maintenance and enhancements.</li>
          </ul>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-sm-4 job-title">
        <h5>Graham Windham</h5>
        <div class="dates">Freelancer</div>
      </div>
      <div class="col-sm-8 job-descrip">
          <h5>WordPress Developer</h5>
        <p>As a WordPress Developer for Graham Windham I was tasked with creating a custom page template for the organization current WordPress theme website.</p>
          <ul>
            <li>Tools used for this job was HTML5, CSS, JS and PHP.</li>
            <li>Collaborate with other team members and stakeholders.</li>
            <li>Designing and implementing custom page templates.</li>
            <li>Formulate an effective, responsive design and turning it into a working theme.</li>
          </ul>
      </div>
    </div>
  </div>

</section>
<!-- End Resume Section-->

<!-- Portolio Section-->
<section id="portfolio" class="mb-4">
    <div class="small-container">
        <header class="section-header">
            <h2>Portfolio</h2>
            <p>Here are some examples of my work. View my full <a href="portfolio.html" target="_blank">Portfolio!</a></p> 
        </header>
      </div><!-- End of Small Container-->

      <div class="container">
        <div class="row">
              <div class="col-sm-4">
                  <a href="#homeportfolio1" data-toggle="modal">
                  <img src="http://dev-deshaunjones/wp-content/uploads/2018/11/portfolio-front-end.png" class="img-fluid rounded" alt="Front End Development Portfolio Image">
                  <h6>Front-End Web Development</h6>
                </a>
                <!-- Portfolio Modal 1 -->
                  <div class="portfolio-modal modal fade" id="homeportfolio1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Front End Web Development</h5>
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                  <div class="rl">
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-7">
                                    <img class="img-fluid" src="img/Portfolio-Front-End.png" alt="Front End Development Portfolio Image">
                                </div>
                                <div class="col-sm-5">
                                  <p><strong>Description: </strong> This project is a static HTML website showcasing my online portfolio. This application uses the Bootstrap 4 framework, scss styling and javascript.</p>
                                  <p><strong>View The: </strong><a href="https://iamdeshaun.github.io/Front-End-Development-Portfolio/" target="_blank">Live Project</a> | <a href="https://github.com/IamDeShaun/Front-End-Development-Portfolio" target="_blank">Github Repos</a> </strong></p>
                                </div>
                              </div>
                            </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div> <!-- End Portfolio Modal 1 -->
            </div><!-- End Of Porfolio Item -->
          
          <div class="col-sm-4">
              <a href="#homeportfolio2" data-toggle="modal">
              <img src="http://dev-deshaunjones/wp-content/uploads/2018/11/github-api.png" class="img-fluid rounded" alt="Github API Portfolio Image">
              <h6>Javascript Application</h6>
            </a>
            <!-- Portfolio Modal 2 -->
                <div class="portfolio-modal modal fade" id="homeportfolio2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">JavaScript Application</h5>
                          <div class="close-modal" data-dismiss="modal">
                              <div class="lr">
                                <div class="rl">
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-sm-7">
                                  <img class="img-fluid" src="img/github-api.png" alt="JavaScript Portfolio Image">
                              </div>
                              <div class="col-sm-5">
                                <p><strong>Description: </strong> A simple one page application that uses a fetch api call to pull data from Github. This application uses the Bootstrap 4 framework, scss styling and javascript.</p>
                                <p><strong>View The: </strong><a href="https://iamdeshaun.github.io/github-api/" target="_blank">Live Project</a> | <a href="https://github.com/IamDeShaun/github-api" target="_blank">Github Repos</a> </strong></p>
                              </div>
                            </div>
                          </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div> <!-- End Portfolio Modal 2 -->
          </div><!-- End Of Porfolio Item -->

          <div class="col-sm-4">
              <a href="#homeportfolio3" data-toggle="modal">
              <img src="http://dev-deshaunjones/wp-content/uploads/2018/11/Laravel-Port-IMG.png" class="img-fluid rounded" alt="Laravel CRUD Portfolio Image">
              <h6>Laravel CRUD APP</h6>
            </a>
                <!-- Portfolio Modal 3 -->
                <div class="portfolio-modal modal fade" id="homeportfolio3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Laravel Crud Application</h5>
                          <div class="close-modal" data-dismiss="modal">
                              <div class="lr">
                                <div class="rl">
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-sm-7">
                                  <img class="img-fluid" src="img/Laravel-Port-IMG.png" alt="Laravel Portfolio Image">
                              </div>
                              <div class="col-sm-5">
                                <p><strong>Description: </strong> This is a simple CRUD application using Laravel 5.6 and deployed using the Heroku platform. This application uses the Bootstrap 4 framework, Laravel CSS styling and MYSQL.</p>
                                <p><strong>View The: </strong><a href="http://sleepy-tundra-68514.herokuapp.com/" target="_blank">Live Project</a> | <a href="https://github.com/IamDeShaun/laravelapp" target="_blank">Github Repos</a> </strong></p>
                              </div>
                            </div>
                          </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div> <!-- End Portfolio Modal 3 -->
          </div><!-- End Of Porfolio Item -->
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



