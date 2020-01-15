$(document).ready(function (){
    
    $("#username_reg").keyup(function(){
        var user = $(this).val();
        $.post("./Ajax/checkUsername",{username_reg:user}, function(data){
            $("#messageUS").html(data);
        });
    });
});