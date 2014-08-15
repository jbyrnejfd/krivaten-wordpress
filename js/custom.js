jQuery(function($){
	$(document).ready(function(){     	
		var userAgent = navigator.userAgent;

		/**
		 * Form Effects
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
		 * Form Effects on iPhone
		 */
		if(userAgent.match(/iPhone/i) || userAgent.match(/iPod/i) || userAgent.match(/iPad/i)) {
			$('label[for]').click(function () {
				var el = $(this).attr('for');
				if ($('#' + el + '[type=radio], #' + el + '[type=checkbox]').attr('selected', !$('#' + el).attr('selected'))) {return;} 
				else {$('#' + el)[0].focus();}
			});
		}

		/**
		 * Target Android < 3.0
		 */
		var browserName = userAgent.indexOf("Android "),
			browserVersion = userAgent.substr(browserName+8,1)
		if(browserVersion < 3) {
			var transitions = false;
			$('body').addClass('no-transitions');
		} else {
			var transitions = true;
			$('body').addClass('transitions');
		}
	});
});