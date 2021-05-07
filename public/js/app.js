$('.home-slider').owlCarousel({
    loop:true,
    margin:10,
    //nav:true,
    dots:true,
    dotsEach:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.owl-hotdeal').owlCarousel({
    loop:true,
    margin:10,
    //nav:true,
    dots:true,
    dotsEach:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.owl-deallist').owlCarousel({
    loop:true,
    margin:10,
    //nav:true,
    dots:true,
    dotsEach:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})




$('.owl-theme-section3').owlCarousel({
    loop:false,
    margin:10,
    //nav:true,
    dots:false,
    dotsEach:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})

$('.section-5').owlCarousel({
    loop:false,
    margin:10,
    //nav:true,
    dots:true,
    dotsEach:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:5
        },
        1000:{
            items:5
        }
    }
})

$('.section-10').owlCarousel({
    loop:false,
    margin:10,
    //nav:true,
    dots:false,
    dotsEach:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:6
        },
        1000:{
            items:6
        }
    }
})

$('em').click(function(e){
    e.preventDefault();
    var lv = $(this).siblings('.lv2');
    if (lv.css("display") === "none"){
        lv.show(500);
    }else{
        lv.hide(500);
    }

});

jQuery(document).ready(function($) {

    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $('.back-to-top').removeClass('hide');
            $('.back-to-top').addClass('show');
        }else{
            $('.back-to-top').addClass('hide');
            $('.back-to-top').removeClass('show');
        }
    });

    $('.fa-arrow-circle-up').on('click', function(){
        $('body, html').animate({
            scrollTop : 0
        }, 500);
    });

});
