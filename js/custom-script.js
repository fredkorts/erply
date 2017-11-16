jQuery(document).ready(function( $ ) {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 1000); // 10 seconds
    var idleTime = 0;
    var runEffect = false;

    function timerIncrement() {
        idleTime = idleTime+1;
        if (idleTime > 5 && runEffect) { // 30 seconds
            $(".overlay").fadeIn(500);
        }
        else if (idleTime > 120 && runEffect) { // 2 minutes
            window.location.reload();
        }
    }


    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
    $(this).on("click", function(e) {
        $(".overlay").fadeOut(500);
    });

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll > 210) {
            $(".custom-logo-link").css("width","125px");
            $(".custom-logo-link img").css("bottom","0px");
        } else {
            $(".custom-logo-link").css("width","0px");
            $(".custom-logo-link img").css("bottom","150px");
        }
    });
    $(".search-toggle").click(function() {
        $(this).toggleClass('close-toggle');
        $('.social-block').toggleClass('shrink');
        $('#searchform').toggleClass('enlarge');
        return false;
    });
    $("#nav-icon").click(function() {
        $(this).toggleClass('open');
        $('.toggle-menu').toggleClass('open-menu');
        $('#sliderList').fadeToggle(500);
    })
    $( "#sliderList #slider-menu .dropdown-toggle" ).append( "<div class='arrow-container'><span class='arrow-icon'></span></div>" );
    $(".arrow-container").click(function() {
        $(".arrow-container").removeClass("turn");
        $(this).toggleClass("turn");
    })


    //Input focus
    $(".registration-input").focus(function() {
        $(".sliding-span").removeAttr("style");
        if ($(this).val()) {
        }
        else {
            $(".registration-input").siblings(".sliding-span").removeAttr("style");
        }
        var movement = $(this).siblings(".sliding-span").outerWidth(true)*(-1);
        var strVar = movement.toString()+"px";
        $(this).siblings(".sliding-span").css("transform", "translateX("+strVar+")");
        $(this).siblings(".sliding-span").css("color", "#FAA619");
    });
    $(".registration-input").on("input", function() {
       if($(this).val()) {
           $(this).css("background", "white");
       }
       else {
           $(this).removeAttr("style");
       }
    });


    //Employee number selector
    $(".employee-value").click(function() {
        $(".employee-value").removeClass("selected-value");
        $(this).addClass("selected-value");
    });
    //Registration page flow
    $(".registration-panel").toggle();
    $("#first-panel").show();
    //Stop submit button from submitting
    $(".bttn-next").click(function() {
        var parent = $(this).parents(".registration-panel");
        parent.next().show();
        parent.hide();
    })

});
