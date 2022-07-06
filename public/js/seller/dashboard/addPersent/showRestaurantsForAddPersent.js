// in the name of allah
function showRestaurantsForAddPersent() {
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("POST", "/seller/dashboard/get-restaurants");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        let htmlEntities = "";
        if (response.allah == "perform") {
            htmlEntities += `<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">رستوران های شما</h4>
                </div>
                <div class="card-body">
                <span class="h5">یک رستوران را انتخاب کنید</span>
                <div class="table-responsive">
                    <table
                        class="table header-border"
                        style="min-width: 500px;"
                    >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام رستوران</th>
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
            for (const [key, payam] of Object.entries(response.restaurants)) {
                var rand = myArray[(Math.random() * myArray.length) | 0];
                let kelid = Number(key) + 1;
                htmlEntities += `
                                    <tr class="${rand}">
                                        <td>${kelid}</td>
                                        <td onclick="getRestaurantFoodForAddPersent(this)" data-gs-id="${payam.id}"><a href="javascript:void()">${payam.name}</a></td>
                                    </tr>
                                    `;
            }
            htmlEntities += `</tbody>
            </table>
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
