// in the name of allah
function getRestaurantIformations(event) {
    let id = event.dataset.gsId;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open(
        "POST",
        "/seller/dashboard/edit-restaurant-information/get-restaurant-informations"
    );
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        console.log(response);
        let htmlEntities = "";
        if (response.allah == "perform") {
            htmlEntities += `<div id="messageLoginRestaurantInformation">
            </div>
            <div class="row">
                <div class="col-lg-6 mb-2">
                    <div class="form-group">
                        <label class="text-label"> نام رستوران *</label>
                        <input type="text" name="restaurantName"
                            onkeyup="restaurantNameValidation(this)"
                            class="form-control" value="${response.restaurantInformation.name}" placeholder="قاسم سلیمانی" required>
                        <div id="restaurantNameValidationMessage"
                            class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                <div class="form-group">
                    <label class="text-label"> انتخاب دسته بندی رستوران *</label>
                        <div class="card">
                        <div class="">
                        </div>
                        <div class="card-body">
                            <div class="row">`;
            let idCategory = response.restaurantInformation.categories.map(
                (restaurantCategory) => restaurantCategory.id
            );
            var myArray = [
                "",
                "checkbox-info",
                "checkbox-success",
                "checkbox-warning",
                "checkbox-danger",
            ];
            for (const [key, payam] of Object.entries(
                response.restaurantCategories
            )) {
                var rand = myArray[(Math.random() * myArray.length) | 0];
                let kelid = Number(key) + 1;
                let checked = idCategory.includes(payam.id);
                htmlEntities += `
                                        <div class="col-xl-4 col-xxl-6 col-6">
                                            <div class="form-check custom-checkbox mb-3 ${
                                                " " + rand
                                            }">
                                                <input name="categoriesRestaurant" type="checkbox" value="${
                                                    payam.id
                                                }" class="form-check-input" ${
                    checked ? " checked" : ""
                } id="customCheckBox2">
                                                <label class="form-check-label" for="customCheckBox2">${
                                                    payam.name
                                                }</label>
                                            </div>
                                        </div>
                                                    `;
            }
            htmlEntities += `</div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="form-group">
                        <label class="text-label">شماره حساب *</label>
                        <input type="text" onkeyup="bankAccountNumberValidation(this)"
                            name="bankAccountNumber" class="form-control"
                            placeholder="6273811619866066" value="${response.restaurantInformation.account_payment}" required>
                        <div id="bankAccountNumberValidationMessage"
                            class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="form-group">
                        <label class="text-label">نشانی رستوران *</label>
                        <input type="text"
                            onkeyup="restaurantAddressValidation(this)" value="${response.restaurantInformation.addresses[0].lat}" name="restaurantAddress" class="form-control" required>
                        <input type="text"
                            onkeyup="restaurantAddressValidation(this)" value="${response.restaurantInformation.addresses[0].lang}" name="restaurantAddress" class="form-control" required>
                        <div id="restaurantAddressValidationMessage"
                            class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="form-group">
                        <label class="text-label"> شماره تلفن رستوران *</label>
                        <input type="text"
                            onkeyup="phoneNumberRestaurantValidation(this)"
                            value="${response.restaurantInformation.phones[0].phoneNumber}" name="phoneNumberRestaurant" class="form-control"
                            placeholder="09123456789" required>
                        <div id="phoneNumberRestaurantValidationMessage"
                            class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <button id="personlalEnformationSaveButton"
                        onclick="getRestaurantInformation(this)" type="button"
                        class="btn btn-primary mb-2 ml-2">ارسال</button>
                </div>
            </div>`;
        }
        document.getElementById("mainDiv").innerHTML = htmlEntities;
    };

    // Send the data.
    xhr.send(`_token=${token}&id=${id}`);
}
