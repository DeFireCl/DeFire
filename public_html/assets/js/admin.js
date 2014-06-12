$(window).ready(function () {




   	$(".fecha").datepicker( {   dateFormat: "dd-mm-yy"   });

   	/*  Reset Form */
   	$(document).on('click', '.cerrarForm', function(){
   		$('.modal').modal('hide')
   	});


   
   	// JS MENÚ
	   	// grab the initial top offset of the navigation 
		var sticky_navigation_offset_top = $('nav').offset().top;
		
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function(){
			var scroll_top = $(window).scrollTop(); // our current vertical position from the top
			
			// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
			if (scroll_top > sticky_navigation_offset_top) { 
				$('nav').css({ 'position': 'fixed', 'top':0, 'left':0, 'width':'100%' });
			} else {
				$('nav').css({ 'position': 'relative' }); 
			}   
		};
		
		// run our function on load
		sticky_navigation();
		
		// and run it again every time you scroll
		$(window).scroll(function() {
			 sticky_navigation();
		});
		
		// NOT required:
		// for this demo disable all links that point to "#"
		$('a[href="#"]').click(function(event){ 
			event.preventDefault(); 
		});


});