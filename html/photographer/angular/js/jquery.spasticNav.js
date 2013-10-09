(function($) {

	$.fn.spasticNav = function(options) {
	
		options = $.extend({
			speed : 1800,
			reset : 1500,
			easing : 'easeOutExpo' //easeOutElastic
		}, options);
	
		return this.each(function() {
		
		 	var nav = $(this),
		 		currentPageItem = $('.selected', nav),
		 		blob,
		 		reset;
		 		
		 	$('<li class="menuArrow"></li>').css({
		 		width : currentPageItem.outerWidth(),
		 		left : currentPageItem.position().left,
		 	}).appendTo(this);
		 	
		 	blob = $('.menuArrow', nav);
		 	
			$('li:not(.menuArrow)', nav).hover(function() {
				// курсор мыши над объектом
				clearTimeout(reset);
				blob.animate(
					{
						left : $(this).position().left,
						width : $(this).width()
					},
					{
						duration : options.speed,
						easing : options.easing,
						queue : false
					}
				);
			}, function() {
				// курсор мыши сдвинулся с объекта	
				reset = setTimeout(function() {
					blob.animate({
						width : currentPageItem.outerWidth(),
						left : currentPageItem.position().left
					}, options.speed)
				}, options.reset);
	
			});
		
		}); // each() 
	
	};

})(jQuery);