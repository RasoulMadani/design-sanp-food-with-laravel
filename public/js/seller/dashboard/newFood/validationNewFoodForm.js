// in the name of allah
let messageForNewFoodForm = {
    foodName: "foodName",
    ingredientsFood: "ingredientsFood",
    foodPrice: "foodPrice",
    uploadImage: "uploadImage",
    categoryFood: "categoryFood",
};
function foodNameValidation(event) {
    document.getElementById("foodNameValidationMessage").style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("foodNameValidationMessage").style.display =
            "block";
        document.getElementById("foodNameValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        messageForNewFoodForm.foodName = "foodName";
        return false;
    }
    messageForNewFoodForm.foodName = "";
}
function ingredientsFoodValidation(event) {
    document.getElementById("ingredientsFoodValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "ingredientsFoodValidationMessage"
        ).style.display = "block";
        document.getElementById("ingredientsFoodValidationMessage").innerHTML =
        "لطفا این ورودی را پر کنید";
        messageForNewFoodForm.ingredientsFood = "ingredientsFood";
        return false;
    }
    messageForNewFoodForm.ingredientsFood = "";
}
function foodPriceValidation(event) {
    document.getElementById("foodPriceValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("foodPriceValidationMessage").style.display =
            "block";
        document.getElementById("foodPriceValidationMessage").innerHTML =
        "لطفا این ورودی را پر کنید";
        messageForNewFoodForm.foodPrice = "foodPrice";
        return false;
    }
    var regex=/^[0-9]+$/;
    if (!inputValue.match(regex)){
        document.getElementById("foodPriceValidationMessage").style.display =
            "block";
        document.getElementById("foodPriceValidationMessage").innerHTML =
            "لطفا عدد وارد کنید";
        messageForNewFoodForm.foodPrice = "foodPrice";
        return false;
    }
    messageForNewFoodForm.foodPrice = "";
}
function uploadImageValidation(event) {
    document.getElementById("uploadImageValidationMessage").style.display =
        "none";
    let files = event.files;
    if (files.length == 0) {
        document.getElementById("uploadImageValidationMessage").style.display =
            "block";
        document.getElementById("uploadImageValidationMessage").innerHTML =
            "لطفا یک عکس بارگزاری کنید";
        messageForNewFoodForm.uploadImage = "uploadImage";
        return false;
    }
    let file = files[0];
    if (!file.type.match("image.*")) {
        document.getElementById("uploadImageValidationMessage").style.display =
            "block";
        document.getElementById("uploadImageValidationMessage").innerHTML =
            "این عکس نیست";
        messageForNewFoodForm.uploadImage = "uploadImage";
        return false;
    }
    messageForNewFoodForm.uploadImage = "";
}
function categoryNewFoodValidation(event) {
    document.getElementById("categoryFoodValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById("categoryFoodValidationMessage").style.display =
            "block";
        document.getElementById("categoryFoodValidationMessage").innerHTML =
            "لطفا یک نوع را انتخاب کنید";
        messageForNewFoodForm.categoryFood = "categoryFood";
        return false;
    }
    messageForNewFoodForm.categoryFood = "";
}
