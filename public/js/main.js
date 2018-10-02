$(document).ready(function() {
	// Main menu
	$('.header__burger a').on('click', function(e){
		e.preventDefault();
		$('.nav').slideToggle('fast');
	});

	$('.nav-list__item-parent > a').on('click', function(e){
		e.preventDefault();
		// $('.nav-list__dropdown').slideToggle('fast');
	});

	// Slider new user page
	$('.newuser-instagram__slider').slick({
		dots: true
	});

	// Slider with thumbnails
	var $productSliderNav = $('.slider-nav');
	var $productSlideFor = $('.slider-for');

		$productSlideFor.on('init', function(event,slick) {
				$($productSliderNav.find('li').get(slick.currentSlide)).addClass("active");
			}).on('beforeChange', function(event,slick,slide,nextSlide) {
					$productSliderNav.find('li').removeClass("active");
					$($productSliderNav.find('li').get(nextSlide)).addClass("active");
					// $('iframe').attr('src', $('iframe').attr('src'));
				}).slick({
		 slidesToShow: 1,
		 slidesToScroll: 1,
		arrows: true,
	  fade: true,
	});

	$productSliderNav.on('click', 'li', function(elem, ind, io){
		console.log("this", this);
		var index = $($productSliderNav).find('li').index(this);
		$productSlideFor.slick('slickGoTo', index);
	});


	// $('.slider-nav').on('beforeChange', function(event,slick,slide,nextSlide) {
	// 	$('.slider-nav').find('.slick-slide').removeClass('slick-current').eq(nextSlide).addClass('slick-current');
	// 	});
	// $('.slider-nav').slick({
	// //  slidesToShow: 3,
	// //  slidesToScroll: 1,
	// // slidesToShow: 0,
	//  asNavFor: '.slider-for',
	// //  lazyLoad: 'ondemand',
	//  centerMode: true,
	//  focusOnSelect: true,
	//  arrows: false,
	//  fade: true
	// });



	// Checkbox for discount
	$(".product-discount input:checkbox").change(function(){
	  $(this).closest('.product-discount').toggleClass('checked', this.checked);
	});

	// // Flow select button
	// $('.flow__btn').on('click', function() {
	// 	$(this).toggleClass('btn-orange');
	// })

	// slider product reviews
	$('.product-slider').slick({
		dots: true
	});

  // Custom forms
	jcf.replaceAll();

	$('#vault-modal-1').on('show.bs.modal', function (e) {
		$('#win-1').stop().prop('number', 0).text(0);
	}).on('shown.bs.modal', function (e) {
		$('#win-1').animateNumber({
			number: 10000,
			numberStep: $.animateNumber.numberStepFactories.separator(',')
		}, 3000);
	})

	$('#vault-modal-2').on('show.bs.modal', function (e) {
		$('#win-2').stop().prop('number', 0).text(0);
	}).on('shown.bs.modal', function (e) {
		$('#win-2').animateNumber({
			number: 100,
			numberStep: $.animateNumber.numberStepFactories.separator(',')
		}, 3000);
	})


});
