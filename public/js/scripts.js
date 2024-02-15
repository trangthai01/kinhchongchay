//document.addEventListener('contextmenu', event => event.preventDefault());

(function($) {
    $(document).ready(function(e) {
        // footer parallex script
        $('.sticky-footer').css({
            opacity: '0',
            display: 'none'
        });

        $(window).scroll(function() {
            var $headerWrappr = $('.header-wrapper').height();
            if ($(window).scrollTop() > $headerWrappr) {
                $('.sticky-footer').css({
                    opacity: '1',
                    display: 'block'
                });
            } else {
                $('.sticky-footer').css({
                    opacity: '0',
                    display: 'none'
                });
            }
        });

        // match height script
        $('.tecfire-box').matchHeight();
        $('.select-form .form-group > label').matchHeight();
        $('.company-category-block a').matchHeight();
        $('#footer .footer-top h3').matchHeight();
        $('#footer .footer-top h3').matchHeight();
         $('.safari .selection-result .col-sm-4.hidden-xs').matchHeight({
            target: $('.safari .selection-result .col-sm-8')
        });
        if ( $( window ).width() >= 1200 ) {
            $('.door-gallery').matchHeight({
                byRow: true,
                property: 'height',
                target: $('.tabs-holder'),
                remove: false
            });
        }
        $('.section-cta .info-title h2').find('br').remove();

        // map script
        $('.pop-click').on('hover', function(event) {
            $('.map-pop-holder').removeClass('active');
            $('.map-pop-' + $(this).data('area')).addClass('active');
            event.stopPropagation();
        });

        $('a.pop-mobile-map').on('click', function(event) {
            $('.map-pop-holder').removeClass('active');
            $('.pop-mobile-' + $(this).data('area')).addClass('active');
            event.stopPropagation();
        });

        $('.pop-close').on('hover', function(event) {
            $('.map-pop-holder').removeClass('active');
            event.stopPropagation();
        });

        $(document).click(function(event) {
            if (!$(event.target).closest('.map-pop-holder').length) {
                $('.map-pop-holder').removeClass('active');
            }
        });

        $('.system-project-list li a').on('click', function(event) {
            $('.system-gallery figure .system-gallery-s').removeClass('active');
            $('.system-gallery-show-' + $(this).data('number')).addClass('active');
            $('.system-project-list li a.active').removeClass('active');
            $(this).addClass('active');
            event.stopPropagation();
        });
    });

    $('.feature-list-holder').on('mouseenter', function() {
        $('.feature-list-holder').removeClass('active');
        $(this).addClass('active').removeClass('deactive').siblings().addClass('deactive');
    })

    $('.feature-list-holder').on('mouseleave', function() {
        $('.feature-list-holder').removeClass('active');
        $(this).removeClass('active').siblings().removeClass('deactive');
    })

    // parallex header wrapper
    $(window).on("load", function() {
        var $headerHeight = $('#header').height();
        var $bannerHeight = $('.banner-block').height();
        var $totalHeight = $headerHeight + $bannerHeight;
        // $('.header-wrapper-sticky').css({
        //     'height': $totalHeight + 'px'
        // });
        // var $headerWrappr = $('.header-wrapper-sticky').height();
        var $footerHeight = $('.sticky-footer').height();
        // $('.top-gap').css({'margin-top': $totalHeight + 'px'});
        $('.bottom-gap').css({
            'margin-bottom': $footerHeight + 'px'
        });

    });

    $("#hero-carousel").owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        animateOut: 'fadeOut',
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            }
        }
    });

    function addStickyToFooter() {
        var headerWrapper = $('.header-wrapper');
        var footer = $('#footer');
        var main = $('#main');
        if (headerWrapper.hasClass('header-wrapper-sticky')) {
            footer.addClass('sticky-footer');
            main.addClass('main-index');
        } else {
            footer.removeClass('sticky-footer');
            main.removeClass('main-index');
        }
    }

    // Call
    addStickyToFooter();

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#scrollTo-top').fadeIn();
        } else {
            $('#scrollTo-top').fadeOut();
        }
    });

    // Click event to scroll to top
    $('#scrollTo-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    // script for news carousel
    var newsCarousel = $('.news-carousel').flickity(tf_modify_hp_news_carousel_options());

    function tf_modify_hp_news_carousel_options() {
        var total_slides = $('.news-block').length;
        var options = {
            contain: true,
            autoPlay: false,
            pageDots: true,
            groupCells: true,
            prevNextButtons: true,
            imagesLoaded: true
        }
        if (total_slides <= 3) {
            options.prevNextButtons = false;
            options.pageDots = false;
        }
        return options;
    }

    // ---
    function tf_system_gallery_customization() {
        var options = {
            contain: true,
            autoPlay: false,
            pageDots: false,
            prevNextButtons: true,
            imagesLoaded: true
        };

        var c1 = $('.p-carousel').flickity(options);
        var c2 = $('.t-carousel').flickity(options);

        $('a.system-gallery-s').click(function (e) {
            var t = $(this).data('type');
            var i = parseInt($(this).data('index'));
            switch (t) {
                case 'p':
                    c1.flickity( 'select', i, false, true );
                    break;
                case 't':
                    c2.flickity( 'select', i, false, true );
                    break;
                default:
                    break;
            }
        });

        // show carousel after modal shown
        $('.modal-custom-white').on('shown.bs.modal', function(event) {
            c1.flickity('resize');
            c2.flickity('resize');
        });
    }

    tf_system_gallery_customization();

    // ---
    function tf_engineering_application_slider() {
        var sf = $('.slidingDoor-carousel').flickity({
            contain: true,
            autoPlay: false,
            pageDots: false,
            imagesLoaded: true,
            prevNextButtons: true,
        }).flickity('select', 0);

        var cellcap = $('#cell-cap');
        var flkty = sf.data('flickity');

        sf.on( 'select.flickity', function() {
            var elm = $(flkty.selectedElement);
            var caption = elm.children('.text-holder').html();
            cellcap.hide().html(caption).fadeIn(300);
        });

        sf.flickity('resize');
    }

    tf_engineering_application_slider();

    // script for retina image
    retinajs();

}

)(jQuery);
