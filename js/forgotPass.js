$(document).ready(function() {
    
    forgotEmail();
    
});

//check if the email is valid
function forgotEmail() {
    $('#email-field').keyup(function() {
        var $email = $('#email-field').val();
        var state = validEmail($email);
        if(state) {
            $('#email-field-s').text('');
            $('#email-field-s').css("display", "none");
            $('#email-field').removeClass("invalid");
            $('#email-field').addClass('valid');                       
            $('#submit-button').attr('disabled', false);
            $('#submit-button').css('background-color', '#fff');
        } else {
            $('#email-field-s').text('');
            $('#email-field-s').text('Email is not valid');
            $('#email-field-s').css("display", "inline-block");
            $('#email-field').removeClass("valid");
            $('#email-field').addClass('invalid');
            $('#submit-button').attr('disabled', 'disabled');
            $('#submit-button').css('background-color', '#D3D3D3');
        }
    });
}

//check if the email that the user entered is a valid email
function validEmail(email) {
    var emailRegExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var validState = emailRegExp.test(email);
    return validState;
}

