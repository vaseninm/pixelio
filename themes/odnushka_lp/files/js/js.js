$(document).ready(function() {
	
        $('.details').click(function(){
           $('.covert_1').slideToggle(); 
        });
         $('.buy').click(function(){
           $('.covert_2').slideToggle(); 
        });


			  $('.slider1').bxSlider({
			    slideWidth: 960,
			    minSlides: 1,
			    maxSlides: 1,
			    slideMargin: 10,
				pager: false
			  });


			  	$('.fancybox').fancybox();
				$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});
                            
                            $('.slider2').cycle({ 
                                fx:      'scrollHorz',
								timeout: 0,
                                prev:   '#prev_1', 
                                next:   '#next_1',
								slides: '> div',
								loader: "true"
                            });     
                           $('.slider3').cycle({ 
                                fx:      'scrollHorz',
								timeout: 0, 
                                prev:   '#prev', 
                                next:   '#next',
								slides: '> div',
								loader: "true"
                            });
                            
                            $("a.anchor_link").click(function() {
                                elementClick = $(this).attr("href");
                                destination = $(elementClick).offset().top - 0;
                                if ($.browser.webkit) {
                                    $('body').animate({scrollTop: destination}, 600);
                                } else {
                                    $('html').animate({scrollTop: destination}, 600);
                                }
                            });

                          
			  	
});