jQuery(document).ready(function( $ ) {
    $(".search-toggle").click(function() {
        $(this).toggleClass('close-toggle');
        $('.social-block').toggleClass('shrink');
        return false;
    });
});
