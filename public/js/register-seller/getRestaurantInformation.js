// in the name of allah
function getRestaurantInformation(event) {
    for (const [key, value] of Object.entries(messageRestaurantInformation)) {
        // TODO تنظیم اینکه برای هر ورودی خطای خودش را نشان بدهد
        if (value.length !== 0) {
            alert("لطفا همه ورودی ها رو کامل و درست پر کنید");
            return;
        }
    }
    // TODO انختاب دسته بندی به صورت چک باکس
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
        let response = JSON.parse(this.response);
        if (response.allah == "perform") {
            document.getElementById(
                "messageLoginRestaurantInformation"
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
                        <p class="mb-0">رستوران شما ساخته شد  .</p>
                    </div>
                </div>
            </div>
        </div>`;
            document.querySelector("input[name='restaurantName']").value = "";
            document.querySelector("input[name='bankAccountNumber']").value =
                "";
            document.querySelector("input[name='restaurantAddress']").value =
                "";
            document.querySelector(
                "input[name='phoneNumberRestaurant']"
            ).value = "";
            messageRestaurantInformation = {
                restaurantName: "restaurantName",
                typeOfRestaurant: "typeOfRestaurant",
                bankAccountNumber: "bankAccountNumber",
                restaurantAddress: "restaurantAddress",
                phoneNumberRestaurant: "phoneNumberRestaurant",
            };
        } else {
            document.getElementById(
                "messageLoginRestaurantInformation"
            ).innerHTML = `<div class="col-xl-6">
            <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
                </button>
                <div class="media">
                    <div class="alert-left-icon-big">
                        <span><i class="mdi mdi-alert"></i></span>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-1 mb-2">متاسفانه رستوران ساخته نشد</h5>
                        <p class="mb-0">با پشتیبانی تماس بگیرید</p>
                        // TODO قرار دادن شماره پشتیبانی و یا پیوند ارتباط بلادرنگ
                    </div>
                </div>
            </div>
        </div>`;
        }
    };
    xhttp.open("POST", "/public/register-seller/get-restaurant-information");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        `_token=${token}&typeOfRestaurant=${typeOfRestaurant}&restaurantName=${restaurantName}&bankAccountNumber=${bankAccountNumber}&restaurantAddress=${restaurantAddress}&phoneNumberRestaurant=${phoneNumberRestaurant}`
    );
}
