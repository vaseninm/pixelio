$(function(){

/// ******************         ZOOM & COLOR TABLE         ******************** ///

	$('.price1, .price3').hover(           
		   function(){     //при наведении на любую ссылку указанного class'a  
				$('.price1, .price2, .price3').removeClass('zoom'); // у всех удаляем class
				$(this).addClass('zoom') },  // а этой ссылке добавляем
		   function(){                     //при покидании указателя пределов ссылки
				$(this).removeClass('zoom'); // у этой ссылки тоже удаляем class
				$('.price2').addClass('zoom') }
	);

	$('.price1').hover(           
		   function(){     //при наведении на любую ссылку указанного class'a  
				$('#priceTable th, #priceTable td, #tableShow div').removeClass('color'); // у всех удаляем class
				$('#priceTable .bazoviyPriceTable, #priceTable  tr:nth-child(2n+2) td:nth-child(3), #priceTable  tr:nth-child(2n+3) td:nth-child(3), #arrow1').addClass('color') }, 
		   function(){                     //при покидании указателя пределов ссылки
				$('#priceTable .bazoviyPriceTable, #priceTable  tr:nth-child(2n+2) td:nth-child(3), #priceTable  tr:nth-child(2n+3) td:nth-child(3), #arrow1').removeClass('color'); 
				$('#priceTable .optimumPriceTable, #priceTable tr:nth-child(2n+2) td:nth-child(4), #priceTable tr:nth-child(2n+3) td:nth-child(4), #arrow2').addClass('color') }
	);

	$('.price3').hover(           
		   function(){     //при наведении на любую ссылку указанного class'a  
				$('#priceTable th, #priceTable td, #tableShow div').removeClass('color'); // у всех удаляем class
				$('#priceTable .luxPriceTable, #priceTable  tr:nth-child(2n+2) td:nth-child(5), #priceTable  tr:nth-child(2n+3) td:nth-child(5), #arrow3').addClass('color') },  
		   function(){                     //при покидании указателя пределов ссылки
				$('#priceTable .luxPriceTable, #priceTable  tr:nth-child(2n+2) td:nth-child(5), #priceTable  tr:nth-child(2n+3) td:nth-child(5), #arrow3').removeClass('color'); 
				$('#priceTable .optimumPriceTable, #priceTable tr:nth-child(2n+2) td:nth-child(4), #priceTable tr:nth-child(2n+3) td:nth-child(4), #arrow2').addClass('color') }
	);

/// ******************         ANIMATE TABLE         ******************** ///
           
	var customStep = function(now, obj) {
		now; // текущее значение анимированного параметра
		
		obj.elem;  // объект анимации
		obj.prop;  // параметр который анимируется
		obj.start; // начальное значение
		obj.end;   // конечное значение
		
		obj.pos;   // коэффициент, изменяется от 0 до 1
				   // значение now вычисляется как now = (obj.end - obj.start) * obj.pos
		
		obj.options; // опции настроек анимации
		
		// сделаем вывод текста
		//$(this).html('Height: '+now+obj.unit);
	}
					
					
	var height = $("#tableHide").height();
	$("#tableHide").height(325);

	$("#btn-slide, #arrow1, #arrow2, #arrow3").click(function(){
	  if($(this).hasClass("clicked")) {
		$("#tableHide").animate({
			height: 325
		}, {step:customStep});
		$('#btn-slide').html('смотреть все услуги');
		$('#tableShow').removeClass('active');
		$('html,body').animate({
		  scrollTop: $('#tableContainer').offset().top
		}, {step:customStep});
		$("#btn-slide, #arrow1, #arrow2, #arrow3").removeClass("clicked");
	  } else {
		$("#tableHide").animate({
			height: height
		}, {step:customStep});
		$('#btn-slide').html('скрыть все услуги');
		$('#tableShow').addClass('active');
		$("#btn-slide, #arrow1, #arrow2, #arrow3").addClass("clicked");
	  }
		return false;
	});


/// ******************         SCROLL TO         ******************** ///

	$('#jsMenu a').click(function (e) {
		$('html,body').scrollTo(this.hash, this.hash);
		e.preventDefault();
	});

/// ******************         MODAL         ******************** ///

	$('.goModal').click(function () {
		$('#publicationModal').arcticmodal();
		return false;
	});
	$('.goFormModal').click(function () {
		$('#contactFormModal').arcticmodal();
		return false;
	});

/// ******************         CLIENT CARUSEL         ******************** ///

	$('ul').roundabout();	
			
/// ******************         FANCYBOX         ******************** ///

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
        },
        beforeLoad: function() {
            var el, id = $(this.element).data('title-id');
            if (id) {
                el = $('#' + id);
                if (el.length) {
                    this.title = el.html();
                }
            }
        },
		afterLoad: function() {
			$(".counterImg").html((this.index + 1) + ' / ' + this.group.length);
		}
    });


/// ******************         PUBLICATION AJAX         ******************** ///

	$('#allPublication').click(function() {
		$.arcticmodal({
			type: 'ajax',
			url: 'themes/azorskaya_status_lp/views/layouts/allPublication.html'
		});
		return false;
	});
	
	/* Временное решение по публикациям */
	$('#2013_08').click(function() {
		$.arcticmodal({
			type: 'ajax',
			url: 'themes/azorskaya_status_lp/views/layouts/2013_08.html'
		});
		return false;
	});
	$('#2013_03').click(function() {
		$.arcticmodal({
			type: 'ajax',
			url: 'themes/azorskaya_status_lp/views/layouts/2013_03.html'
		});
		return false;
	});
	$('#2013_02').click(function() {
		$.arcticmodal({
			type: 'ajax',
			url: 'themes/azorskaya_status_lp/views/layouts/2013_02.html'
		});
		return false;
	});
	$('#2012_08').click(function() {
		$.arcticmodal({
			type: 'ajax',
			url: 'themes/azorskaya_status_lp/views/layouts/2012_08.html'
		});
		return false;
	});
	$('#2009_11').click(function() {
		$.arcticmodal({
			type: 'ajax',
			url: 'themes/azorskaya_status_lp/views/layouts/2009_11.html'
		});
		return false;
	});
	$('#2008_11').click(function() {
		$.arcticmodal({
			type: 'ajax',
			url: 'themes/azorskaya_status_lp/views/layouts/2008_11.html'
		});
		return false;
	});
/* ------ */
});