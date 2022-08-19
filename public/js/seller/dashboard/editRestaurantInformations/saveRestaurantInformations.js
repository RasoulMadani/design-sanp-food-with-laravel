// in the name of allah
function saveRestaurantInformations() {
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let restaurantName = document.querySelector('input[name="restaurantName"]').value;
    let bankAccountNumber = document.querySelector('input[name="bankAccountNumber"]').value;
    let phoneNumberRestaurant = document.querySelector('input[name="phoneNumberRestaurant"]').value;
    let center_lat = document.querySelector('input[name="center_lat"]').value;
    let center_lng = document.querySelector('input[name="center_lng"]').value;
    let restaurantCategories = Array.from(
        document.querySelectorAll('input[name="categoriesRestaurant"]')
    )
        .filter((checkbox) => checkbox.checked)
        .map((checkbox) => checkbox.value);
    let xhr = new XMLHttpRequest();
    // Open the connection
    xhr.open(
        "POST",
        "/seller/dashboard/edit-restaurant-information"
    );
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        console.log(this.response);
        return;
        let response = JSON.parse(this.response);
        if (response.allah == "perform") {
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
                            <p class="mb-0">تخفیف ها اضافه شد  .</p>
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
                            <h5 class="mt-1 mb-2">متاسفانه تخفیف ها اضافه نشد</h5>
                            <p class="mb-0">با پشتیبانی تماس بگیرید</p>
                            // TODO قرار دادن شماره پشتیبانی و یا پیوند ارتباط بلادرنگ
                        </div>
                    </div>
                </div>
            </div>`;
        }
        document.getElementById("mainDiv").innerHTML = htmlEntities;
    };

    // Send the data.
    xhr.send(`_token=${token}&restaurantName=${restaurantName}&bankAccountNumber=${bankAccountNumber}&phoneNumberRestaurant=${phoneNumberRestaurant}&center_lat=${center_lat}&center_lng=${center_lng}&restaurantCategories=${restaurantCategories}`);
}
