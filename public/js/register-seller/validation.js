// in the name of allah
let payam = {
    firstName: "1",
    lastName: "1",
    email: "1",
    phoneNumber: "1",
    homePlace: "1",
    password: "1",
    confirmPassword: "1",
};
function firstNameValidation(event) {
    document.getElementById("firstNameValidationMessage").style.display =
        "none";
    let firstName = event.value;
    if (firstName == "") {
        document.getElementById("firstNameValidationMessage").style.display =
            "block";
        document.getElementById("firstNameValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        payam.firstName = "1";
        return false;
    }
    if (!isNaN(firstName)) {
        document.getElementById("firstNameValidationMessage").style.display =
            "block";
        document.getElementById("firstNameValidationMessage").innerHTML =
            "برای پر کردن از حروف استفاده کنید";
        payam.firstName = "1";
        return false;
    }
    if (firstName.length < 3) {
        document.getElementById("firstNameValidationMessage").style.display =
            "block";
        document.getElementById("firstNameValidationMessage").innerHTML =
            "نام باید بیش از دو حرف باشد";
        payam.firstName = "1";
        return false;
    }
    payam.firstName = "";
}
function lastNameValidation(event) {
    document.getElementById("lastNameValidationMessage").style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("lastNameValidationMessage").style.display =
            "block";
        document.getElementById("lastNameValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        payam.lastName = "1";
        return false;
    }
    if (!isNaN(inputValue)) {
        document.getElementById("lastNameValidationMessage").style.display =
            "block";
        document.getElementById("lastNameValidationMessage").innerHTML =
            "برای پر کردن از حروف استفاده کنید";
        payam.lastName = "1";
        return false;
    }
    if (inputValue.length < 3) {
        document.getElementById("lastNameValidationMessage").style.display =
            "block";
        document.getElementById("lastNameValidationMessage").innerHTML =
            "نام باید بیش از دو حرف باشد";
        payam.lastName = "1";

        return false;
    }
    payam.lastName = "";
}
function emailValidation(event) {
    document.getElementById("emailValidationMessage").style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("emailValidationMessage").style.display =
            "block";
        document.getElementById("emailValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        payam.email = "1";
        return false;
    }
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let validEmail = re.test(inputValue);
    if (!validEmail) {
        document.getElementById("emailValidationMessage").style.display =
            "block";
        document.getElementById("emailValidationMessage").innerHTML =
            "لطفا یک رایانامه ی معتبر وارد کنید";
        payam.email = "1";
        return false;
    }
    payam.email = "";
}

function phoneNumberValidation(event) {
    // TODO حذف کردن زدن خالی در اول و آخر ورودی توسط کاربر
    document.getElementById("phoneNumberValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("phoneNumberValidationMessage").style.display =
            "block";
        document.getElementById("phoneNumberValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        payam.phoneNumber = "1";
        return false;
    }
    let reMobile = /^09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}$/;
    // let reHome = /^0[0-9]{2,}[0-9]{7,}$/;
    let validphoneNumberMobile = reMobile.test(inputValue);
    // let validphoneNumberHome = reHome.test(inputValue);
    if (!validphoneNumberMobile) {
        document.getElementById("phoneNumberValidationMessage").style.display =
            "block";
        document.getElementById("phoneNumberValidationMessage").innerHTML =
            "لطفا یک شماره ی معتبر وارد کنید";
        payam.phoneNumber = "1";
        return false;
    }
    payam.phoneNumber = "";
}

function homePlaceValidation(event) {
    document.getElementById("homePlaceValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("homePlaceValidationMessage").style.display =
            "block";
        document.getElementById("homePlaceValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        payam.homePlace = "1";
        return false;
    }
    if (inputValue.length < 30) {
        document.getElementById("homePlaceValidationMessage").style.display =
            "block";
        document.getElementById("homePlaceValidationMessage").innerHTML =
            "نشانی باید بیش از 30 حرف باشد";
        payam.homePlace = "1";
        return false;
    }
    payam.homePlace = "";
}

function passwordValidation(event) {
    document.getElementById("passwordValidationMessage").style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("passwordValidationMessage").style.display =
            "block";
        document.getElementById("passwordValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        payam.password = "1";
        return false;
    }
    let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/;
    let validphonePassword = re.test(inputValue);
    if (!validphonePassword) {
        document.getElementById("passwordValidationMessage").style.display =
            "block";
        document.getElementById("passwordValidationMessage").innerHTML = `
            حداقل یک حرف کوچک استفاده کنید <br>
            حداقل یک حرف بزرگ استفاده کنید <br>
            پسورد حداقل باید ۸ کاراکتر باشد <br>
            حداقل از یک عدد استفاده کنید <br>
            `;
        payam.password = "1";
        return false;
    }
    payam.password = "";
}

function confirmPasswordValidation(event) {
    document.getElementById("confirmPasswordValidationMessage").style.display =
        "none";
    let password = document.querySelector("input[name='password']").value;
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "confirmPasswordValidationMessage"
        ).style.display = "block";
        document.getElementById("confirmPasswordValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        payam.confirmPassword = "1";
        return false;
    }
    if ((password != inputValue)) {
        document.getElementById(
            "confirmPasswordValidationMessage"
        ).style.display = "block";
        document.getElementById(
            "confirmPasswordValidationMessage"
        ).innerHTML = `
                ورودی رمز عبور با تایید رمز عبور باید یکسان باشد
            `;
        payam.confirmPassword = "1";
        return false;
    }
    payam.confirmPassword = "";
}
