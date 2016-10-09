function checkFields() {
    var formIsValid = true;
    $('.warn-message').remove();
    $('.form-control').each(function () {
        $(this).val($(this).val().trim());
        $(this).parent().removeClass("has-error");
    });

    $('.required').each(function(){
        if($(this).val() == ''){
            $(this).parent().addClass( "has-error");
            $(this).parent().append( "<p class='warn-message'>This value should not be blank!</p>" );
            formIsValid = false;
        }
    });

    if(! checkFieldsWithMask()){
        formIsValid = false;
    }

    return formIsValid;
}

function checkFieldsWithMask() {
    var isValid = true;

    if(!checkPassportNumber()){
        isValid = false;
    }

    if(! checkPrivateNumber()){
        isValid = false;
    }

    if(!checkMobilePhone()){
        isValid = false;
    }

    if(!checkHomePhone()){
        isValid = false;
    }

    if(!checkIsLettersField($('#firstName'))){
        isValid = false;
    }

    if(!checkIsLettersField($('#lastName'))){
        isValid = false;
    }

    if(!checkIsLettersField($('#patronymic'))){
        isValid = false;
    }

    if(!checkIsDateField($('#dateOfBirth'))){
        isValid = false;
    }

    if(!checkIsDateField($('#passportDate'))){
        isValid = false;
    }

    return isValid;
}

function checkPassportNumber() {
    var regexp = /^[0-9]{7}$/;
    var passportNumberInput = $('#passportNumber');

    if(! regexp.test(passportNumberInput.val())){
        passportNumberInput.parent().addClass("has-error");
        passportNumberInput.parent().append( "<p class='warn-message'>Password number must contain 7 numbers</p>" );
        return false;
    }
    return true;
}

function checkPrivateNumber() {
    var regexp = /^[0-9a-zA-Z]{14}$/;
    var privateNumberInput = $('#privateNumber');

    if(! regexp.test(privateNumberInput.val())){
        privateNumberInput.parent().addClass("has-error");
        privateNumberInput.parent().append( "<p class='warn-message'>Private number must contain 14 [0-9A-Za-z] symbols</p>" );
        return false;
    }
    return true;
}

function checkMobilePhone() {
    var regexp = /^\+\d{3}\(\d{2}\)\d{3}-\d{2}-\d{2}$/;
    var mobileInput = $('#mobilePhone');

    if(mobileInput.val() != ''){
        if(! regexp.test(mobileInput.val())){
            mobileInput.parent().addClass("has-error");
            mobileInput.parent().append( "<p class='warn-message'>Mobile phone must be in  +xxx(xx)xxx-xx-xx format</p>" );
            return false;
        }
    }
    return true;
}

function checkHomePhone() {
    var regexp = /^\d{3}-\d{2}-\d{2}$/;
    var homePhoneInput = $('#homePhone');

    if(homePhoneInput.val() != ''){
        if(! regexp.test(homePhoneInput.val())){
            homePhoneInput.parent().addClass("has-error");
            homePhoneInput.parent().append( "<p class='warn-message'>Home phone must be in xxx-xx-xx format</p>" );
            return false;
        }
    }
    return true;
}

function checkIsLettersField(input) {
    var regexp = /^[A-Za-z]+$/;

    if(input.val() != ''){
        if(! regexp.test(input.val())){
            input.parent().addClass("has-error");
            input.parent().append( "<p class='warn-message'>This field must contain A-Za-z symbols</p>" );
            return false;
        }
    }
    return true;
}

function checkIsDateField(input) {
    var regexp = /^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$/;

    if(! regexp.test(input.val())){
        input.parent().addClass("has-error");
        input.parent().append( "<p class='warn-message'>This field must contain correct date in yyyy-mm-dd format</p>" );
        return false;
    }
    return true;
}
