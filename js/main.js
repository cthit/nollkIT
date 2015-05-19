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
			$('.menu-header-container').css({'display':'none'});
			$('#group-points').css({"display":"none"});
		} else if(screenWidth <= 960){ 
				$('#group-points').css({"display":"none"});
				$('.menu-header-container').css({'display':'block'});
				$('.menu-header-container').css({'display':'inline-block'});
		} else if(screenWidth > 960) {
			$('#group-points').css({"display":"block"});
		}
		 
	});

	//MOBILE ON HAMBURGER CLICK START
	$('#mobile-hamburger-container').on('click',function() {
		if ($('.menu-header-container').hasClass('show')) {
			$('#cross').css({'display':'none'});
			$('#hamburger').css({'display':'inline-block'});
			$('.menu-header-container').slideUp();
			$('.menu-header-container').removeClass('show');
		} else {
			$('#cross').css({'display':'inline-block'});
			$('#hamburger').css({'display':'none'});
			$('.menu-header-container').slideDown();
			$('.menu-header-container').addClass('show');

		}		
	});
	//MOBILE ON HAMBURGER CLICK END
});