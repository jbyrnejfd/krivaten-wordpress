jQuery(function($){
	$(document).ready(function(){
		var userAgent = navigator.userAgent;

		/**
		 * Form effects
		 */
		$("ul.gfield_checkbox li input").change(function() {
			$(this).next('label').toggleClass("active");
		});
		$("ul.gfield_radio li input").change(function() {
			$(this).closest(".gfield_radio").find(".active").removeClass("active");
			$(this).next('label').toggleClass("active");
		});
		$('.datepicker').datepicker({
			format: 'mm-dd-yyyy'
		});


		/**
		 * Form effects on iPhone
		 */
		$('label[for]').click(function () {
			var el = $(this).attr('for');
			if ($('#' + el + '[type=radio], #' + el + '[type=checkbox]').attr('selected', !$('#' + el).attr('selected'))) {return;}
			else {$('#' + el)[0].focus();}
		});


		/**
		 * Toggle side drawer
		 */
		$('[data-toggle="offcanvas"]').click(function (evt) {
			evt.preventDefault();
			$(evt.target).toggleClass('active');
			$('.row-offcanvas').toggleClass('active');
		});


		/**
		 * Trigger navbar toggle
		 */
		$('[data-toggle="toggle-nav"]').click(function (evt) {
			var context = $(this),
				navbar = $('.navbar'),
				target = navbar.find('.navbar-inner'),
				windowWidth = $(window).width(),
				innerTargetHeight;

			// If navbar has navbar-active class, remove height
			if (navbar.hasClass('navbar-active')) {
				target.height('');

			// Otherwise, add height
			} else {
				if (windowWidth > 767) {
					// Get height of inner target
					innerTargetHeight = target.find('.navbar-collapse').outerHeight();

					// Set height of target
					target.height(innerTargetHeight);
				}
			}

			// Toggle navbar-active class
			$('.navbar').toggleClass('navbar-active');
		});
	});
});
