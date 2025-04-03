$(document).ready(function(){
    $('#contact-form').validate({
        rules:{
            name:{
                required:true,
                minlength:2
            },
            mobileno:{
                required:true,
            },
            service:{
                required:true,
            },
            message:{
                required:true,
                minlength:2
            }
        },
        submitHandler:function(form){
            $.ajax({
                url: ajax_object.ajax_url,
                type: 'POST',
                data: $(form).serialize() + '&action=contact_form&security=' + ajax_object.nonce,
                success: function(response) {
                    if(response.data.status == 'success') {
                        $('#contact-form').hide();
                        $('#contact-form-thankyou').show();
                    } else {
                        alert('There was an error submitting the form. Please try again.');
                    }
                }
            });

            return false;
        }
    })
})