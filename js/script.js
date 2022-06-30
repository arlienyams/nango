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
            autoplay: 10000,
            lazyLoad: true,
            animateOut: 'fadeOut',
            autoplayTimeout: 10000,
            smartSpeed: 1000,
            dots: true,
            items: 1,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                }
            }
        })

        $('#portfoliosSlider').owlCarousel({
            loop: true,
            autoplay: false,
            dots: true,
            items: 1,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
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
    })



    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#outriskHeader').addClass('sticky')
        } else {
            $('#outriskHeader').removeClass('sticky')
        }
    });

});
