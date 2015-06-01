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
    window.updateModalPanel = function(calendarEvent){
        $('#cover-screen-container').fadeIn();
        $('.calendar-popup').fadeIn();
        $('#modal-panel-title').text(calendarEvent.title);
        $('#where-when-how-list').find('#where').text("Var? " + calendarEvent.location);
        $('#where-when-how-list').find('#when').text(
            "När? " + calendarEvent.start.format("h:mm") + " - " + calendarEvent.end.format("h:mm"));
        $('#where-when-how-list').find('#what').text("Vad? " + calendarEvent.description);
    };

    var closeModalPanel = function(){
        $('#cover-screen-container').fadeOut();
        $('.calendar-popup').fadeOut();
    }

    //Close modal panel
    $('#close-modal-panel').on("click",function(){
        closeModalPanel();
    });


});