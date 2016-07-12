$(document).ready(function(){
        popup();
});

// offer pop up action
function popup() {

    $('.wallpaper').click(function(){
        $('#modal-popup').css('display', 'flex');
        $('#modal-popup').css('align-items', 'center');
        $('#modal-popup').css('justify-content', 'center');
    }); 
          
};
