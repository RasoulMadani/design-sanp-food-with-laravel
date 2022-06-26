// in the name of allah
let messageForCategoryForm = {
    name: "name",
    category: "category",
};
function categoryFormNameInputValidation(event) {
    document.getElementById("nameCategoryFormValidationMessage").style.display =
        "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "nameCategoryFormValidationMessage"
        ).style.display = "block";
        document.getElementById("nameCategoryFormValidationMessage").innerHTML =
            "لطفا این ورودی را پر کنید";
        messageForCategoryForm.name = "name";
        return false;
    }
    messageForCategoryForm.name = "";
}

function categoryFormSelectInputValidation(event) {
    document.getElementById(
        "selectCategoryFormValidationMessage"
    ).style.display = "none";
    let inputValue = event.value;
    if (inputValue == "") {
        document.getElementById(
            "selectCategoryFormValidationMessage"
        ).style.display = "block";
        document.getElementById(
            "selectCategoryFormValidationMessage"
        ).innerHTML = "لطفا یک نوع را انتخاب کنید";
        messageForCategoryForm.category = "category";
        return false;
    }
    messageForCategoryForm.category = "";
}
