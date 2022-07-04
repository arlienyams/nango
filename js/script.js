// NAVIGATION
jQuery(document).ready(function ($) {

    "use strict";


    function toggleSearch(type) {
        if (type == "close") {
            //close search 
            $('.search').removeClass('is-visible');
            $('.search-trigger').removeClass('search-is-visible');

        } else {
            //toggle search visibility
            $('.search').toggleClass('is-visible');
            $('.search-trigger').toggleClass('search-is-visible');
        }
    }

    // Open Search Form
    $('.search-trigger').on('click', function (event) {
        event.preventDefault();
        toggleSearch();
    });




    $(document).ready(function () {

        // SLIDER/S OPTIONS
        $('#homeSlider').owlCarousel({
            loop: true,
            // autoplay: 10000,
            lazyLoad: true,
            animateOut: 'fadeOut',
            // autoplayTimeout: 10000,
            smartSpeed: 1000,
            dots: false,
            navigation: false,
            items: 1,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                }
            }
        })
        $('#testimonialSlider').owlCarousel({
            loop: true,
            dots: true,
            autoplay: 20000,
            autoplayTimeout: 20000,
            smartSpeed: 1000,
            lazyLoad: true,
            items: 1,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                }
            }
        })

        $('#thematicSectorSlider').owlCarousel({
            loop: true,
            autoplay: true,
            stopOnHover: true, // To stop sliding on hover.
            slideTransition: 'linear',
            autoplayTimeout: 5000,
            autoplaySpeed: 5000,
            autoplayHoverPause: true,
            // slideSpeed: 200,
            dots: true,
            // navText: ["<button class='owl-prev'><i class='icon-back_icon'></i></button>", "<button class='owl-next'><i class='icon-next_icon'></i></button>"],
            items: 1,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })


        $('#productsSlider').owlCarousel({
            loop: true,
            autoplay: true,
            dots: true,

            items: 1,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                }
            }
        })

    })



    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#outriskHeader').addClass('sticky')
        } else {
            $('#outriskHeader').removeClass('sticky')
        }
    });

});
