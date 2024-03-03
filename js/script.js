
  window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY < 500) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    //  Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // // Image Smooth Zoom
    // const zoomContainer = document.getElementById('zoomContainer');     
    // function smoothZoom() {
    //   let scale = 1;
    //   const duration = 5000; // 5 seconds
  
    //   function step() {
    //     scale += 0.001; // Adjust the zoom speed
    //     zoomContainer.style.backgroundSize = `${scale * 100}% ${scale * 100}%`;
  
    //     if (scale < 1.5) { // Adjust the maximum zoom level
    //       requestAnimationFrame(step);
    //     } else {
    //       scale = 1; // Reset the scale for continuous looping
    //       requestAnimationFrame(step);
    //     }
    //   }
  
    //   step();
    // }
    // smoothZoom();


    // Scroll to Top Button
    var mybutton = document.getElementById("scrollToTopBtn");
    mybutton.addEventListener("click", function () {
        document.documentElement.scrollTop = 0;
    });


});

$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

});
