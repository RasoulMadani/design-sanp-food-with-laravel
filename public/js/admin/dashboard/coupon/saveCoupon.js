// in the name of allah
function saveCoupon() {
    for (const [key, value] of Object.entries(messageCreateCouponForm)) {
        if (value.length !== 0) {
            alert("ورودی نام ضروری می باشد");
            return;
        }
    }
    let copounName = document.querySelector("input[name='copounName']").value;
    let copounCode = document.querySelector("input[name='copounCode']").value;
    let copounPersent = document.querySelector(
        "input[name='copounPersent']"
    ).value;
    let copounPrice = document.querySelector("input[name='copounPrice']").value;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
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
                        <p class="mb-0">تخفیف جدید ساخته شد  .</p>
                    </div>
                </div>
            </div>
        </div>`;
            document.querySelector("input[name='copounName']").value = "";
            document.querySelector("input[name='copounCode']").value = "";
            document.querySelector("input[name='copounPersent']").value = "";
            document.querySelector("input[name='copounPrice']").value = "";
            messageForNewFoodForm = {
                copounName: "copounName",
            };
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
                        <h5 class="mt-1 mb-2">متاسفانه تخفیف ساخته نشد</h5>
                        <p class="mb-0">با پشتیبانی تماس بگیرید</p>
                        // TODO قرار دادن شماره پشتیبانی و یا پیوند ارتباط بلادرنگ
                    </div>
                </div>
            </div>
        </div>`;
        }
    };
    xhttp.open("POST", "/admin/dashboard/save-coupon");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        `_token=${token}&copounName=${copounName}&copounCode=${copounCode}&copounPersent=${copounPersent}&copounPrice=${copounPrice}`
    );
}
