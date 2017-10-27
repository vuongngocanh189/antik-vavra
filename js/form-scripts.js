$(document).ready(function(){
 $('.btn-form').click(function(event){
    event.preventDefault();
    $.ajax({
        dataType: "JSON",
        type: "POST",
        url: "php/form-process.php",
        data: $("#contact-form").serialize(),
        beforeSend: function(xhr){
            $(".btn-form").html('ODESÍLÁM...');
        },
        success: function(response){
            if(response){
                console.log(response);
                if(response['signal'] == 'ok'){
                   $('#msg').html('<div class="success">'+ response['msg'] +'</div>');
                   //vymazanie inputov po úspešnom odoslaní formuláru
                   $('input, textarea').val(function(){
                    return this.defaultValue;
                   });
                }
                else {
                    $('#msg').html('<div class="error">'+ response['msg'] +'</div>');
                }
            }
        },
        error: function(){
            $('#msg').html('<div class="error">Error occurs. Please try again later.</div>');
        },
        complete: function(){
             $(".btn-form").html('Odeslat');
        }
        });
    });
});
