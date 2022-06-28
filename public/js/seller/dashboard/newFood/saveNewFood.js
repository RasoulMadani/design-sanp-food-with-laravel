// in the name of allah
function saveNewFood() {
    for (const [key, value] of Object.entries(messageForNewFoodForm)) {
        // TODO تنظیم اینکه برای هر ورودی خطای خودش را نشان بدهد
        if (value.length !== 0) {
            alert("لطفا همه ورودی ها رو کامل و درست پر کنید");
            return;
        }
    }
    let foodName = document.querySelector("input[name='foodName']").value;
    let ingredientsFood = document.querySelector(
        "input[name='ingredientsFood']"
    ).value;
    let foodPrice = document.querySelector("input[name='foodPrice']").value;
    let typeOfFood = document.querySelector("select[name='typeOfFood']").value;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let myFile = document.getElementById("vorodiyeDaryafteAskShenaseh"); // Our HTML files' ID

    // Get the files from the form input
    let files = myFile.files;

    // Create a FormData object
    let formData = new FormData();

    // Select only the first file from the input array
    let file = files[0];

    // Add the file to the AJAX request
    formData.append("image", file, file.name);
    formData.append("foodName", foodName);
    formData.append("ingredientsFood", ingredientsFood);
    formData.append("foodPrice", foodPrice);
    formData.append("typeOfFood", typeOfFood);
    formData.append("_token", token);

    // Set up the request
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("POST", "/seller/dashboard/save-create-food", true);

    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        console.log(this.response);
        return;
        if (xhr.status == 200) {
            myFile.value = "";
            let akseAsliyeTanzimateShakhsi = document.querySelectorAll(
                ".akseAsliyeTanzimateShakhsi"
            );
            akseAsliyeTanzimateShakhsi[0].src = `anbari/aksHa/akshayeShakhsi/${this.response}`;
            akseAsliyeTanzimateShakhsi[1].src = `anbari/aksHa/akshayeShakhsi/${this.response}`;
            akseAsliyeTanzimateShakhsi[2].src = `anbari/aksHa/akshayeShakhsi/${this.response}`;
            akseAsliyeTanzimateShakhsi[3].src = `anbari/aksHa/akshayeShakhsi/${this.response}`;
        } else {
            alert("متاسفانه عکس بارگزاری نشد");
        }
    };

    // Send the data.
    xhr.send(formData);
}
