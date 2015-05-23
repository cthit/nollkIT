$(document).ready(function(){

	var screenWidth= $(window).width();

	if(screenWidth <= 660){
		$('#group-points').css({"display":"none"})
	} else if (screenWidth <= 960){
		$('#group-points').css({"display":"none"})
	}

	//FIX NAVIGATION DEPENDING ON SIZE
	$(window).resize(function(){
		
		screenWidth = $(window).width();
		
		if(screenWidth <= 660){
			$('#group-points').css({"display":"none"});
		} else if(screenWidth <= 960){ 
				$('#group-points').css({"display":"none"});
		} else if(screenWidth > 960) {
			$('#group-points').css({"display":"block"});
		}
		 
	});

	//MOBILE ON HAMBURGER CLICK START
	$('#mobile-hamburger-container').on('click',function() {
		if ($('#mobile-menu-container').hasClass('show')) {
			$('#cross').css({'display':'none'});
			$('#hamburger').css({'display':'inline-block'});
			$('#mobile-menu-container').slideUp();
			$('.menu-header-container').removeClass('show');
		} else {
			$('#cross').css({'display':'inline-block'});
			$('#hamburger').css({'display':'none'});
			$('#mobile-menu-container').slideDown();
			$('#mobile-menu-container').addClass('show');

		}		
	});
	//MOBILE ON HAMBURGER CLICK END
});