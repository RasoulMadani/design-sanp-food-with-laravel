// in the name of allah
// TODO اعتبار سنجی اطلاعات سمت کاربر 
function getRestaurantInformation(event) {
    let typeOfRestaurant = document.querySelector(
        "select[name='typeOfRestaurant']"
    ).value;
    let restaurantName = document.querySelector(
        "input[name='restaurantName']"
    ).value;
    let bankAccountNumber = document.querySelector(
        "input[name='bankAccountNumber']"
    ).value;
    let restaurantAddress = document.querySelector(
        "input[name='restaurantAddress']"
    ).value;
    let phoneNumberRestaurant = document.querySelector(
        "input[name='phoneNumberRestaurant']"
    ).value;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        console.log(this.response);
        return;
        // TODO هشدارهای سمت کاربر 
        if (this.response == "allah") {
            document.getElementById(
                "personlalEnformationSaveButton"
            ).disabled = true;
            document.getElementById(
                "personlalEnformationSaveButton"
            ).innerHTML = "اطلاعات ذخیره شد";
        }
        // TODO تنظیم اینکه وقتی خطایی رخ داد چه کار کند
    };
    xhttp.open("POST", "/public/register-seller/get-restaurant-information");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        `_token=${token}&typeOfRestaurant=${typeOfRestaurant}&restaurantName=${restaurantName}&bankAccountNumber=${bankAccountNumber}&restaurantAddress=${restaurantAddress}&phoneNumberRestaurant=${phoneNumberRestaurant}`
    );
}
