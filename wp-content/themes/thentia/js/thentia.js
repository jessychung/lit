jQuery(document).ready(function () {

    var sideMenu = $('.side-menu');
    var exitMenu = $('.desk-bars');
    var mobileBars = $('.mobile-bars');

    $(window).scroll(function () {
        if ( $(this).scrollTop() > 300 ) {
            $('.sticky-menu').slideDown();
        } else if ( $(this).scrollTop() <= 300 ) {
            $('.sticky-menu').slideUp();
        }
    });

    mobileBars.on('click', function () {

        $('.thentia-menu').removeClass('preload');

        $('body').addClass('no-scroll');

        sideMenu.addClass('full-screen-menu', 3000);

        sideMenu.find('.desk-bars').removeClass('pointer-events');

        if(!exitMenu.find('div').hasClass('cross')) {
            sideMenu.addClass('full-screen-menu', 3000);
            sideMenu.find('.bars div').toggleClass('cross');
        }

        $('.thentia-menu li').each(function(i) {
            var menuItem = $(this);
            setTimeout(function() {
                menuItem.addClass('showMobileMenu');
            },  i*200);
        });

    });

    sideMenu.on('click', function () {

        $('.thentia-menu').removeClass('preload');

        $('body').addClass('no-scroll');

        $(this).find('.desk-bars').removeClass('pointer-events');

        if(!exitMenu.find('div').hasClass('cross')) {
            $(this).addClass('full-screen-menu', 3000);
            $(this).find('.bars div').toggleClass('cross');
        }
        $('.thentia-menu li').each(function(i) {
            var menuItem = $(this);
            setTimeout(function() {
                menuItem.addClass('showMobileMenu');
            },  i*200);
        });
    });

    exitMenu.on('click', function (e) {

        e.stopPropagation();

        if($(this).find('div').hasClass('cross')) {
            $(this).find('div').toggleClass('cross');
            $(this).parents('.side-menu').removeClass('full-screen-menu', 3000);
            $(this).addClass('pointer-events');
            $('body').removeClass('no-scroll');
            mobileBars.removeClass('pointer-events');
            if(mobileBars.find('div').hasClass('cross')) {
                mobileBars.find('div').toggleClass('cross');
            }
        } else {
            $(this).parents('.side-menu').addClass('full-screen-menu', 3000);
            $(this).find('div').toggleClass('cross');
        }

        $('.thentia-menu li').each(function(i) {
            var menuItem = $(this);
            menuItem.addClass('showMobileMenu');

        });
    });

});



