// in the name of allah
function getRestaurantFood(event) {
    let id = event.dataset.gsId;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("POST", "/seller/dashboard/get-foods");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        let htmlEntities = "";
        if (response.allah == "perform") {
            htmlEntities += `
            <div onclick="showAddFoodToRestaurantForm(this)" data-gs-id="${id}" class="col-lg-12 m-2"><a href="javascript:void()">اضافه کردن غذا به این رستوران</a></div>
            <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">غذاهای این رستوران</h4>
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
                                        <td>${payam.food.name}</td>
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
    xhr.send(`_token=${token}&id=${id}`);
}
