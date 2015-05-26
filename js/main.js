$(document).ready(function(){

	var screenWidth= $(window).width();

    // GLÖM INTE ATT LÄGGA TILL REFERENS PÅ NYA SIDAN SEDAN! GOOGLE DEV KOLLA
    // http://fullcalendar.io/docs/google_calendar/
    $('#calendar').fullCalendar({
        defaultView: 'agendaDay',
        background:'#005a7d',
        height:'auto',
        axisFormat: 'HH:mm',


        //Adding google calendar
        googleCalendarApiKey: 'AIzaSyDCATKfyvhKbKMaBYJqKQvWS6jMf7VAyuY',
        events: {
            googleCalendarId: 'vsslnmoph2ae1se32drhd92psc@group.calendar.google.com'
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