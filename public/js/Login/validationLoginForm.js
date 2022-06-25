// in the name of allah
let messageForLoginForm = {
    email: "email",
    password: "password",
};
function loginFormEmailValidation(event) {
    document.getElementById("emailLoginFormValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "emailLoginFormValidationMessage"
        ).style.display = "block";
        document.getElementById("emailLoginFormValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        messageForLoginForm.email = "email";
        return false;
    }
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let validEmail = re.test(inputValue);
    if (!validEmail) {
        document.getElementById(
            "emailLoginFormValidationMessage"
        ).style.display = "block";
        document.getElementById("emailLoginFormValidationMessage").innerHTML =
            "لطفا یک رایانامه ی معتبر وارد کنید";
        messageForLoginForm.email = "email";
        return false;
    }
    messageForLoginForm.email = "";
}

function loginFormPasswordValidation(event) {
    document.getElementById(
        "passwordLoginFormValidationMessage"
    ).style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "passwordLoginFormValidationMessage"
        ).style.display = "block";
        document.getElementById(
            "passwordLoginFormValidationMessage"
        ).innerHTML = "لطفا این ورودی را پر کنید";
        messageForLoginForm.password = "password";
        return false;
    }
    let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/;
    let validphonePassword = re.test(inputValue);
    if (!validphonePassword) {
        document.getElementById(
            "passwordLoginFormValidationMessage"
        ).style.display = "block";
        document.getElementById(
            "passwordLoginFormValidationMessage"
        ).innerHTML = `
        قوانین رمز عبور :<br>
            حداقل یک حرف کوچک استفاده کنید <br>
            حداقل یک حرف بزرگ استفاده کنید <br>
            پسورد حداقل باید ۸ کاراکتر باشد <br>
            حداقل از یک عدد استفاده کنید <br>
            `;
        messageForLoginForm.password = "password";
        return false;
    }
    messageForLoginForm.password = "";
}
