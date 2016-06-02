$(document).ready(function() {
    $('#res-icon-menu').on('click', function() {
        $('#side-menu').css('left', '0px');
    });
    $('#close').on('click', function() {
        $('#side-menu').css('left', '-100%');
    });
});


