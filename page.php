<?php get_header(); ?>
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
    <div class="content-area container">
      <div class="page-title">
        <h2><?php the_title(); ?></h2>
      </div>
        <?php
        while ( have_posts() ) : the_post(); ?>
        <div class="card border-0">
          <div class="page-image mx-auto">
            <?php the_post_thumbnail( 'full' ); ?>  
          </div> 
          <div class="card-body">
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
  </div>
<?php get_footer(); ?>