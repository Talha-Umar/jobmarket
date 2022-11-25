$(document).ready(function(){
$("#sendotp").click(function(){
        var empemail =$("#empemail").val();

        $.ajax({
            url: 'src/sendotp.php',
            type: 'post',
            data: {empemail:empemail},
            dataType: 'html',
            success:function(response){

                
                
                    $("#optsended").html(response);

                
            }
        });
    });
});