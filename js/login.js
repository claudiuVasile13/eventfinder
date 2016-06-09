$(document).ready(function () {
    $('.fields').blur(function () {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
    });

    //function to recognize if pass and re-pass have the same value
    $("#repass_r").focusout(function () {
        var pass = $("#pass_r").val();
        var repass = $("#repass_r").val();
        var email = $("#email_r").val();
        if (email !== '') {
            if (pass === repass) {
                alert("e la fel");
            } else {
                alert("parola e diferita");
            }
        }
    });
});


