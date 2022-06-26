// in the name of allah
function saveCategory() {
    for (const [key, value] of Object.entries(messageForCategoryForm)) {
        if (value.length !== 0) {
            alert("لطفا همه ورودی ها رو کامل و درست پر کنید");
            return;
        }
    }
    let name = document.querySelector(
        "input[name='nameCategory']"
    ).value;
    let group = document.querySelector("select[name='category']").value;
    alert(group);
    let token = document.querySelector('meta[name="csrf-token"]').content;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        // TODO تنظیم کردن هشدار ایجاد شدن دسته بندی 
        console.log(this.response);
        return;
        if (this.response == "allah") {
            document.getElementById(
                "personlalEnformationSaveButton"
            ).disabled = true;
            document.getElementById(
                "personlalEnformationSaveButton"
            ).innerHTML = "اطلاعات ذخیره شد";
        }
    };
    xhttp.open("POST", "/admin/dashboard/save-category");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        `_token=${token}&name=${name}&group=${group}`
    );
}
