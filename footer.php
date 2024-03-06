<div class="footer-section bg-black">
        <div class="container">
        <div class="row">
            <div class="col-8 col-md-3 footer-logo">
            <img src="<?php echo get_theme_mod('footer_logo_image') ?>" class="img-fluid" alt="">
            </div>
            <div class="col-1 col-md-6"></div>
            <div class="col-3 col-md-3 bottom-to-top" id="scrollToTopBtn">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 mt-3">
            <?php dynamic_sidebar('footer-1'); ?>
            </div>
            <div class="col-6 col-md-3 mt-3">
            <?php dynamic_sidebar('footer-2'); ?>
            </div>
            <div class="col-md-3">
            <?php dynamic_sidebar('footer-3'); ?>
            </div>
            <div class="col-md-3 d-flex align-items-end">
            <div class="copyright mt-3 mt-md-0">
                <p><?php echo get_theme_mod('copyright_section') ?></p>
            </div>
            </div>
        </div>
        </div>
</div>
        <script>
          AOS.init();
          let loader = document.getElementById('preloader')
          function myPreloderFunction(){
              loader.style.display = "none"
          };
        </script>
        <?php wp_footer(); ?>
    </body>
</html>