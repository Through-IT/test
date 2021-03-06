$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('.tooltipped').tooltip();
});


$(window).on('load' , function(){
    $('.preloader').delay(1000).fadeOut('slow');
});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 2,
        loop: true,
        center: true,
        margin: 10,
        autoPlay: 3000,
        lazyLoad: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            }
        }
    });
});

var Portfolio = {
    sort: function(items) {
        items.show();
        $('#price-content').find('div.price-item').not(items).fadeOut(500);
    },
    showAll: function(items) {
        items.fadeIn(500);
    },
    doSort: function() {
        $('a', '#price-sort').on('click', function() {

            var $a = $(this);
            if (!$a.is('#all')) {

                var items = $('div[data-cat=' + $a.data('cat') + ']', '#price-content');

                Portfolio.sort(items);

            } else {

                Portfolio.showAll($('div.price-item', '#price-content'));


            }

        });
    }
};

Portfolio.doSort();

var map;
function initMap() {
    var myLatLng = {lat: 40.807400, lng: 44.497028};

    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 10,
        styles:[
            {
                "stylers": [
                    {
                        "hue": "#007fff"
                    },
                    {
                        "saturation": 89
                    }
                ]
            },
            {
                "featureType": "water",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            }
        ]
    });
    var icon = {
        url: '/assets/images/mark.png',
        scaledSize: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(0, 0)
    };

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: icon
    });
    var InfoWindow = new google.maps.InfoWindow({
        content: '<h1>sadasdasd</h1>'
    });
    marker.addListener('click', function(){
        InfoWindow.open(map, marker);
    });
}




!function ($) {

    var Magnify = function (element, options) {
        this.init('magnify', element, options);
    };

    Magnify.prototype = {

        constructor: Magnify,
        init: function (type, element, options) {
            var event = 'mousemove';
            var eventOut = 'mouseleave';

            this.type = type;
            this.$element = $(element);
            this.options = this.getOptions(options);
            this.nativeWidth = 0;
            this.nativeHeight = 0;

            this.$element.wrap('<div class="magnify" \>');
            this.$element.parent('.magnify').append('<div class="magnify-large" \>');
            this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");


            this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
            this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
        },
        getOptions: function (options) {
            options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data());

            if (options.delay && typeof options.delay == 'number') {
                options.delay = {
                    show: options.delay,
                    hide: options.delay
                };
            }

            return options;
        },
        check: function (e) {
            var container = $(e.currentTarget);
            var self = container.children('img');
            var mag = container.children(".magnify-large");
            if(!this.nativeWidth && !this.nativeHeight) {
                var image = new Image();
                image.src = self.attr("src");

                this.nativeWidth = image.width;
                this.nativeHeight = image.height;

            } else {

                var magnifyOffset = container.offset();
                var mx = e.pageX - magnifyOffset.left;
                var my = e.pageY - magnifyOffset.top;

                if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                    mag.fadeIn(100);
                } else {
                    mag.fadeOut(100);
                }

                if(mag.is(":visible"))
                {
                    var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
                    var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
                    var bgp = rx + "px " + ry + "px";

                    var px = mx - mag.width()/2;
                    var py = my - mag.height()/2;

                    mag.css({left: px, top: py, backgroundPosition: bgp});
                }
            }

        }
    };



    $.fn.magnify = function ( option ) {
        return this.each(function () {
            var $this = $(this);
            var data = $this.data('magnify');
            var options = typeof option == 'object' && option;
            if (!data) $this.data('tooltip', (data = new Magnify(this, options)));
            if (typeof option == 'string') data[option]();
        });
    };


    $.fn.magnify.Constructor = Magnify;

    $.fn.magnify.defaults = {
        delay: 0
    };



    $(window).on('load', function () {
        $('[data-toggle="magnify"]').each(function () {
            var $mag = $(this);
            $mag.magnify();
        });
    });

} ( window.jQuery );

$( "#myCheck" ).change(function() {
    if(this.checked){
        $("#large-header").css('background-image','none');
        $("#demo-canvas").css('display','none');
        $(".btn-about").css('background-color','transparent');
        $(".btn-about").css('border','1px solid #fff');
        $(".social a").css('background-color','transparent');
    }
    else{
        $("#large-header").css('background-image','url(/assets/images/header-bg.jpg)');
        $("#demo-canvas").css('display','block');
        $(".btn-about").css('background-color','#32419e');
        $(".btn-about").css('border','1px solid #0bc0ed');
        $(".social a").css('background-color','#313984');
    }
});

