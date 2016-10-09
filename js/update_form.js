/**
 * Created by anna on 10/1/16.
 */

function checkForm(e){
    var formIsValid = checkFields();

    if(!formIsValid){
        e.preventDefault();
    } else {
        e.preventDefault();
        $('.panel-danger').remove();
        $.post(
            "update_user.php",
            {
                id: $('.btn').attr("value"),
                first_name: document.user_form.first_name.value,
                last_name: document.user_form.last_name.value,
                patronymic: document.user_form.patronymic.value,
                birth: document.user_form.birth.value,
                passport_series: document.user_form.passport_series.value,
                passport_number: document.user_form.passport_number.value,
                passport_from: document.user_form.passport_from.value,
                passport_date: document.user_form.passport_date.value,
                private_number: document.user_form.private_number.value,
                place_of_birth: document.user_form.place_of_birth.value,
                city: document.user_form.city.value,
                address: document.user_form.address.value,
                phone_number: document.user_form.phone_number.value,
                mobile_number: document.user_form.mobile_number.value,
                email: document.user_form.email.value,
                place_of_work: document.user_form.place_of_work.value,
                position: document.user_form.position.value,
                marital_status: document.user_form.marital_status.value,
                nationality: document.user_form.nationality.value,
                disability: document.user_form.disability.value,
                pensioner: document.user_form.pensioner.checked,
                military: document.user_form.military.checked,
                income: document.user_form.income.value
            },
            function (data) {
                if(data == ''){
                    document.location.href = "/PiRIS/php/ClientModule/list_of_users.php";
                } else {
                    var errorPanel = '<div class="panel panel-danger">' +
                        '<div class="panel-body">' +
                        data +
                        '</div></div>';
                    $('#errorPanel').prepend(errorPanel);
                }
            }
        )
    }

}