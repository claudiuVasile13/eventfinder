$(document).ready(function() {
   
    animation();
    
    //login
    loginEmail();
    loginPassLength();
    
    //register
    registerEmail();
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

//Login

//check if the email from login form is valid
function loginEmail() {
    $('#email_l').keyup(function() {
        var $email = $('#email_l').val();
        var state = validEmail($email);
        if(state) {
            $('#email_ls').text('');
            $('#email_ls').css("display", "none");
            $('#email_l').removeClass("invalid");
            $('#email_l').addClass('valid');
            $('#pass_l').attr('disabled', false); 
        } else {
            $('#email_ls').text('');
            $('#email_ls').text('Email is not valid');
            $('#email_ls').css("display", "inline-block");
            $('#email_l').removeClass("valid");
            $('#email_l').addClass('invalid');
            $('#pass_l').attr('disabled', 'disabled'); 
            $('#email_ls').addClass('invalid');
        }
    });
}

//login pass length check
function loginPassLength() {
    //check if register pass is at least n characters long
    $("#pass_l").keyup(function () {
        var pass = $(this).val();
        var length_pass = pass.length;
        if (lengthPass(length_pass)) {
            $("#pass_ls").css("display", "none");
            $(this).removeClass("invalid");
            $(this).addClass("valid");
            $('#l_button').attr('disabled', false); 
            $('#l_button').css('color', '#fff'); 
        } else {                    
            $("#pass_ls").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid"); 
            $('#l_button').attr('disabled', 'disabled');
            $('#l_button').css('color', '#D3D3D3');
        }
    });
}

//Register

//register pass length check
function registerPassLenght() {
    //check if register pass is at least n characters long
    $("#pass_r").keyup(function () {
        var pass = $(this).val();
        var length_pass = pass.length;
        if (lengthPass(length_pass)) {
            $("#pass_rs").css("display", "none");
            $(this).removeClass("invalid");
            $(this).addClass("valid");
            $('#repass_r').attr('disabled', false);
        } else {                    
            $("#pass_rs").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid");
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
            $('#r_button').css('color', '#fff');
        } else {
            $("#repass_rs").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid");
            $('#r_button').attr('disabled', 'disabled');
            $('#r_button').css('color', '#D3D3D3');
        }
    });
}

//check if the email from register form is valid
function registerEmail() {
    $('#email_r').keyup(function() {
        var $email = $('#email_r').val();
        var state = validEmail($email);
        if(state) {
            $('#email_rs').text('');
            $('#email_rs').css("display", "none");
            $('#email_r').removeClass("invalid");
            $('#email_r').addClass('valid');            
            searchMail($email);
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
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            if (xmlhttp.responseText >= 1) {
                $("#email_r").removeClass("valid");
                $("#email_r").addClass("invalid");
                $('#email_rs').text('');
                $('#email_rs').text('Email is already taken');
                $("#email_rs").css("display", "inline-block");
                $('#pass_r').attr('disabled', 'disabled');  
            } else {
                //email is valid and unused
                $("#email_r").removeClass("invalid");
                $("#email_r").addClass("valid");
                $('#email_rs').text('');
                $("#email_rs").css("display", "none");
                $('#pass_r').attr('disabled', false);
            }
        }
    };  
    xmlhttp.open("GET", "../js/ajax_php/searchMail.php?email=" + email, true);
    xmlhttp.send();
}

//Functions

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

//check if the email that the user entered is a valid email
function validEmail(email) {
    var emailRegExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var validState = emailRegExp.test(email);
    return validState;
}
