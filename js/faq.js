$(document).ready(function(){

	var currentlyShow = null;
	currentlyShow = $('section:first').find('.faq').slideDown("slow");
	$('section:first').find('.faq').addClass('show');

	//Shows content of the post clicked and removes any other open post's content.
	$('.post-header-container').on("click",function(){
		if ($(this).parent().find('.faq').hasClass('show')){
			$(this).parent().find('.faq').slideUp();
			$(this).parent().find('.faq').removeClass('show');
			currentlyShow = null;
		} else {
			if(currentlyShow !== null){ //If something is already shown we remove it before showing the clicked content.
				currentlyShow.slideUp();
				currentlyShow.removeClass('show');
			}
			$(this).parent().find('.faq').slideDown();
			$(this).parent().find('.faq').addClass('show');
			currentlyShow = $(this).parent().find('.faq');
		}
	});

});