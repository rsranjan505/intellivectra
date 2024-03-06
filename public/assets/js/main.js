(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });

    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    // $(window).on("load resize", function() {
    //     if (this.matchMedia("(min-width: 992px)").matches) {
    //         $dropdown.hover(
    //         function() {
    //             const $this = $(this);
    //             $this.addClass(showClass);
    //             $this.find($dropdownToggle).attr("aria-expanded", "true");
    //             $this.find($dropdownMenu).addClass(showClass);
    //         },
    //         function() {
    //             const $this = $(this);
    //             $this.removeClass(showClass);
    //             $this.find($dropdownToggle).attr("aria-expanded", "false");
    //             $this.find($dropdownMenu).removeClass(showClass);
    //         }
    //         );
    //     } else {
    //         $dropdown.off("mouseenter mouseleave");
    //     }
    // });
    $('.dropdown-toggle').navbarDropdown({trigger: 'mouseover'});

    // $('.dropdown-toggle').on('mouseover', function(){

    //     const $this = $(this);
    //     $this.addClass(showClass);
    //     $this.attr("aria-expanded", "true");
    //     $($dropdownMenu).addClass(showClass);

    // });

    // $('.dropdown-toggle').on('mouseleave', function(){

    //     const $this = $(this);
    //     $this.removeClass(showClass);
    //     $this.attr("aria-expanded", "false");
    //     $this.parent($dropdownMenu).removeClass(showClass);
    //     // $($dropdownMenu).removeClass(showClass);

    // });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    const testimonial = $('.owl-stage');


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 0,

        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            }
        }
    });

})(jQuery);


// video

$("#carouselExampleIndicators").carousel({interval: 3000});

// let allVids = $("#myCarousel").find('.carousel-item');

// allVids.each(function(index, el) {
//   if (index !== 0) {
//     $(this).find('video')[0].pause();
//   }
// });

// $("#myCarousel").on('slide.bs.carousel', function(ev) {
//   let slides = $(this).find('.carousel-item');
//   let pvid = slides[ev.from].querySelectorAll('video')[0];
//   let vid = slides[ev.to].querySelectorAll('video')[0];
//   let isPlaying = vid.currentTime > 0 && vid.readyState > 2;

//   vid.play();

//   if (isPlaying) {
//     pvid.pause();
//   }
// });


//Pie Chart

$('.slice1').click(function (param) {


    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','200px');
    $('#line').css('margin-right','680px');
    $('#line').css('transform','rotateY(180deg)');

    var conte = $(this).children('.title').find('h5').text();
    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('#line').children('div').find('h6').html('<a href="#" >Know more </a>');

    console.log(conte);

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('transform','scaleX(-1)');
});
$('.slice2').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','-70px');
    $('#line').css('margin-left','270px');
    $('#line').css('rotate','270deg');

    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});
    var dis = $(".line").css("display");

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('rotate','-270deg');
});

$('.slice3').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','150px');
    $('#line').css('margin-left','450px');
    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('transform','');
});

$('.slice4').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','450px');
    $('#line').css('margin-right','190px');
    $('#line').css('rotate','90deg');
    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('rotate','270deg');
});

$('.slice5').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','360px');
    $('#line').css('margin-right','580px');
    $('#line').css('transform','rotateY(180deg)');

    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('transform','scaleX(-1)');
});

$('.slice6').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','350px');
    $('#line').css('margin-left','450px');

    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');

});

$('body').click(function () {
    // $('#line').css('display','none');
});
