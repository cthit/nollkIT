$(document).ready(function(){

    var currentlyShowedModalPanel;

    var KEYCODE_ESC = 27;

    //If someone presses escape closeModalPanel.
    $(document).on('keyup',function(e){
        if (e.keyCode === KEYCODE_ESC) {
            closeModalPanel();
        }
    });

   $('.clickable').on("click",function(){
        $("#cover-screen-container").fadeIn();
        var classes = $(this).attr('class').split(' ');
        for(var i = 0; i<classes.length; i++){
            if (classes[i].substr(0,3) === 'id-'){
                currentlyShowedModalPanel = ('#modal-panel-id-' + classes[i].substr(3,4));
                $('#cover-screen-container').after($(currentlyShowedModalPanel).detach());
                $('#modal-panel-id-' + classes[i].substr(3,4)).fadeIn();
                changeModalPanelAccordingToSize();
                break;
            }
        }

   });

    $('.close-modal-panel').on('click',function(){
       $('#cover-screen-container').fadeOut();
        $(currentlyShowedModalPanel).fadeOut();
    });

    var setSize = function(width,height){
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();
        //Changes the width and the height of the modal panel to the given percent.
        var widthInPercent = (windowWidth * width)/windowWidth;
        var heightInPercent = (windowHeight * height)/windowHeight;


        var howMuchFromLeft = (100 - widthInPercent)/2;
        var howMuchFromTop = (100 - heightInPercent)/2;

        //Sets the calculated values and ads the % to it
        $(currentlyShowedModalPanel).css({'width':widthInPercent + '%','height':heightInPercent + '%',
            'top':howMuchFromTop + '%','left':howMuchFromLeft + '%','z-index':'100'});
    }

    var changeModalPanelAccordingToSize = function(){
        if ($(window).width() <= 660) {
            setSize(95,75);
        } else if ($(window).width() <= 960) {
            setSize(60,50);
        } else {
            setSize(40,70);
        }
    }

    $(window).resize(function(){
        changeModalPanelAccordingToSize();
    });

    var closeModalPanel = function(){
        $('#cover-screen-container').fadeOut();
        $(currentlyShowedModalPanel).fadeOut();
    }

});