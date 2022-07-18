//  in  the name of allah
function showOrders(event) {
    let id = event.dataset.gsId;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("GET", `/seller/dashboard/orders?id=${id}`);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        let lengthResponse = Object.keys(response.carts).length;
        let htmlEntities = "";
        if (response.allah == "perform") {
            htmlEntities += `
            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th class="align-middle">
                                                    <div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="checkAll">
														<label class="form-check-label" for="checkAll"></label>
													</div>
                                                </th>
                                                <th class="align-middle">سفارش</th>
                                                <th class="align-middle pr-7">تاریخ</th>
                                                <th class="align-middle" style="min-width: 12.5rem;">ارسال به</th>
                                                <th class="align-middle text-right">وضعیت</th>
                                                <th class="align-middle text-right">جمع فاکتور</th>
                                                <th class="no-sort"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="orders">`;
            var myArray = [
                "table-active",
                "table-primary",
                "table-success",
                "table-info",
                "table-warning",
                "table-danger",
            ];
            let allah = 1;
            // const entries = Object.entries(response.carts);
            // const nonEmptyOrNull = entries.filter(
            //     ([key, val]) =>
            //         val !== "" && val !== null && !Array.isArray(val)
            // );
            // let output = Object.fromEntries(nonEmptyOrNull);
            let output = response.carts;
            // output = [output];
            for (const [key, payam] of Object.entries(output)) {
                var rand = myArray[(Math.random() * myArray.length) | 0];
                let kelid = Number(key);
                if (kelid == 0) {
                    htmlEntities += `
                                        <tr class="btn-reveal-trigger">
                                        <td class="py-2">
                                            <div class="form-check custom-checkbox checkbox-success">
                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                <label class="form-check-label" for="checkbox"></label>
                                            </div>
                                        </td>
                                        <td class="py-2"  style="cursor: pointer;" onclick="showOrderDetails(this)" data-gs-order-id="${payam.idUser}" data-gs-restaurant-id="${payam.idRestaurant}">
                                            <a href="#">
                                                <strong>#181</strong></a> توسط <strong>${payam.firstNameUser}</strong><br /><a href="mailto:${payam.email}">${payam.email}</a></td>
                                        <td class="py-2">1400/04/20</td>
                                        <td class="py-2">${payam.addressUser}
                                            <p class="mb-0 text-500">با نرخ ثابت</p>
                                        </td>
                                        <td class="py-2 text-right"><span class="badge badge-success">تکمیل<span
                                                    class="ms-1 fa fa-check"></span></span>
                                        </td>
                                        <td class="py-2 text-right">99,000 <span class="size-l">تومان</span> 
                                        </td>
                                        <td class="py-2 text-right">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-1">
                                                    <div class="py-2"><a class="dropdown-item" href="#!">تکمیل</a><a class="dropdown-item" href="#!">در حال ارسال</a><a class="dropdown-item" href="#!">لغو</a><a class="dropdown-item" href="#!">صف</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        `;
                } else if (
                    response[kelid + 1] &&
                    output[kelid + 1].idUser != output[kelid].idUser
                ) {
                    htmlEntities += `
                    <tr class="btn-reveal-trigger">
                                        <td class="py-2">
                                            <div class="form-check custom-checkbox checkbox-success">
                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                <label class="form-check-label" for="checkbox"></label>
                                            </div>
                                        </td>
                                        <td class="py-2"  style="cursor: pointer;" onclick="showOrderDetails(this)" data-gs-order-id="${payam.idUser}" data-gs-restaurant-id="${payam.idRestaurant}">
                                            <a href="#">
                                                <strong>#181</strong></a> توسط <strong>${payam.firstNameUser}</strong><br /><a href="mailto:${payam.email}">${payam.email}</a></td>
                                        <td class="py-2">1400/04/20</td>
                                        <td class="py-2">${payam.addressUser}
                                            <p class="mb-0 text-500">با نرخ ثابت</p>
                                        </td>
                                        <td class="py-2 text-right"><span class="badge badge-success">تکمیل<span
                                                    class="ms-1 fa fa-check"></span></span>
                                        </td>
                                        <td class="py-2 text-right">99,000 <span class="size-l">تومان</span> 
                                        </td>
                                        <td class="py-2 text-right">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-1">
                                                    <div class="py-2"><a class="dropdown-item" href="#!">تکمیل</a><a class="dropdown-item" href="#!">در حال ارسال</a><a class="dropdown-item" href="#!">لغو</a><a class="dropdown-item" href="#!">صف</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    `;
                } else if (
                    kelid == lengthResponse - 1 &&
                    output[kelid - 1].idUser != output[kelid].idUser
                ) {
                    htmlEntities += `
                    <tr class="btn-reveal-trigger">
                                        <td class="py-2">
                                            <div class="form-check custom-checkbox checkbox-success">
                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                <label class="form-check-label" for="checkbox"></label>
                                            </div>
                                        </td>
                                        <td class="py-2"  style="cursor: pointer;" onclick="showOrderDetails(this)" data-gs-order-id="${payam.idUser}" data-gs-restaurant-id="${payam.idRestaurant}">
                                            <a href="#">
                                                <strong>#181</strong></a> توسط <strong>${payam.firstNameUser}</strong><br /><a href="mailto:${payam.email}">${payam.email}</a></td>
                                        <td class="py-2">1400/04/20</td>
                                        <td class="py-2">${payam.addressUser}
                                            <p class="mb-0 text-500">با نرخ ثابت</p>
                                        </td>
                                        <td class="py-2 text-right"><span class="badge badge-success">تکمیل<span
                                                    class="ms-1 fa fa-check"></span></span>
                                        </td>
                                        <td class="py-2 text-right">99,000 <span class="size-l">تومان</span> 
                                        </td>
                                        <td class="py-2 text-right">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-1">
                                                    <div class="py-2"><a class="dropdown-item" href="#!">تکمیل</a><a class="dropdown-item" href="#!">در حال ارسال</a><a class="dropdown-item" href="#!">لغو</a><a class="dropdown-item" href="#!">صف</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    `;
                }
            }
            htmlEntities += `</tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>`;
        }
        document.getElementById("mainDiv").innerHTML = htmlEntities;
    };

    // Send the data.
    xhr.send(`_token=${token}`);
}
