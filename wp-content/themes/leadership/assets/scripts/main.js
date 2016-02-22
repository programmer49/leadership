(function(window, document, $) {
    'use strict';


    $(function() {
        $(".navbar-menu").sticky({topSpacing:0});

        $('body').on('click', '.navbar-toggle-menu', function() {
            $('.site-content').toggleClass('push-left');
            $('.site-menu-mobile').toggleClass('push-open');
            $('.navbar-toggle-menu').toggleClass('navbar-toggle-menu-none');
            $('body').toggleClass('no-scroll');
        });

        $('body').on('click', '.btn-close', function() {
            $('.site-content').removeClass('push-left');
            $('.site-menu-mobile').removeClass('push-open');
            $('.navbar-toggle-menu').removeClass('navbar-toggle-menu-none');
            $('body').removeClass('no-scroll');
        });

        $('a[href=#next-section]').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });


        var $grid = $( '.blog-post > .row' );

        $('.category-listings li').on('click', function(e) {
            e.preventDefault();
        
            var filter = $('a', this).data('filter');
            $grid.isotope({ filter: filter });

            return false;
        });

        var hashID = window.location.hash.substring(1);

        if ( hashID != undefined && hashID != '' ) {
            $grid.isotope({ filter: "." + hashID });
        } else {

            $('.blogdetails-category-list li:first-child').trigger('click');
        }


        $( ".methodology-links li a#approach" ).click(function() {
          $(this).closest('.methodology-content').removeClass('method-wheel');
          $(this).closest('.methodology-content').toggleClass('approach-wheel');
        });

        $( ".methodology-links li a#methodology" ).click(function() {
          $(this).closest('.methodology-content').removeClass('method-wheel');
          $(this).closest('.methodology-content').toggleClass('approach-wheel');
        });

    });

    $(window).load(function() { // makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'}).addClass('is-shown');
    });

})(window, document, jQuery);