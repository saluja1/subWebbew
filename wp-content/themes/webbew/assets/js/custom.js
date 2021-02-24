var textType = function(el, toRotate) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = 3000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

textType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullText = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullText.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullText.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = this.txt;

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {delta /= 2;}

    if (!this.isDeleting && this.txt === fullText) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

var site = {

	init: function() {

        site.typewrite();
        site.header();
        site.home();
	},

    typewrite: function() {

        if(jQuery('.typewrite').length > 0) {

            var elements = jQuery('.typewrite');

            for (var i = 0; i < elements.length; i++) {

                var toRotate = elements[i].getAttribute('data-type');
                new textType(elements[i], JSON.parse(toRotate));
            }
        }
    },

    header: function() {
        jQuery(window).scroll(function(event){
            var scrollTop = jQuery(window).scrollTop();
            if (scrollTop > 0) {
                jQuery('.brand-navigation').show();
                jQuery('.nav-list').hide();
                jQuery('.toggle-menu').hide(); 
                jQuery('.brand-header').addClass('header-effect');
            } else {
                jQuery('.brand-navigation').hide();
                jQuery('.nav-list').show();
                jQuery('.toggle-menu').show();
                jQuery('.brand-header').removeClass('header-effect');
            }
            var winWidth = jQuery( window ).width();
            if (winWidth < 767 && scrollTop > 0) {
                jQuery('.toggle-menu').show();
                jQuery('.nav-list').show();
                $(".line").css({backgroundColor: "#000000"})           
            } else {
                $(".line").css({backgroundColor: "#ffffff"})           
            }

        });

        jQuery('.hamburger-menu').click(function() {

            jQuery('.cover-menu').fadeToggle();

            return false;
        });

        jQuery(window).resize(function() {
            var winWidth = jQuery(window).outerWidth();

            if (winWidth > 767) {
                jQuery('.cover-menu').hide();
            }
        });
    },

    home: function() {

        $('.portfolio-items').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            autoplay: false,
            slidesToShow: 1,
            centerMode: false
        });

        $('.testimonials-items').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        if (jQuery(window).outerWidth() > 767) {

            var maxHeight = Math.max.apply(null, jQuery('.testimonials-item .user-content').map(function (){
                return jQuery(this).outerHeight();
            }).get());

            jQuery('.testimonials-item .user-content').css('min-height', maxHeight);
        } else {
            jQuery('.testimonials-item .user-content').css('min-height', 'auto');
        }
    }
};

$(document).ready(function() {
    site.init();
 
    function progressBarScroll() {
        let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
        height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
        scrolled = (winScroll / height) * 100;
        document.getElementById("scroll-bar").style.width = scrolled + "%";
    }

    window.onscroll = function () {
      progressBarScroll();
    };
  

    var toggleButton = document.querySelector('.toggle-menu');
    var navBar = document.querySelector('.nav-bar');
    toggleButton.addEventListener('click', () => {
        navBar.classList.toggle('toggle');
    });


    var options = {"particles":{"number":{"value":100,"density":{"enable":true,"value_area":552.4033491425909}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":3},"image":{"src":"img/github.svg","width":70,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":2,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1.5782952832645452,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false};
    particlesJS("particle", options);


    $('.acc_ctrl').on('click', function(e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).next()
            .stop()
            .slideUp(300);
        } else {
            $(this).addClass('active');
            $(this).next()
            .stop()
            .slideDown(300);
        }
    });


    $(document).mousemove(function (e) {
        $(".circle").css({ left: e.pageX, top: e.pageY });
    });
    $("a").mouseover(function(){
        $(".circle").css("background-color", "#ffffff");
    });
    $("a").mouseout(function(){
        $(".circle").css("background-color", "#f26c4f");
    });

});
