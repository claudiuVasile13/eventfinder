/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    
    $("#edit-icon").click(function(){
       $(this).css("display","none");
       $("#submit-icon").css("display","block");
       $("input").removeAttr('readonly');
    });

});