/*------------------------------------
 *Author:FortunaTheme
 *Template:Nieve
 *Version:1.0
 *-------------------------------------
 */
(function($) {

    "use strict";

    jQuery(document).on("ready",function(){

        /*
         * -----------------------------------------------------------------
         *---------------------------Preloader and Anchor Tag---------------
         * -----------------------------------------------------------------
         */

        var themeWindow = $(window);
        var pagebody = $('html, body');
        themeWindow.on("load", function() {

            var preloader = jQuery('.preloader');
            var preloaderArea = jQuery('.preloader-area');
            preloader.fadeOut();
            preloaderArea.delay(200).fadeOut('slow');
            themeWindow.scrollTop(0);
        });


        /*
         * -----------------------------------------------------------------
         *-------------------single-page-nav-plugin------------------------
         * -----------------------------------------------------------------
         */



        // Prevent console.log from generating errors in IE for the purposes of the demo
        if (!window.console) console = {
            log: function() {}
        };

        // The actual plugin
        if ($(".welcome-area").is("#welcome-area")) {
                
            
            
            /*
            * -----------------------------------------------------------------
            *--------------------Animation using animate.css-------------------
            * -----------------------------------------------------------------
            */


            
                var animation1 = $('.animation');

                animation1.waypoint(function() {
                    var thisElement = $(this.element);
                    var animation = thisElement.attr('data-animation');

                    thisElement.css('opacity', '1');
                    thisElement.addClass("animated " + animation).delay(2000);
                }, {
                    offset: '75%',
                });
            

            /*
            * -----------------------------------------------------------------
            *------------------------------slicknav----------------------------
            * -----------------------------------------------------------------
            */


            var menu = $("#menu");

            menu.slicknav({
                label: '',
            });
            
            /*
            * -----------------------------------------------------------------
            *-------------------------------Mixit Up---------------------------
            * -----------------------------------------------------------------
            */



            var portfolioContent = $('.portfolio-content');

            portfolioContent.mixItUp();


            /*
            * -----------------------------------------------------------------
            *-----------------------------lightbox-----------------------------
            * -----------------------------------------------------------------
            */


            
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true,
                showImageNumberLabel: false,
            });




            /*
            * -----------------------------------------------------------------
            *--------------------Owl Carousel For Gallery------------------
            * -----------------------------------------------------------------
            */

            var teamSlider = $('#team .owl-carousel');

            teamSlider.owlCarousel({
                autoplay: true,
                margin: 16,
                autoplayTimeout: 5000,
                items: 3,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 480 up
                    600: {
                        items: 2
                    },
                    // breakpoint from 768 up
                    900: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                },
                autoPlay: 6000,
                pauseOnHover: true
            });

            /*
            * -----------------------------------------------------------------
            *--------------------Owl Carousel For Testimonial------------------
            * -----------------------------------------------------------------
            */



            var testimonial = $("#client-testimonial #owl-demo-testimonial");

                testimonial.owlCarousel({
                    autoplay: true,
                    autoplayTimeout: 5000,
                    items: 2,
                    autoPlay: 6000,
                    responsive: {
                        // breakpoint from 0 up
                        0: {
                            items: 1
                        },
                        // breakpoint from 480 up
                        600: {
                            items: 1
                        },
                        // breakpoint from 768 up
                        900: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        }
                    },
                    pauseOnHover: true,
                    nav: true,
                    dots: false,
                    navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"]
                });



        }
        /*
         * -----------------------------------------------------------------
         *-----------------------Scroll Top Events--------------------------
         * -----------------------------------------------------------------
         */



        var scrollTopBtn = $("#scroll-top-area");

        scrollTopBtn.on("click", function() {
            pagebody.animate({
                scrollTop: 0
            }, 2000);
        });

        themeWindow.on("scroll", function() {
            var top = themeWindow.scrollTop();
            var header = $("header");
            var headerText = $("header nav ul li a");
            var scrollTopArea = $("#scroll-top-area");
            if (top < 150) {
                scrollTopArea.css('display', 'none');
                header.css({
                    'background': 'transparent',
                    'box-shadow': 'none',
                    'height': '100px',
                    'line-height': '100px'
                });
            } else if (top >= 150) {
                scrollTopArea.css('display', 'block');
                header.css({
                    'background': '#fff',
                    'box-shadow': '0px 1px 6px #484848',
                    'height': '80px',
                    'line-height': '80px'
                });
            }

        });

        //----------------------------
        //$('#s').attr('placeholder', 'Search');

        var singleNav = jQuery('.single-page-nav');
                singleNav.singlePageNav({
                    offset: singleNav.outerHeight(),
                    filter: ':not(.external)',
                    updateHash: false
                });
    });

})(jQuery);