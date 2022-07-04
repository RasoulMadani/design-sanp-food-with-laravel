// in the name of allah

function showCreateCategoryForm() {
   let htmlElement = `
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
                                                <input type="text" onkeyup="categoryFormNameInputValidation(this)" name="nameCategory" class="form-control" placeholder="سنتی ...">
                                                <div id="nameCategoryFormValidationMessage" class="invalid-feedback">
                                                ...
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">نوع دسته بندی</label>
                                                <select name="category" onchange="categoryFormSelectInputValidation(this)" id="inputState" class="default-select form-control wide">
                                                    <option value="" selected>انتخاب کن ...</option>
                                                    <option value="food">نوع غذا</option>
                                                    <option value="restaurant">نوع رستوران</option>
                                                </select>
                                                <div id="selectCategoryFormValidationMessage" class="invalid-feedback">
                                                ...
                                            </div>
                                            </div>
                                        </div>
                                        <button type="button" onclick="saveCategory()" class="btn btn-primary">ارسال</button>
                                    </form>
                                </div>
                            </div>
                        </div>`;
    document.getElementById("x6-1").innerHTML = htmlElement;
}
