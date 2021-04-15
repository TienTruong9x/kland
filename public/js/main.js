const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    
    burger.addEventListener('click', () => {
    	//toggle nav
        nav.classList.toggle('nav-active');
        //Animate Links
        navLinks.forEach((link, index) => {
        	if (link.style.animation) {
        		link.style.animation = '';
        	} else {
        	link.style.animation = `navLinksFade 0.5s ease forwards ${index / 7 + 1.5}s`;
        	}    
    });
    });
}
navSlide();
/* icon btn start*/
$('.icon').click(function() {
    $('span').toggleClass("cancel");
});
/* icon btn end*/
/* Slider function start*/
var counter = 1;
setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 10000);
/* Slider function end*/
/* Prev-next function start*/
$(function() {
    let navToggle = $('#nav-toggle');
    $('#properties-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
            }
        }, {
            breakpoint: 530,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        }]
    });
    $('#testimonials-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev"><</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">></a>'
    });
    $(document).trigger('scroll');
});
/* Prev-next function end*/
$(function() {
    let navToggle = $('#nav-toggle');
    $('#properties-slider2').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
        responsive: [{
            breakpoint: 1100,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
            }
        }, {
            breakpoint: 530,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        }]
    });
    $('#testimonials-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev"><</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">></a>'
    });
    $(document).trigger('scroll');
});