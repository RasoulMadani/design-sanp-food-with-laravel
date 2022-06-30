// in the name of allah
let messageRestaurantInformation = {
    restaurantName: "restaurantName",
    typeOfRestaurant: "typeOfRestaurant",
    bankAccountNumber: "bankAccountNumber",
    restaurantAddress: "restaurantAddress",
    phoneNumberRestaurant: "phoneNumberRestaurant",
};
function restaurantNameValidation(event) {
    document.getElementById("restaurantNameValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "restaurantNameValidationMessage"
        ).style.display = "block";
        document.getElementById("restaurantNameValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        messageRestaurantInformation.restaurantName = "restaurantName";
        return false;
    }
    messageRestaurantInformation.restaurantName = "";
}

function typeOfRestaurantValidation(event) {
    document.getElementById("typeOfRestaurantValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "typeOfRestaurantValidationMessage"
        ).style.display = "block";
        document.getElementById("typeOfRestaurantValidationMessage").innerHTML =
            "لطفا یک نوع را انتخاب کنید";
        messageRestaurantInformation.typeOfRestaurant = "typeOfRestaurant";
        return false;
    }
    messageRestaurantInformation.typeOfRestaurant = "";
}
function bankAccountNumberValidation(event) {
    document.getElementById(
        "bankAccountNumberValidationMessage"
    ).style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "bankAccountNumberValidationMessage"
        ).style.display = "block";
        document.getElementById(
            "bankAccountNumberValidationMessage"
        ).innerHTML = "لطفا این ورودی را پر کنید";
        messageRestaurantInformation.bankAccountNumber = "bankAccountNumber";
        return false;
    }
    messageRestaurantInformation.bankAccountNumber = "";
}

function restaurantAddressValidation(event) {
    document.getElementById("restaurantAddressValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("restaurantAddressValidationMessage").style.display =
            "block";
        document.getElementById("restaurantAddressValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        messageRestaurantInformation.restaurantAddress = "restaurantAddress";
        return false;
    }
    if (inputValue.length < 30) {
        document.getElementById("restaurantAddressValidationMessage").style.display =
            "block";
        document.getElementById("restaurantAddressValidationMessage").innerHTML =
            "نشانی باید بیش از 30 حرف باشد";
        messageRestaurantInformation.restaurantAddress = "restaurantAddress";
        return false;
    }
    messageRestaurantInformation.restaurantAddress = "";
}
function phoneNumberRestaurantValidation(event) {
    // TODO حذف کردن زدن خالی در اول و آخر ورودی توسط کاربر
    document.getElementById("phoneNumberRestaurantValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("phoneNumberRestaurantValidationMessage").style.display =
            "block";
        document.getElementById("phoneNumberRestaurantValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        messageRestaurantInformation.phoneNumberRestaurant = "phoneNumberRestaurant";
        return false;
    }
    let reMobile = /^09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}$/;
    // let reHome = /^0[0-9]{2,}[0-9]{7,}$/;
    let koli =/(09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4})|(0[0-9]{2,}[0-9]{8,})/;
    let validphoneNumberMobile = koli.test(inputValue);
    // let validphoneNumberHome = reHome.test(inputValue);
    if (!validphoneNumberMobile) {
        document.getElementById("phoneNumberRestaurantValidationMessage").style.display =
            "block";
        document.getElementById("phoneNumberRestaurantValidationMessage").innerHTML =
            "لطفا یک شماره ی معتبر وارد کنید";
        messageRestaurantInformation.phoneNumberRestaurant = "phoneNumberRestaurant";
        return false;
    }
    messageRestaurantInformation.phoneNumberRestaurant = "";
}
