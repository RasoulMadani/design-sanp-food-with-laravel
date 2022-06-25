// in the name of allah

function createCategory() {
    htmlElement = `
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ایجاد دسته بندی</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">نام دسته بندی</label>
                                                <input type="text" class="form-control" placeholder="سنتی ...">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">شهر</label>
                                                <select id="inputState" class="default-select form-control wide">
                                                    <option selected>انتخاب کن ...</option>
                                                    <option>گزینه 1</option>
                                                    <option>گزینه 2</option>
                                                    <option>گزینه 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">ارسال</button>
                                    </form>
                                </div>
                            </div>
                        </div>`;
    document.getElementById("x6-1").innerHTML = htmlElement;
}
