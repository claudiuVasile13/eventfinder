$(document).ready(function() {
    $('#res-icon-menu').on('click', function() {
        $('#side-menu').toggleClass('active inactive');
        var oldimg = $(this).attr('src');
        var img = (oldimg === '../img/menu.png') ? '../img/close.png' : '../img/menu.png';
        $(this).fadeOut(500, function() {
            $(this).attr('src', img);
            $(this).fadeIn(500);
        });;
    });
});


