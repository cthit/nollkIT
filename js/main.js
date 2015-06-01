$(document).ready(function(){
    // GLÖM INTE ATT LÄGGA TILL REFERENS PÅ NYA SIDAN SEDAN! GOOGLE DEV KOLLA
    // http://fullcalendar.io/docs/google_calendar/
    $('#calendar').fullCalendar({
        defaultView: 'agendaDay',
        background:'#005a7d',
        height:'auto',
        axisFormat: 'HH:mm',
        minTime: '06:00:00',
        header: {
            left: 'title',
            center: 'prev,next',
            right: 'today,agendaDay,agendaWeek'
        },

        //Adding google calendar
        googleCalendarApiKey: 'AIzaSyANyLE-2J-xzUl1S9s2eSx-kmBkbjR_q10',
        eventSources: [
            {
                googleCalendarId: 'hgbrg.se_m4teg8n1lqlhf8n9es3gt4q6b4@group.calendar.google.com',
                color: 'blue'
            },
            {
                googleCalendarId: 'hgbrg.se_di8440endk6j5g7smmqv533buk@group.calendar.google.com',
                color: 'red'
            },
            {
                googleCalendarId: 'hgbrg.se_8qmmgd79sepo90rpha5dqdva6o@group.calendar.google.com',
                color: 'green'

            }
        ]
    });
    //Adds the arrows to the fullCalendar
    $('.fc-toolbar').after('<div id="arrow-container">' +
    '<i id="arrow-down" class="fa fa-chevron-down arrow"></i>' +
    '<i id="arrow-up" class="fa fa-chevron-up arrow"></i></div>');

    //Variable for the screen size
    var screenWidth = $(window).width();
    //Changes the view depending on what breakpoint
    var changeAccordingToSize = function(){
        if(screenWidth <= 960){
            $('.fc-view-container').css({"display": "none"});
        } else {
            $('.fc-view-container').css({"display": "block"});
        }
    };
    //Ran when script launched
    changeAccordingToSize();

    //If resize calls changeAccordingToSize with the new screenWidth
    $(window).resize(function(){
        screenWidth = $(window).width();
        changeAccordingToSize();
    });

    //On click for arrow pointing down
    $('#arrow-down').on("click",function(){
        if ($('.fc-view-container').queue().length == 0){
            $('.fc-view-container').slideDown()
            $(this).css({'display':'none'});
            $('#arrow-up').fadeIn(500);
            //Necessary since fullCalendar bug. if you don't do this the calendar doesn't render properly.
            $('#calendar').fullCalendar( 'changeView', 'month' );
            $('#calendar').fullCalendar( 'changeView', 'agendaDay' );

        }
    });

    //On click for arrow pointing up
    $('#arrow-up').on("click",function(){
        if ($('.fc-view-container').queue().length == 0) {
            $('.fc-view-container').slideUp()
            $(this).css({'display':'none'});
            $('#arrow-down').fadeIn(500);
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