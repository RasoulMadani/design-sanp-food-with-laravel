// in the name of allah
function changeStatus(event) {
    let status = event.dataset.gsStatus;
    let buyerId = event.dataset.gsBuyerId;
    let cartItems = document.querySelectorAll(".cartItem");
    let cartItemsArray = [];
    [...cartItems].forEach((btn) =>
        cartItemsArray.push(btn.getAttribute("data-gs-id-cart-item"))
    );
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("POST", `/seller/dashboard/orders/status`);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        console.log(this.response);
        let response = JSON.parse(this.response);
        let htmlEntities = "";
        if (response.allah == "perform") {
            document.getElementById("textStatus").innerHTML = event.innerHTML;
            let lineStatus =
                status == "delivered"
                    ? false
                    : status == "send"
                    ? document.querySelectorAll(".delivered, .send")
                    : status == "prepare"
                    ? document.querySelectorAll(".delivered , .send,.prepare")
                    : status == "check"
                    ? document.querySelectorAll(
                          ".delivered , .send, .prepare ,.check"
                      )
                    : document.querySelectorAll(
                          ".delivered , .send, .prepare,.check"
                      );
            console.log(lineStatus);
            if (lineStatus) {
                borderDarkAll = document.querySelectorAll(
                    ".delivered , .send, .prepare,.check"
                );
                [...borderDarkAll].forEach((span) =>
                    span.classList.remove("border-dark")
                );
                [...lineStatus].forEach((span) =>
                    span.classList.add("border-dark")
                );
            } else {
                borderDarkAll = document.querySelectorAll(
                    ".delivered , .send, .prepare,.check"
                );
                [...borderDarkAll].forEach((span) =>
                    span.classList.remove("border-dark")
                );
            }
        }
    };

    xhr.send(
        `_token=${token}&status=${status}&cartItemsArray=${cartItemsArray}&buyerId=${buyerId}`
    );
}
