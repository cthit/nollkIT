$(document).ready(function(){


    //<------------FullCalendar stuff---------------->

    var receptionStart = new Date("2015-08-17");

    /**
     * A simple function to update the calendar default date depending on the current date.
     * @param receptionStartDate a javascript date object for when the reception is supposed to start
     * @returns {*} If the current date is later than the specified reception start
     * use the current date as default, otherwise use the reception start date as default.
     */
    var getDefaultDate = function(receptionStartDate) {
        //If current date is later than receptionStart
        if ( new Date().valueOf() >= receptionStartDate.valueOf() ) {
            return new Date();
        }
        return receptionStartDate;
    }

    // GLÖM INTE ATT LÄGGA TILL REFERENS PÅ NYA SIDAN SEDAN! GOOGLE DEV KOLLA
    // http://fullcalendar.io/docs/google_calendar/
    $('#calendar').fullCalendar({
        defaultView: 'agendaWeek',
        background:'#005a7d',
        height:'auto',
        axisFormat: 'HH:mm',
        minTime: '06:00:00',
        defaultDate:getDefaultDate(receptionStart),
        header: {
            left: 'title',
            center: 'prev,next',
            right: 'today,agendaDay,agendaWeek,month'
        },

        /* Adding google calendar. There's no way of getting around adding the API key (confirmed with Rekoil). */

        googleCalendarApiKey: 'AIzaSyCdQiVw9Zn9QnuHD_u8T9HKkkaw2PtfQoQ',
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
        ],

        eventRender: function(event, element) {
            element.on('click', function (e) {
                e.preventDefault();
            });
        },

        eventClick: function(calEvent, jsEvent, view) {
            showCalendarModalPanel(calEvent);
        }
    });

    //Adds the arrows to the fullCalendar
    $('.fc-view-container').after('<div id="arrow-container">' +
    '<i id="arrow-down" class="fa fa-chevron-down arrow"></i>' +
    '<i id="arrow-up" class="fa fa-chevron-up arrow"></i></div>');


    //<------------FullCalendar stuff end---------------->


    //Variable for the screen size
    var screenWidth = $(window).width();
    //Changes the view depending on what breakpoint
    var changeAccordingToSize = function(){
        resetShowHideSchedual();
        if (screenWidth <= 660) {
            $('.fc-view-container').css({"display": "none"});
        } else if (screenWidth <= 960) {
            $('.fc-view-container').css({"display": "none"});
        } else {
            $('.fc-view-container').css({"display": "block"});
        }
    };


    var resetShowHideSchedual = function() {
        $('#arrow-up').css({'display':'none'});
        $('#arrow-down').css({'display':'block'});
    }




    //If resize calls changeAccordingToSize with the new screenWidth
    $(window).resize(function(){
        if(screenWidth !== $(window).width()){
            screenWidth = $(window).width();
            changeAccordingToSize();
        }
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

    //Run when script launched
    changeAccordingToSize();
});