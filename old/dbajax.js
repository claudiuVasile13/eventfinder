$(document).ready(function() {
    validEmail();
});

//check if the email is valid
function validEmail() {
    $('#email_r').keyup(function() {
        var emailRegExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var $email = $('#email_r').val();
        var validState = emailRegExp.test($email);
        if(validState) {
            $('#email_rs').text('');
            $('#email_rs').css("display", "none");
            $('#email_r').removeClass("invalid");
            $('#email_r').addClass('valid'); 
            searchMail('#email_r');
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
function searchMail() {
    $('#email_r').focusout(function () {
    var $email = $('#email_r').val();
//        console.log($email);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            if (xmlhttp.responseText >= 1) {
//                    console.log(xmlhttp.responseText);
                $("#email_r").removeClass("valid");
                $("#email_r").addClass("invalid");
                $('#email_rs').text('');
                $('#email_rs').text('Email is already taken');
                $("#email_rs").css("display", "inline-block");
//                    console.log('da');
            } else {
                $("#email_r").removeClass("invalid");
                $("#email_r").addClass("valid");
                $('#email_rs').text('');
                $("#email_rs").css("display", "none");
            }
        }
    };
    xmlhttp.open("GET", "../js/ajax_php/searchMail.php?email=" + $email, true);
    xmlhttp.send();
    });
}