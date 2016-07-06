/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    
    $("#edit-icon").click(function(){
       $(this).addClass("nodisplay");
       $("#submit-icon").addClass("display");
       $("input").removeAttr('readonly');
    });

});