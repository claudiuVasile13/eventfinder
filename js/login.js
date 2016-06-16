$(document).ready(function () {
   
    animation();
    
    //register
    validEmail();
    registerPassLenght();
    registerSamePass();
    
});



//input and label animation for login and register
function animation() {
    $('.fields').blur(function () {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
    });
}

//register pass length check
function registerPassLenght() {
    //check if register pass is at least n characters long
    $("#pass_r").keyup(function () {
        var pass = $(this).val();
        var length_pass = pass.length;
        if (lengthPass(length_pass)) {
            $("#pass_rs").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid");
            $('#repass_r').attr('disabled', false);
        } else {
            $("#pass_rs").css("display", "none");
            $(this).removeClass("invalid");
            $(this).addClass("valid");
            $('#repass_r').attr('disabled', 'disabled');
            
        }
    });
}

//register samePass check
function registerSamePass() {
    //function to recognize if pass and re-pass have the same value
    $("#repass_r").keyup(function () {
        var pass = $("#pass_r").val();
        var repass = $("#repass_r").val();
        if (pass === repass) {
            $("#repass_rs").css("display", "none");
            $(this).removeClass("invalid");
            $(this).addClass("valid");
            $('#r_button').attr('disabled', false);
//            $('#r_button').css('color', '#fff');
        } else {
            $("#repass_rs").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid");
            $('#r_button').attr('disabled', 'disabled');
        }
    });
}

//check if the password is at least n characters long
function lenghtPass(pass) {
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

//check if the email is valid
function validEmail() {
    $('#email_r').keyup(function() {
        var $email = $('#email_r').val();
        var emailRegExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var validState = emailRegExp.test($email);
        console.log(validState);
        if(validState) {
            $('#email_rs').text('');
            $('#email_rs').css("display", "none");
            $('#email_r').removeClass("invalid");
            $('#email_r').addClass('valid'); 
            
            var search = searchMail($email);
            
            if(search) {
                $("#email_r").removeClass("valid");
                $("#email_r").addClass("invalid");
                $('#email_rs').text('');
                $('#email_rs').text('Email is already taken');
                $("#email_rs").css("display", "inline-block");
                $('#pass_r').attr('disabled', 'disabled');
            } else {
                $("#email_r").removeClass("invalid");
                $("#email_r").addClass("valid");
                $('#email_rs').text('');
                $("#email_rs").css("display", "none");
                $('#pass_r').attr('disabled', 'false');
            }
        } else {
            $('#email_rs').text('');
            $('#email_rs').text('Email is not valid');
            $('#email_rs').css("display", "inline-block");
            $('#email_r').removeClass("valid");
            $('#email_r').addClass('invalid');
        }
    });
}

//search in the user table for a user with the email that was filled out, 
//if we find a record it means that the message has already been taken, if not the email can be registered
function searchMail(email) {
    var response = false;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            if (xmlhttp.responseText >= 1) {
                response = false;
            } else {
                response = true;  
            }
        }
    };
    
    xmlhttp.open("GET", "../js/ajax_php/searchMail.php?email=" + email, true);
    xmlhttp.send(); 
    
    return response;
}
