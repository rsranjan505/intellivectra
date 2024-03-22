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
    // $('.dropdown-toggle').navbarDropdown({trigger: 'mouseover'});

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
                items:1
            },
            992:{
                items:1
            }
        }
    });

    const testimonial = $('.owl-stage');


    // Vendor carousel
    $('.blogs-carousel').owlCarousel({
        loop: true,
        margin: 0,
        dots: true,
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

    //service features
    $('.service-feature-carousel').owlCarousel({
        loop: true,
        margin: 0,
        dots: true,
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

    // Services solutions carousel
    $('.service-solution-carousel').owlCarousel({
        loop: true,
        margin: 0,
        dots: true,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:3
            },
            768:{
                items:4
            },
            992:{
                items:4
            }
        }
    });

})(jQuery);




// video

$("#carouselExampleIndicators").carousel({interval: 5000});

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
var mouse_is_inside = false;
$('.slice1').click(function (param) {


    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','200px');
    $('#line').css('margin-right','820px');
    $('#line').css('transform','rotateY(180deg)');

    var conte = $(this).children('.title').find('h5').text();
    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
                                                <p class="">Personalized Digital Services drive efficiency, insights, and cost
                                                savings.</p>
                                                    <a class="text-primary" href="#" >Know more </a>
                                                </div`);



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
    $('#line').css('margin-top','-160px');
    $('#line').css('margin-left','290px');
    $('#line').css('rotate','270deg');

    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});
    var dis = $(".line").css("display");

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('rotate','-270deg');


    $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">We offer streamlined operations, minimised
    downtime, cost-effective scalability</p>
        <a class="text-primary" href="#" >Know more </a>
    </div`);
});

$('.slice3').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','150px');
    $('#line').css('margin-left','720px');
    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('transform','');

    $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Offering Comprehensive Security Services which are Proactive,
    Efficient, Compliant, Cost-effective.</p>
        <a class="text-primary" href="#" >Know more </a>
    </div`);
});

$('.slice4').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','510px');
    $('#line').css('margin-right','190px');
    $('#line').css('rotate','90deg');
    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('rotate','270deg');

    $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Tailored Enterprise Application Services which
    optimise processes, enhance productivity, and innovate.</p>
        <a class="text-primary" href="#" >Know more </a>
    </div`);
});

$('.slice5').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','360px');
    $('#line').css('margin-right','780px');
    $('#line').css('transform','rotateY(180deg)');

    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('.line').children('#slice-item').css('transform','scaleX(-1)');
    $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Customised consulting services to foster competitiveness,
    performance enhancement, and growth.</p>
        <a class="text-primary" href="#" >Know more </a>
    </div`);
});

$('.slice6').click(function (param) {
    $('#line').css('margin-top','');
    $('#line').css('margin-right','');
    $('#line').css('margin-left','');
    $('#line').css('transform','');
    $('#line').css('rotate','');

    $('#line').css('display','block');
    $('#line').css('margin-top','350px');
    $('#line').css('margin-left','650px');

    $(this).siblings().children('img').css({'transform' : ''});
    $(this).children('img').css({'transform' : 'scale(1.09)'});

    $('.line').children('#slice-item').css('transform','');
    $('.line').children('#slice-item').css('rotate','');
    $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Offering Efficient, tailored staffing solutions for organisational
    success.</p>
        <a class="text-primary" href="#" >Know more </a>
    </div`);

});

var mouse_is_inside = false;

$(document).ready(function()
{
    $('.ser-slice').hover(function(){
        mouse_is_inside=true;
    }, function(){
        mouse_is_inside=false;
    });

    // $("body").mouseup(function(){
    //     if(! mouse_is_inside) $('.form_wrapper').hide();
    // });
    $('body').click(function () {
        if( ! mouse_is_inside){
            $('.ser-slice').siblings().children('img').css({'transform' : ''});
            $('#line').css('display','none');
        }
    });

});



//data animation
// Txt Rotate
$(document).ready(function() {
	var TxtRotate = function(el, toRotate, period) {
	  this.toRotate = toRotate;
	  this.el = el;
	  this.loopNum = 0;
	  this.period = parseInt(period, 10) || 1500;
	  this.txt = '';
	  this.tick();
	  this.isDeleting = false;
	};

	TxtRotate.prototype.tick = function() {
	  var i = this.loopNum % this.toRotate.length;
	  var fullTxt = this.toRotate[i];

	  if (this.isDeleting) {
		this.txt = fullTxt.substring(0, this.txt.length - 1);
	  } else {
		this.txt = fullTxt.substring(0, this.txt.length + 1);
	  }

	  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

	  var that = this;
	  var delta = 300 - Math.random() * 100;

	  if (this.isDeleting) { delta /= 2; }

	  if (!this.isDeleting && this.txt === fullTxt) {
		delta = this.period;
		this.isDeleting = true;
	  } else if (this.isDeleting && this.txt === '') {
		this.isDeleting = false;
		this.loopNum++;
		delta = 300;
	  }

	  setTimeout(function() {
		that.tick();
	  }, delta);
	};

	window.onload = function() {
	  var elements = document.getElementsByClassName('txt-rotate');
	  for (var i=0; i<elements.length; i++) {
		var toRotate = elements[i].getAttribute('data-rotate');
		var period = elements[i].getAttribute('data-period');
		if (toRotate) {
		  new TxtRotate(elements[i], JSON.parse(toRotate), period);
		}
	  }
	  // INJECT CSS
	  var css = document.createElement("style");
	  css.type = "text/css";
	  css.innerHTML = ".txt-rotate > .wrap { border-right: 1px solid transparent }";
	  document.body.appendChild(css);

	};
});
