<?php 
/*
Template Name: Full Width Template
*/
$hide_title = get_post_meta( get_the_ID(), 'hide_title', true );
get_header(); ?>
  <div class="main-wrapper">
    <nav class="navbar navbar-expand-lg navbar-bg-page text-light fixed-top" id="mainNav">
        <div class="container">
                  <a class="navbar-brand" href="<?php echo home_url(); ?>">
                      <img class="logo" src="<?php echo get_theme_mod('logo_image') ?>" alt="logo">
                  </a>
            <button class="navbar-toggler text-white border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars ms-1"></i>
                <!-- <i style="font-size:24px;" class="fas ms-1">&#xf0c9;</i> -->
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                         <li class="nav-item"><a class="nav-link" href="https://tstwhitehouseltd.com/why-us/">Why Us</a></li>
                          <li class="nav-item"><a class="nav-link" href="#ourProject">Our Projects</a></li>
                      </ul>
                <span class="navbar-text hotline ms-4">
                  <img src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png" alt="">
                  <?php echo get_theme_mod('header_contact_number') ?>
              </span>
            </div>
        </div>
    </nav>
    <div class="content-area">
    <?php 
      if ( empty( $hide_title ) || $hide_title !== 'yes' )  { ?>
      <div class="page-title">
        <h2><?php the_title(); ?></h2>
      </div>
      <?php
      } ?>
      <div class="page-content">
        <?php
        while ( have_posts() ) : the_post(); ?>
        <div class="card border-0 mt-0">
          <div class="page-image mx-auto">
            <?php the_post_thumbnail( 'full' ); ?>  
          </div> 
          <div class="card-body pt-0">
            <p class="card-text"><?php the_content(); ?></p>
          </div>
        </div>

          <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
      </div>
      <div class="custom-about-page">
        <div class="why-us-banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner.jpeg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="d-flex justify-content-center align-items-center why-us-content">
              <div class="text-center">
                <h1>Homes Personalized</h1>
                <h3>Why White House</h3>
              </div>
            </div>
          </div>


          <div class="functional-design-section" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-2.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="sub-title">
              <p>We are not just building lifeless structures.
                Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
            </div>
            <div class="vertical-line">
              <div class="bottom-to-top">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="line mt-3"></div>
            </div>
            <div class="functional-logo text-center py-5">
              <img src="<?php echo get_template_directory_uri() ?>/images/functional-design-logo.png" alt="" class="img-fluid">
            </div>

            <div class="functional-content-area">
              <div class="container functional-content">
                <div class="row">
                  <div class="col-md-6">
                    <div class="color-area">
                      <p class="color-area-content">We consider every aspect of your space so that it complements your well-being and you have a place you truely cherish.</p>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/color.png" alt="">
                          <div class="ms-3">
                            <h2>Color</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/brightness.png" alt="">
                          <div class="ms-3">
                            <h2>light</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/wind.png" alt="">
                          <div class="ms-3">
                            <h2>clean air</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


          </div>

          <div class="quality-materials" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-3.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="vertical-line">
              <div class="bottom-to-top">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="line mt-3"></div>
            </div>
            <div class="functional-logo text-center py-5">
              <h1>quality materials</h1>
            </div>

            <div class="functional-content-area">
              <div class="container functional-content">
                <div class="row">
                  <div class="col-md-6">
                    <div class="color-area">
                      <p class="color-area-content">We consider every aspect of your space so that it complements your well-being and you have a place you truely cherish.</p>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/durability.png" alt="">
                          <div class="ms-3">
                            <h2>Durability</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/sustainability.png" alt="">
                          <div class="ms-3">
                            <h2>sustainability</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


          </div>

          <div class="aesthetics-materials" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-4.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="vertical-line">
              <div class="bottom-to-top">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="line mt-3"></div>
            </div>
            <div class="functional-logo text-center py-5">
              <h1>Aesthetics</h1>
            </div>

            <div class="functional-content-area">
              <div class="container functional-content">
                <div class="row">
                  <div class="col-md-6">
                    <div class="color-area">
                      <p class="color-area-content">We consider every aspect of your space so that it complements your well-being and you have a place you truely cherish.</p>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/color.png" alt="">
                          <div class="ms-3">
                            <h2>exterior</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/sun.png" alt="">
                          <div class="ms-3">
                            <h2>interior</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


          </div>

          <div class="commitments-materials" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner-5.png'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="vertical-line">
              <div class="bottom-to-top">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
              </div>
              <div class="line mt-3"></div>
            </div>
            <div class="functional-logo text-center py-5">
              <h1>commitments</h1>
            </div>

            <div class="functional-content-area">
              <div class="container functional-content">
                <div class="row">
                  <div class="col-md-6">
                    <div class="color-area">
                      <p class="color-area-content">We consider every aspect of your space so that it complements your well-being and you have a place you truely cherish.</p>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/color.png" alt="">
                          <div class="ms-3">
                            <h2>exterior</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                      <div class="single-content d-flex mt-md-5">
                          <img src="<?php echo get_template_directory_uri() ?>/images/sun.png" alt="">
                          <div class="ms-3">
                            <h2>interior</h2>
                            <p class="color-area-content">We are not just building lifeless structures. Our philosophy is to create spaces that inspire and energize the people living inside them.</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="leaf-section">
              <div class="container">
                <div class="row justify-content-center">
                  <h2>Our Trusted Partners</h2>
                  <div class="leaf-item d-flex justify-content-between align-items-center">
                    <div class="leaf-single-item" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                      <img src="images/advanced-insight.png" alt="">
                    </div>
                    <div class="leaf-single-item-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                      <img src="images/interior-architects.png" alt="">
                    </div>
                    <div class="leaf-single-item" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                      <img src="images/majesto-logo.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

            
          <div class="about-page-contact-section mb-5" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/why-us-banner.jpeg'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="content-opacity">
              <h1>let’s build a space of your dream</h1>
            </div>
          </div>
          <div class="about-contact-section">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 bg-white p-5">                  
                  <div class="contact-text">
                    <p>Let’s  connect</p>
                    <h2>How Can We Help?</h2>
                  </div>
                  <div class="contact-form mt-5">
                    <form action="">
                      <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                      </div>
                      <div class="mb-3">
                        <select class="form-select form-control" aria-label="Default select example">
                          <option selected>I am a landowner</option>
                          <option value="1">I am a landowner</option>
                          <option value="2">I am a landowner</option>
                          <option value="3">I am a landowner</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile number">
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" id="message" placeholder="Enter your message" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <button type="submit" class="btn submit-button">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
<?php get_footer(); ?>