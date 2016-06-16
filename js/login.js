$(document).ready(function () {
    $('.fields').blur(function () {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
    });
    
    
    
    //check if all the fields are filled up, if they are enable the register button, if not deactivate it
    $(".r_fields").keyup(function() {
        
        var $empty = false;
        
        $('.r_fields').each(function() {
            if($(this).val().length === 0) {
                $empty = true;
            }
        });
        
        if($empty) {
            $('#r_button').attr('disabled', 'disabled');
            $('#r_button').css('color', '#eee');
        } else {
            $('#r_button').attr('disabled', false);
            $('#r_button').css('color', '#fff');
        }
    });

    
    //function to recognize if pass and re-pass have the same value
    $("#repass_r").keyup(function () {
        var pass = $("#pass_r").val();
        var repass = $("#repass_r").val();
        var email = $("#email_r").val();
        if (email !== '') {
            if (pass === repass) {
                $("#repass_rs").css("display", "none");
                $(this).removeClass("invalid");
                $(this).addClass("valid");
            } else {
                $("#repass_rs").css("display", "inline-block");
                $(this).removeClass("valid");
                $(this).addClass("invalid");
            }
        }
    });

    $("#pass_r").keyup(function () {
        var pass = $(this).val();
        var length_pass = pass.length;
        if (length_pass < 12) {
            $("#pass_rs").css("display", "inline-block");
            $(this).removeClass("valid");
            $(this).addClass("invalid");
        } else {
            $("#pass_rs").css("display", "none");
            $(this).removeClass("invalid");
            $(this).addClass("valid");
        }
    });
});


