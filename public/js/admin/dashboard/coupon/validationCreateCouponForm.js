// in the name of allah
let messageCreateCouponForm = {
    copounName: "copounName",
};
function copounNameInputValidation(event) {
    document.getElementById("copounNameValidationMessage").style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("copounNameValidationMessage").style.display =
            "block";
        document.getElementById("copounNameValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        messageCreateCouponForm.copounName = "copounName";
        return false;
    }
    messageCreateCouponForm.copounName = "";
}
