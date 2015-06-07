/**
 * Created by OscarEvertsson on 01/06/15.
 */
$(document).ready(function(){
    var KEYCODE_ESC = 27;

    //If someone presses escape closeModalPanel.
    $(document).on('keyup',function(e){
        if (e.keyCode === KEYCODE_ESC) {
            closeModalPanel();
        }
    });

    //Update
    window.showCalendarModalPanel = function(calendarEvent){
        $('#cover-screen-container').fadeIn(); //Fades in the background cover
        $('.calendar-modal-panel').fadeIn(); //Fades in the window
        $('#calendar-modal-panel-title').text(calendarEvent.title); //Sets the title of the event

        //Sets the location if there is one.
        if (typeof calendarEvent.location === "undefined") {
            $('#where-when-how-list').find('#where').text("Var? " + "...NollKIT har inte fyllt i något");
        } else {
            $('#where-when-how-list').find('#where').text("Var? " + calendarEvent.location);
        }

        //Sets the description if there is one.
        if (typeof calendarEvent.description === "undefined") {
            $('#where-when-how-list').find('#what').text("Vad? " + "...NollKIT har inte fyllt i något");
        } else {
            $('#where-when-how-list').find('#what').text("Vad? " + calendarEvent.description);
        }

        //Sets the time for the event.
        $('#where-when-how-list').find('#when').text(
            "När? " + calendarEvent.start.format("h:mm") + " - " + calendarEvent.end.format("h:mm"));

        //Sets the url
        $('#where-when-how-list').find('#event-url').attr('href',calendarEvent.url);
    };

    //If for instance you want to change the model panel size to 40% width and 60% height call setCalendarModalPanelSize(40,60)
    window.setCalendarModalPanelSize = function(width,height){
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();
        //Changes the width and the height of the modal panel to the given percent.
        var widthInPercent = (windowWidth * width)/windowWidth;
        var heightInPercent = (windowHeight * height)/windowHeight;


        var howMuchFromLeft = (100 - widthInPercent)/2;
        var howMuchFromTop = (100 - heightInPercent)/2;

        //Sets the calculated values and ads the % to it
        $('.calendar-modal-panel').css({'width':widthInPercent + '%','height':heightInPercent + '%',
        'top':howMuchFromTop + '%','left':howMuchFromLeft + '%'});
    }

    //Closes the modal panel and removes the background dimmer.
    var closeModalPanel = function(){
        $('#cover-screen-container').fadeOut();
        $('.calendar-modal-panel').fadeOut();
    }

    //Close modal panel
    $('#calendar-close-modal-panel').on("click",function(){
        closeModalPanel();
    });


});