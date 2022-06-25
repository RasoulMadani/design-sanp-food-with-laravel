// in the name of allah
function loginToAccount(event) {
    let route = routeDashboard;
    for (const [key, value] of Object.entries(messageForLoginForm)) {
        if (value.length !== 0) {
            alert("لطفا همه ورودی ها رو کامل و درست پر کنید");
            return;
        }
    }
    let email = document.querySelector("input[name='email']").value;
    let password = document.querySelector("input[name='password']").value;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        let javab = JSON.parse(this.response);
        if (javab.allah == "notexist") {
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
                        <h5 class="mt-1 mb-2">حساب کاربری موجود نیست</h5>
                        <p class="mb-0">ممکن است رایانامه و یا رمز عبور را اشتباه وارد کرده باشید</p>
                    </div>
                </div>
            </div>
        </div>`;
        }else if(javab.allah == 'loginuser'){
            window.location.href = route;
        }
        // TODO تنظیم اینکه وقتی خطایی رخ داد چه کار کند
    };
    xhttp.open("POST", "/public/login-form");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`_token=${token}&email=${email}&password=${password}}`);
}
