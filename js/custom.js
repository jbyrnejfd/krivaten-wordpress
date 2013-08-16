jQuery(function($){
	$(document).ready(function(){     	
    	////////////////////
		//  FORM EFFECTS  //
		////////////////////
		$("ul.gfield_checkbox li input").change(function() {
			$(this).next('label').toggleClass("active");
		});
		$("ul.gfield_radio li input").change(function() {
			$(this).closest(".gfield_radio").find(".active").removeClass("active");
			$(this).next('label').toggleClass("active");
		});
		$(".imageOverlay").hover(function(){
			$(this).find(".imageOverlayContent").fadeIn();
		}, function(){
			$(this).find(".imageOverlayContent").fadeOut();
		});

        ///////////////////////
		//  FORM VALIDATION  //
		///////////////////////
		$("#commentform").submit(function() {
			var errors = 0;
			$(".required").each(function(){
				var value = $(this).val();
				if (value.length == 0){
					errors++;
					$(this).css('background', '#fef7cc');
				}
			});
			if (errors > 0){
				alert('Please be sure to fill in all the required fields.');
				return false;
			}
		});

        /////////////////////////////
		//  FORM EFFECTS (IPHONE)  //
		/////////////////////////////
		if(navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i)) {
			$(document).ready(function () {
				$('label[for]').click(function () {
					var el = $(this).attr('for');
					if ($('#' + el + '[type=radio], #' + el + '[type=checkbox]').attr('selected', !$('#' + el).attr('selected'))) {return;} 
					else {$('#' + el)[0].focus();}
				});
			});
		}

		////////////////////////////
		//  TARGET ANDROID < 3.0  //
		////////////////////////////
		var browserName = navigator.userAgent.indexOf("Android ");
		var browserVersion = navigator.userAgent.substr(browserName+8,1)
		if(browserVersion < 3) {
			var transitions = false;
			$('body').addClass('no-transitions');
		} else {
			var transitions = true;
			$('body').addClass('transitions');
		}

		///////////////////////
		//  DRAWER CONTROLS  //
		///////////////////////
		var drawerHeight, drawerIsOpen, swipeThreshold = 120;

		function drawerResetHeight() {
			drawerHeight = Math.max(document.body.clientHeight, $('#footer .container').height());
		}(drawerResetHeight());

		function drawerOpen() {
			drawerIsOpen = true;
			if(!transitions) {
				$('body, #footer, #page-body').height(drawerHeight);
			}
			$('body').addClass('drawer-open');
		}
		function drawerClose() {
			drawerIsOpen = false;
			$('body').removeClass('drawer-open');
			$('#footer li.dropdown').removeClass('open');
			if(!transitions) {
				$('body, #page-body').removeAttr('style');
			}
		}

		// Toggle drawer
		$(".btn-drawer a").on("click",function(e) {
			e.preventDefault();
			if(drawerIsOpen) {
				drawerClose();
			} else {
				drawerOpen();
			}
		});

		// Toggle dropdowns
		$('#footer .dropdown-toggle').on('click', function() {
			if($(this).parent('li').hasClass('open')) {
				$('body, #footer, #page-body').height(drawerHeight);
			} else {
				$('body, #footer, #page-body').height(drawerHeight + $(this).next('ul.dropdown-menu').height());
			}
		});

		// Enabled or disable drawer
		$("body").swipe({
			triggerOnTouchEnd: true,
			swipeStatus: swipeStatus,
			fallbackToMouseEvents: false,
			allowPageScroll: "vertical"
		});

		function swipeStatus(event, phase, direction, distance, fingers) {
			if(phase=="cancel") {return false;}
			if(drawerIsOpen) {
				if(direction=="left" && distance > swipeThreshold) {
					drawerClose();
					return false;
				}
			} else {
				if(direction=="right" && distance > swipeThreshold) {
					drawerOpen();
					return false;
				}	
			}
		}
	});
});