jQuery(document).ready(function( $ ) {
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        // if(scroll > 210) {
        //     $(".erply-navbar").css('background-color', '#18b1e7');
        // } else {
        //     $(".erply-navbar").css('background-color', 'white');
        // }
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
});
