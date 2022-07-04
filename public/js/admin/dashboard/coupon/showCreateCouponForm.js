//  in the name of allah

function showCreateCouponForm() {
    let htmlElement = `
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">ساخت تخفیف</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">نام تخفیف</label>
                            <input type="text" onkeyup="copounNameInputValidation(this)" name="copounName" class="form-control" placeholder="میلاد امام رضا(ع)">
                            <div id="copounNameValidationMessage" class="invalid-feedback">
                            ...
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">کد تخفیف (اختیاری)</label>
                            <input type="text" onkeyup="copounCodeInputValidation(this)" name="copounCode" class="form-control" placeholder="qw1234e">
                            <div id="copounCodeInputFormValidationMessage" class="invalid-feedback">
                            ...
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">درصد تخفیف (اختیاری)</label>
                            <input type="text" onkeyup="copounPersentInputValidation(this)" name="copounPersent" class="form-control" placeholder="12">
                            <div id="copounPersentInputFormValidationMessage" class="invalid-feedback">
                            ...
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">قیمت تخفیف (اختیاری)</label>
                            <input type="text" onkeyup="copounPriceInputValidation(this)" name="copounPrice" class="form-control" placeholder="50000">
                            <div id="copounPriceInputFormValidationMessage" class="invalid-feedback">
                            ...
                        </div>
                        </div>
                    </div>
                    <button type="button" onclick="saveCoupon()" class="btn btn-primary">ارسال</button>
                </form>
            </div>
        </div>
    </div>`;
    document.getElementById("x6-2").innerHTML = htmlElement;
}
