$(document).ready(function(){
    var $form = $("#form-signup");
    var successBlock = $("#form-signup .success-block");
    var errorBlock = $("#form-signup .errors-block");

    $form.ajaxForm({
        beforeSend:function(){
            successBlock.html('');
            errorBlock.html('');
            $form.find(':input').prop('disabled', true);
        },
        success:function (data) {
            $form.find(':input').prop('disabled', false);

            if (data.status) {
                $("#form-signup .success-block").html(data.message);
                //location.href = '/';
            } else {
                if(data.redirect_url){
                    location.href = data.redirect_url;
                    return;
                }

                var errorsStr = '';

                $.each(data.errors, function(input, message) {
                    errorsStr += '<p>' + message + '</p>';
                });

                $("#form-signup .errors-block").html(errorsStr);
            }
        }
    });
});

