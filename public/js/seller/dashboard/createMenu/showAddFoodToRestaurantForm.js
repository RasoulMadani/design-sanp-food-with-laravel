// in the name of allah
function showAddFoodToRestaurantForm(event) {
    let id = event.dataset.gsId;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("POST", "/seller/dashboard/create-menu/get-food-for-add");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        let htmlEntities = "";
        if (response.allah == "perform") {
            htmlEntities += `
            <div id="messageLogin">
            </div>
            <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">غذاهای شما</h4>
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
                                        <input type="checkbox" name="foodsCheckbox" class="form-check-input" value="${payam.id}">
                                        </td>
                                        <td>${payam.name}</td>
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
                                                <button type="button" onclick="saveAddFoodToRestaurantForm(this)" data-gs-id="${id}" class="btn btn-primary">اضافه کردن غذاها</button>
                                            </div>
                                        </div>`;
        }
        document.getElementById("mainDiv").innerHTML = htmlEntities;
    };

    // Send the data.
    xhr.send(`_token=${token}`);
}
