$(document).ready(function(){

//	setTimeout(popup, 2000);
        popup();
});

// offer pop up action
function popup() {

    $('.wallpaper').click(function(){
        $('#main-box').css('display', 'flex');
        $('body').css('overflow', 'hidden');
    }); 

    $("#main-box").click(function() {
        $("#main-box").css("display", "none");
        $('body').css('overflow', 'scroll');
    });
	
};
