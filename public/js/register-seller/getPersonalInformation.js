// in the name of allah

function getPersonalInformation() {
    for (const [key, value] of Object.entries(payam)) {
        if (value.length !== 0) {
            alert("لطفا همه ورودی ها رو کامل و درست پر کنید");
            return;
        }
    }
    let firstName = document.querySelector("input[name='firstName']").value;
    let lastName = document.querySelector("input[name='lastName']").value;
    let email = document.querySelector("input[name='email']").value;
    let phoneNumber = document.querySelector("input[name='phoneNumber']").value;
    let homePlace = document.querySelector("input[name='homePlace']").value;
    let password = document.querySelector("input[name='password']").value;
    let confirmPassword = document.querySelector(
        "input[name='confirmPassword']"
    ).value;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        // TODO وقتی پیام هشدار داده می شود دکمه ارسال می رود پایین و دیده نمی شود
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
                        <p class="mb-0">شما به عنوان فروشنده ثبت نام شدید  .</p>
                    </div>
                </div>
            </div>
        </div>`;
            document.querySelector("input[name='firstName']").value = "";
            document.querySelector("input[name='lastName']").value = "";
            document.querySelector("input[name='email']").value = "";
            document.querySelector("input[name='phoneNumber']").value = "";
            document.querySelector("input[name='homePlace']").value = "";
            document.querySelector("input[name='password']").value = "";
            document.querySelector("input[name='confirmPassword']").value = "";
            document.getElementById("vorodiyeDaryafteAskShenaseh").value = "";
            payam = {
                firstName: "first",
                lastName: "last",
                email: "email",
                phoneNumber: "phone",
                homePlace: "homePlace",
                password: "password",
                confirmPassword: "confirm",
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
                        <h5 class="mt-1 mb-2">متاسفانه شما ثبت نام نشدید</h5>
                        <p class="mb-0">با پشتیبانی تماس بگیرید</p>
                        // TODO قرار دادن شماره پشتیبانی و یا پیوند ارتباط بلادرنگ
                    </div>
                </div>
            </div>
        </div>`;
        }
    };
    xhttp.open("POST", "/public/register-seller/get-personal-information");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        `_token=${token}&firstName=${firstName}&lastName=${lastName}&email=${email}&phoneNumber=${phoneNumber}&homePlace=${homePlace}&password=${password}&confirmPassword=${confirmPassword}`
    );
}
