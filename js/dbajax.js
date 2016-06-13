/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    function searchMail() {
        $("#email_r").focusout(function () {
            var email = $("#email_r").val();
            if (email !== "") {
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        console.log(xmlhttp.responseText);
                        if (xmlhttp.responseText >= 1) {
                            $("#email_r").removeClass("valid");
                            $("#email_r").addClass("invalid");
                            $("#email_rs").css("display", "inline-block");
                        } else {
                            $("#email_r").removeClass("invalid");
                            $("#email_r").addClass("valid");
                            $("#email_rs").css("display", "none");
                        }
                    }
                };
                xmlhttp.open("GET", "../js/ajax_php/searchMail.php?email=" + email, true);
                xmlhttp.send();
            }
        });
    }

    searchMail();
});


