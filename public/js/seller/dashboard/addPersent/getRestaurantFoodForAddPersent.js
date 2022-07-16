// in the name of allah
function getRestaurantFoodForAddPersent(event) {
    // TODO اضافه کردن دکمه ی حذف غذا از رستوران
    let id = event.dataset.gsId;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("POST", "/seller/dashboard/add-coupon/get-foods-whit-coupon");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        let htmlEntities = "";
        if (response.allah == "perform") {
            htmlEntities += `
            <div id="messageLogin"></div>
            <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> انتخاب تخفیف</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
										<select name="coupon" class="default-select form-control wide mb-3">
                                        <option value="">یک تخفیف انتخاب کنید</option>`;
            for (const [key, payam] of Object.entries(response.coupons)) {
                htmlEntities += `<option value="${payam.id}">${payam.name}</option>`;
            }
            htmlEntities += `		</select>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
            <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">غذاهایی که می خواهید تخفیف بخورد را انتخاب کنید</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table header-border"
                        style="min-width: 500px;"
                    >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>انتخاب کنید</th>
                                <th>نام غذا</th>
                            </tr>
                        </thead>
                        <tbody>`;
            var myArray = [
                "table-active",
                "table-primary",
                "table-success",
                "table-info",
                "table-warning",
                "table-danger",
            ];
            for (const [key, payam] of Object.entries(response.foods)) {
                var rand = myArray[(Math.random() * myArray.length) | 0];
                let kelid = Number(key) + 1;
                htmlEntities += `
                                    <tr class="${rand}">
                                        <td>${kelid}</td>
                                        <td>
                                        <input type="checkbox" name="foodsCheckboxForAddPersent" class="form-check-input" value="${payam.id}">
                                        </td>
                                        <td>${payam.ghaza.name}</td>
                                    </tr>
                                    `;
            }
            htmlEntities += `</tbody>
            </table>
        </div>
    </div>
</div>
                            </div>
                             <div class="mb-3 row">
                            <div class="col-sm-10">
                                <button type="button" onclick="saveAddCouponToFood(this)" data-gs-id="${id}" class="btn btn-primary">اضافه کردن تخفیف</button>
                            </div>
                        </div>`;
        }
        document.getElementById("mainDiv").innerHTML = htmlEntities;
    };

    // Send the data.
    xhr.send(`_token=${token}&id=${id}`);
}
