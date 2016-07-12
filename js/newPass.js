$(document).ready(function() {
   
   newPassLenght();
   newSamePass();
    
});

//new pass length check
function newPassLenght() {
    //check if register pass is at least n characters long
    $("#pass_field").keyup(function () {
        var pass = $(this).val();
        var length_pass = pass.length;
        if (lengthPass(length_pass)) {
            $("#pass-s").css("display", "none");
            $(this).removeClass("invalid");
            $(this).addClass("valid");
            $('#repass_field').attr('disabled', false);
        } else {                    
            $("#pass-s").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid");
            $('#repass_field').attr('disabled', 'disabled');           
        }
    });
}

//new samePass check
function newSamePass() {
    //function to recognize if pass and re-pass have the same value
    $("#repass_field").keyup(function () {
        var pass = $("#pass_field").val();
        var repass = $("#repass_field").val();
        if (pass === repass) {
            $("#repass-s").css("display", "none");
            $(this).removeClass("invalid");
            $(this).addClass("valid");
            $('button').attr('disabled', false);
            $('button').css('background-color', '#fff');
        } else {
            $("#repass-s").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid");
            $('button').attr('disabled', 'disabled');
            $('button').css('background-color', '#D3D3D3');
        }
    });
}

//check if the password is at least n characters long
function lengthPass(pass) {
    if(pass >= 6) {
        return true;
    }
    return false;
}

//check if the pass is equal with repass
function samePass(pass, repass) {
    if(pass === repass) {
        return true;
    }
    return false;
}
