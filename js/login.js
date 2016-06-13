$(document).ready(function () {
    $('.fields').blur(function () {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
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
        if (length_pass < 6) {
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


