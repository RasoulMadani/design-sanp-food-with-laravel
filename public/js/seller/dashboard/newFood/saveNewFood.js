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
        let response = JSON.parse(this.response);
        if (response.allah == "save") {
            document.getElementById(
                "messageLogin"
            ).innerHTML = `<div class="col-xl-6">
            <div class="alert alert-success left-icon-big alert-dismissible fade show">
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="btn-close"
                >
                    <span>
                        <i class="mdi mdi-btn-close"></i>
                    </span>
                </button>
                <div class="media">
                    <div class="alert-left-icon-big">
                        <span>
                            <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-1 mb-2">تبریک میگم !</h5>
                        <p class="mb-0">غذای جدید ساخته شد  .</p>
                    </div>
                </div>
            </div>
        </div>`;
        } else {
            document.getElementById(
                "messageLogin"
            ).innerHTML = `<div class="col-xl-6">
            <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
                </button>
                <div class="media">
                    <div class="alert-left-icon-big">
                        <span><i class="mdi mdi-alert"></i></span>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-1 mb-2">متاسفانه غذا ذخیره نشد</h5>
                        <p class="mb-0">با پشتیبانی تماس بگیرید</p>
                        // TODO قرار دادن شماره پشتیبانی و یا پیوند ارتباط بلادرنگ
                    </div>
                </div>
            </div>
        </div>`;
        }
    };

    // Send the data.
    xhr.send(formData);
}
