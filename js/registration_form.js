/**
 * Created by Anna on 11.09.2016.
 */

String.prototype.trim = function() {
    return this.replace(/^\s+/, '').replace(/\s+$/, '');
}

function checkForm(e){
    var formIsValid = true;
    $('.warn-message').remove();
    $('.form-control').each(function (index) {
        $(this).val($(this).val().trim());
        $(this).parent().removeClass("has-error");
    });

    $('.required').each(function(index){
        if($(this).val() == ''){
            $(this).parent().addClass( "has-error");
            $(this).parent().append( "<p class='warn-message'>This value should not be blank!</p>" );
            formIsValid = false;
        }
    });

    if(!formIsValid){
        e.preventDefault();
    } else {
        e.preventDefault();
        $.post(
            "php/ClientModule/create_user.php",
            {
                first_name: document.user_form.first_name.value,
                last_name: document.user_form.last_name.value,
                patronymic: document.user_form.patronymic.value,
                birth: document.user_form.birth.value,
                passport_series: document.user_form.passport_series.value,
                passport_number: document.user_form.passport_number.value,
                passport_from: document.user_form.passport_from.value,
                passport_date: document.user_form.passport_date.value,
                place_of_birth: document.user_form.place_of_birth.value
            },
            function (data) {
                if(data){
                    alert(data);
                } else {
                    alert(data);
                }
            }
        )
    }

}