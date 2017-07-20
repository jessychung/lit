jQuery(document).ready(function() {


    $(".blog-screen").hover(function(e) {
        if (this == e.target) {
            $(this).toggleClass("blog-screen-hover");
            $(this).find("a").fadeToggle("fast");
        }
    });

    $(window).scroll(function () {
        var threshold = 600;

        if ($(window).scrollTop() >= threshold)
            $('.fixed-menu').fadeIn('slow');
        else
            $('.fixed-menu').fadeOut('slow');

    });

    $('.up').click(function(){
        $('html, body').animate({scrollTop : 0},500);
        return false;
    });

    $('.down').click(function(){
        $('html, body').animate({scrollTop : 480},500);
        return false;
    });

    $(".about-info i").click(function(e) {
        if (this == e.target) {
            $(this).nextUntil('.about-info h3').slideToggle('fast');
            $(this).toggleClass("fa-chevron-down fa-chevron-up");
            $(this).toggleClass("job-open");
        }
    });

    $(window).scroll(function () {
        var threshold = 250;

        if ($(window).scrollTop() >= threshold)
            $('.sys-fixed').addClass('fixed');
        else
            $('.sys-fixed').removeClass('fixed');
        var check = $(".system-content-box").height() - 120;
        if ($(window).scrollTop() >= check)
            $('.sys-fixed').addClass('bottom');
        else
            $('.sys-fixed').removeClass('bottom');
    });


    $('#mobile-menu-open').click(function() {
        $('#mobile-menu').fadeIn('fast');
    });
    $('#exit-icon').click(function() {
        $('#mobile-menu').fadeOut('fast');
    });

    function initialize() {

        var mapProp = {
            center:new google.maps.LatLng(43.6464313,-79.4017448),
            zoom:13,
            scrollwheel: false,
            panControl:false,
            mapTypeControl:false,
            streetViewControl:false,
            scaleControl:false,
            zoomControl:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var map=new google.maps.Map(document.getElementById("googleMap2"),mapProp);

        var marker=new google.maps.Marker({
            position:new google.maps.LatLng(43.6464313,-79.4017448),
            icon:'http://www.polymorphcloud.com/wp-content/uploads/2015/10/poly_map.png'
        });

        marker.setMap(map);

        var styles = [
            {
                stylers: [
                    {lightness: '20'},
                    {saturation: '-100' },
                ]
            }
        ];

        map.setOptions({styles: styles});

        rect = new google.maps.Rectangle({
            bounds: bounds,
            fillColor: color,
            fillOpacity: 0.7,
            strokeWeight: 0,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);


    $.fn.moveIt = function(){
        var $els = $(this);
        var $window = $(window);
        var scrollPos = $window.scrollTop();

        $window.on('scroll', function(){
            scrollPos = $window.scrollTop();
            $els.each(moveEl);
        });

        function moveEl(){
            var $this = $(this);
            var scrollSpeed = parseInt($this.data('scroll-speed'));
            var elPos = scrollPos / scrollSpeed;

            $this.css('transform', 'translateY(-' + elPos + 'px)');
        }
    }

    $(function(){
        $('[data-scroll-speed]').moveIt();
    });


});