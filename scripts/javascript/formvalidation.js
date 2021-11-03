function validateName(){
    var name = document.getElementById("nameInput").value;
    name.trim(); //remove any whitespace from both ends of the string
    if(name.length > 0){ //make sure it is not empty
        var regexp = /^([A-z',.\s?]+)$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Name has incorrect format, please enter alphabetical symbols separated with a blankspace.");
            return false;
        }
    }
    alert("Please fill in your name.");
    return false;
}
function validateHpNumber () {
    var hpNumber = document.getElementById("handphoneInput").value;
    var regexp = /[0-9]+/;
    if(hpNumber.length > 0) {//make sure field not empty
        if (regexp.test(hpNumber)) {
            if (hpNumber.length == 8) {
                return true;
            } else {
                alert("Please ensure that handphone number is only 8 digits, you are in Singapore right?");
                return false;
            }
        } else {
            alert("Please enter only numbers");
            return false;
        }
    } else {
        alert("Please make sure field is not empty");
        return false;
    }
}
function validateEmail(){
    var email = document.getElementById("emailInput").value;
    email.trim();
    if(email.length > 0){ //make sure it is not empty
        var regexp = /^([\w\.-])+@([\w]+\.){1,3}([\w]){2,3}$/;
        if(regexp.test(email)){
            return true;
        }
        else{
            alert("Email entered in wrong format.");
            return false;
        }
    }
    alert("Please fill in your email.");
    return false;
}
function validateConfirmEmail(){
    var emailConfirm = document.getElementById("emailConfirmInput").value;
    emailConfirm.trim();
    if(emailConfirm.length > 0){ //make sure it is not empty
        var regexp = /^([\w\.-])+@([\w]+\.){1,3}([\w]){2,3}$/;
        if(regexp.test(emailConfirm)){
            //COnditional check for equality
            var emailInitial = document.getElementById("emailInput").value;
            console.log(emailInitial);
            if (emailConfirm === emailInitial) {
                return true;
            } else {
                alert("Please ensure you have entered the correct email address as before");
                return false;
            }
        }
        else{
            alert("Email entered in wrong format.");
            return false;
        }
    }
    alert("Please fill in your email.");
    return false;
}
function validateDate(){
    var date = new Date(document.getElementById("date").value);
    var currentDate = new Date();
    if((date.getFullYear() >= currentDate.getFullYear()) && (date.getMonth() >= currentDate.getMonth()) && (date.getDate() > currentDate.getDate())){
        return true;
    }
    alert("Date must be in the future.");
    return false;
}
console.log("hello world");