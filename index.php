<?php get_header(); ?>
       
          <div class="main-wrapper">
            <nav class="navbar navbar-expand-lg navbar-bg text-light fixed-top" id="mainNav">
              <div class="container">
                  <!-- <a class="navbar-brand" href="#page-top"><img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo-icon.png" alt="..." /></a> -->
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img class="logo" src="<?php echo get_theme_mod('logo_image') ?>" alt="logo">
                        </a>
                  <button class="navbar-toggler text-white border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      Menu
                      <i class="fa fa-bars ms-1"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                         <li class="nav-item"><a class="nav-link" href="https://tstwhitehouseltd.com/why-us/">Why Us</a></li>
                          <li class="nav-item"><a class="nav-link" href="#ourProject">Our Projects</a></li>
                      </ul>
                      <span class="navbar-text text-white ms-md-4">
                        <img src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png" alt="">
                        <?php echo get_theme_mod('header_contact_number') ?>
                    </span>
                  </div>
              </div>
          </nav>
            <header class="masthead" id="">
            <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?php echo get_theme_mod('slider_image_first') ?>" alt="Slider One" class="d-block w-100">
                      <div class="carousel-caption">
                          <div class="masthead-heading text-uppercase"> 
                            <h2><?php echo get_theme_mod('slider_section_title_first') ?></h2>
                          </div>
                          <div class="masthead-subheading">
                            <p><?php echo get_theme_mod('slider_section_description_first') ?> </p>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="10000">
                    <img src="<?php echo get_theme_mod('slider_image_second') ?>" alt="Slider Two" class="d-block w-100">
                    <div class="carousel-caption">
                          <div class="masthead-heading text-uppercase"> 
                            <h2><?php echo get_theme_mod('slider_section_title_second') ?></h2>
                          </div>
                          <div class="masthead-subheading">
                            <p><?php echo get_theme_mod('slider_section_description_second') ?> </p>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </header>

            <div class="leaf-section">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="leaf-item d-flex justify-content-between align-items-center">
                    <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                      <img src="<?php echo get_theme_mod('leaf_logo_image_1') ?>" alt="">
                    </div>
                    <div class="leaf-single-item-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                      <img src="<?php echo get_theme_mod('leaf_logo_image_2') ?>" alt="">
                    </div>
                    <div class="leaf-single-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                      <img src="<?php echo get_theme_mod('leaf_logo_image_3') ?>" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="about-section">
              <div class="about-content">

                <div class="fixed-headline sticky-top-title">
                 <h2 class="text-center"><?php echo get_theme_mod('about_section_title') ?></h2>
                </div>
              
                <img src="<?php echo get_theme_mod('about_banner_image') ?>" alt="" class="img-fluid">
                
              </div>
              
            </div>
            <div class="our-approach-section" id="ourApproach">
              <div class="container">
                <div class="approach-title">
                  <h2>Our unique approach 
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="46" viewBox="0 0 47 46" fill="none">
                      <circle cx="23.2773" cy="23" r="22.0417" stroke="#A37507" stroke-width="1.91667"/>
                      <path d="M22.5997 32.3998C22.974 32.7741 23.5807 32.7741 23.955 32.3998L30.0538 26.301C30.428 25.9268 30.428 25.32 30.0538 24.9457C29.6795 24.5715 29.0727 24.5715 28.6985 24.9457L23.2773 30.3669L17.8562 24.9457C17.4819 24.5715 16.8752 24.5715 16.5009 24.9457C16.1267 25.32 16.1267 25.9268 16.5009 26.301L22.5997 32.3998ZM22.319 12.7222V31.7222H24.2357V12.7222H22.319Z" fill="#A37507"/>
                      </svg>

                  </h2>
                </div>
              </div>
              <div class="container approach-auto-slide">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="d-flex justify-content-center inicator-section">
                    <div class="carousel-indicators custom-indicators mt-5">
                      <span data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"> <?php echo get_theme_mod('approach_tab_1_title') ?></span>
                      <span data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"><?php echo get_theme_mod('approach_tab_2_title') ?></span>
                      <span data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"><?php echo get_theme_mod('approach_tab_3_title') ?></span>
                    </div>
                  </div>
                  <div class="carousel-inner mt-md-5">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="<?php echo get_theme_mod('approach_tab_1_image_one') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-12">
                              <img src="<?php echo get_theme_mod('approach_tab_1_image_two') ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                              <p><?php echo get_theme_mod('approach_tab_1_description') ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="<?php echo get_theme_mod('approach_tab_2_image_one') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-12">
                             <img src="<?php echo get_theme_mod('approach_tab_2_image_two') ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                              <p><?php echo get_theme_mod('approach_tab_2_description') ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="<?php echo get_theme_mod('approach_tab_3_image_one') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-12">
                              <img src="<?php echo get_theme_mod('approach_tab_3_image_two') ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                              <p><?php echo get_theme_mod('approach_tab_3_description') ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="our-project-section" id="ourProject">
              <div class="container">
                <div class="title">
                  <h1 class="mb-3">Our projects</h1>
                </div>
                <div class="project-category">
                  <ul class="nav nav-pills">
                    <!-- <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#completed">Completed</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="pill" href="#ongoing"><?php echo get_theme_mod('our_project_tab_1_tab_title') ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="pill" href="#upcoming"><?php echo get_theme_mod('our_project_tab_2_tab_title') ?></a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane container active" id="ongoing">
                      <div class="complete-content py-5">
                        <div class="row mt-3">
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_two') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-2 arrow-icon align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_three') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <div class="project-details">
                              <h2><?php echo get_theme_mod('our_project_tab_1_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_1_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_1_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_1_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-15">       
                          <div class="col-2 arrow-icon arrow-icon-2 align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <!-- <img src="<?php //echo get_template_directory_uri() ?>/images/circle-angle-arrow.png" alt=""> -->
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_two') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6">
                            <div class="project-details text-end project-details-2">
                              <h2><?php echo get_theme_mod('our_project_tab_2_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_2_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_2_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_2_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_three') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane container fade" id="upcoming">
                      <div class="complete-content py-5">
                        <div class="row mt-3">
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_two') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-2 arrow-icon align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_1_image_three') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <div class="project-details">
                              <h2><?php echo get_theme_mod('our_project_tab_1_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_1_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_1_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_1_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-15">       
                          <div class="col-2 arrow-icon arrow-icon-2 align-items-center d-flex">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <!-- <img src="<?php //echo get_template_directory_uri() ?>/images/circle-angle-arrow.png" alt=""> -->
                          </div>
                          <div class="col-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_one') ?>" alt="" class="img-fluid">
                          </div>
                          <div class="col-4 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_two') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6">
                            <div class="project-details text-end project-details-2">
                              <h2><?php echo get_theme_mod('our_project_tab_2_title') ?></h2>
                              <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M9 22V12H15V22" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  <span class="ms-2"> <?php echo get_theme_mod('our_project_tab_2_category') ?> </span>
                                  <span class="ms-4 text-primary"> <?php echo get_theme_mod('our_project_tab_2_status') ?> </span>
                              </p>
                              <p class="mt-3"><?php echo get_theme_mod('our_project_tab_2_address') ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M15 3H21V9" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M10 14L21 3" stroke="#A37507" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg></span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 ps-0">
                            <img src="<?php echo get_theme_mod('our_project_tab_2_image_three') ?>" alt="" class="img-fluid">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="landowner-section">
              <div class="landowner-section-bg" style="background-image: url('<?php echo get_theme_mod('landowner_section_scroll_bg_image') ?>'); background-repeat: no-repeat; background-position: center center; background-size: cover;">
                <div class="card text-white">
                  
                  <div class="card-img-overlay container sticky-top-landowner">
                    <div class="row">
                      <div class="col-12 col-md-4"></div>
                      <div class="col-12 col-md-6 overlay-custom-text">
                        <p><?php echo get_theme_mod('landowner_section_small_title') ?></p>
                        <h2><?php echo get_theme_mod('landowner_section_title') ?></h2>
                        <p class="mt-5"><a href="<?php echo get_theme_mod('landowner_button_text_link') ?>"><?php echo get_theme_mod('landowner_button_text') ?> &nbsp; <!-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                          <circle cx="18" cy="18" r="17.25" stroke="white" stroke-width="1.5"/>
                          <path d="M25.9624 17.9214C26.2553 17.6286 26.2553 17.1537 25.9624 16.8608L21.1894 12.0878C20.8965 11.7949 20.4217 11.7949 20.1288 12.0878C19.8359 12.3807 19.8359 12.8556 20.1288 13.1485L24.3714 17.3911L20.1288 21.6338C19.8359 21.9266 19.8359 22.4015 20.1288 22.6944C20.4217 22.9873 20.8965 22.9873 21.1894 22.6944L25.9624 17.9214ZM10.5625 18.1411H25.4321V16.6411H10.5625V18.1411Z" fill="white"/>
                          </svg>--></a> </p> 
                      </div>
                    </div>
                  </div>
                  <img src="<?php echo get_theme_mod('landowner_section_scroll_image') ?>" class="img-fluid" alt="">
                </div>
              </div>
            </div>
            <div class="key-point-section" id="keyPoint">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <p class="subtitle"><?php echo get_theme_mod('key_point_section_small_text') ?></p>
                    <h2 class="title"><?php echo get_theme_mod('key_point_section_headline') ?></h2>
                  </div>
                  <div class="col-md-3 box mb-3">
                    <div class="single-key-point">
                      <img src="<?php echo get_theme_mod('single_key_point_icon_1') ?>" alt="">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_1') ?></h2>
                      </div>
                    </div>
                    <div class="overlay">
                      <div class="text">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_1') ?></h2>
                      </div>
                      <div class="single-key-description">
                        <p class="mt-3"><?php echo get_theme_mod('single_key_point_desc_1') ?></p>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-3 box mb-3">
                    <div class="single-key-point">
                      <img src="<?php echo get_theme_mod('single_key_point_icon_2') ?>" alt="">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_2') ?></h2>
                      </div>
                    </div>
                    <div class="overlay">
                      <div class="text">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_2') ?></h2>
                      </div>
                      <div class="single-key-description">
                        <p class="mt-3"><?php echo get_theme_mod('single_key_point_desc_2') ?></p>
                      </div>
                    </div>
                    </div>
                  </div>                 
                </div>
                <div class="row mt-3">
                  <div class="col-md-3 offset-md-3 box mb-3">
                      <div class="single-key-point">
                        <img src="<?php echo get_theme_mod('single_key_point_icon_3') ?>" alt="">
                        <div class="single-key-title">
                          <h2><?php echo get_theme_mod('single_key_point_title_3') ?></h2>
                        </div>
                      </div>
                      <div class="overlay">
                        <div class="text">
                          <div class="single-key-title">
                            <h2><?php echo get_theme_mod('single_key_point_title_3') ?></h2>
                          </div>
                          <div class="single-key-description">
                            <p class="mt-3"><?php echo get_theme_mod('single_key_point_desc_3') ?></p>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3 box mb-3">
                    <div class="single-key-point">
                      <img src="<?php echo get_theme_mod('single_key_point_icon_4') ?>" alt="">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_4') ?></h2>
                      </div>
                    </div>
                    <div class="overlay">
                      <div class="text">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_4') ?></h2>
                      </div>
                      <div class="single-key-description">
                        <p class="mt-3"><?php echo get_theme_mod('single_key_point_desc_4') ?></p>
                      </div>
                    </div>
                    </div>
                  </div> 
                  <div class="col-md-3 box mb-3">
                    <div class="single-key-point">
                      <img src="<?php echo get_theme_mod('single_key_point_icon_5') ?>" alt="">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_5') ?></h2>
                      </div>
                    </div>
                    <div class="overlay">
                      <div class="text">
                      <div class="single-key-title">
                        <h2><?php echo get_theme_mod('single_key_point_title_5') ?></h2>
                      </div>
                      <div class="single-key-description">
                        <p class="mt-3"><?php echo get_theme_mod('single_key_point_desc_5') ?></p>
                      </div>
                    </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="gallery-section">
                <div class="container-fluid">
                    <div class="position-relative">
                  <div class="row">
                      <div class="owl-carousel owl-theme">
                        <?php
                        $args = array(
                            'post_type' => 'gallery',
                            'posts_per_page' => 4,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        );

                        $custom_query = new WP_Query($args);
                        if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                        <div class="item">
                          <div class="col-md-12">
                            <?php
                              if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'img-fluid'));
                              } ?>
                          </div>
                        </div>
                        
                        <?php
                              endwhile;
                              wp_reset_postdata();
                          else :
                              echo 'No posts found';

                          endif;
                        ?>
                      </div>
                      <div class="gallery-overly-image position-absolute top-50 start-50 translate-middle">
                        <img src="<?php echo get_template_directory_uri() ?>/images/loader-image.png" alt="">
                      </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="contact-section" id="contact">
              <div class="container">
                <div class="contact-text">
                  <p><?php echo get_theme_mod('contact_section_small_text') ?></p>
                  <h2><?php echo get_theme_mod('contact_section_heading') ?></h2>
                </div>
                <div class="row mt-md-5">
                  <div class="col-md-6">
                    <div class="contact-form mt-md-5">
                    <?php echo do_shortcode(get_theme_mod('contact_section_contactform')); ?>
                    </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-center justify-content-center" id="exploreLocation">
                          <div class="contact-address">
                            <div class="address">
                              <h2><?php echo get_theme_mod('contact_section_visit_us') ?></h2>
                              <p><i class="fa fa-map-marker icon-address" aria-hidden="true"></i> <?php echo get_theme_mod('contact_section_address') ?></p>
                              <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_theme_mod('contact_section_mobile') ?></p>
                              <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_theme_mod('contact_section_email') ?></p>
                            </div>
                          </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
<?php get_footer(); ?>