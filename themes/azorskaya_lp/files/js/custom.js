$(function(){

/// ******************         FULLSCREEN BACKGROUND SLIDER         ******************** ///

$(function ($) {

    $.supersized({
        autoplay: true,
        thumb_links: false,
        start_slide: 1,
        thumbnail_navigation: false,
        slide_interval: 6000,		// Length between transitions
        transition: 1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        transition_speed: 700,		// Speed of transition

        // Components
        slides: [	// Slideshow Images
            {image: themePath + '/files/img/bg1.jpg'},
            {image: themePath + '/files/img/bg2.jpg'},
            {image: themePath + '/files/img/bg3.jpg'},
            {image: themePath + '/files/img/bg4.jpg'}
        ]
    });
});
/// ******************         PARALLAX SLIDER         ******************** ///

$(function () {

    $('#da-slider').cslider({
        current: 0, 	// index of current slide
        bgincrement: 0,	// increment the bg position (parallax effect) when sliding
        autoplay: true, // slideshow on / off
        interval: 6000  // time between transitions
    });
});

/// ******************         FLEX SLIDER         ******************** ///

$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "fade",
        controlNav: false,
        directionNav: false,
        slideshowSpeed: 6000,
    });
});

/// ******************         SCROLL TO         ******************** ///

$('.da-link').click(function (e) {
    $('html,body').scrollTo(this.hash, this.hash);
    e.preventDefault();
});

/// ******************         MODAL         ******************** ///

$('.goModal').click(function () {
    $('#actionModal').arcticmodal();
});

/// ******************         FANCYBOX         ******************** ///
$(document).ready(function() {
    $(".fancybox-media").fancybox({
        arrows: true,
        padding: 0,
        closeBtn: true,
        openEffect: 'fade',
        closeEffect: 'fade',
        prevEffect: 'fade',
        nextEffect: 'fade',
        helpers: {
            media: {},
            overlay: {
                locked: false
            },
            buttons: false,
            title: {
                type: 'inside'
            }
        }/*,
        beforeLoad: function() {
            var el, id = $(this.element).data('title-id');
            if (id) {
                el = $('#' + id);
                if (el.length) {
                    this.title = el.html();
                }
            }
        }*/
    });
});

});