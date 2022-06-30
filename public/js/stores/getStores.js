// in the name of allah
function getStores(){
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("POST", "/stores/get-stores");

    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        if (response.allah == "save") {
            document.getElementById(
                "messageLogin"
            ).innerHTML = ``;
            document.querySelector("input[name='foodName']").value = "";
            document.querySelector("input[name='ingredientsFood']").value = "";
            document.querySelector("input[name='foodPrice']").value = "";
            document.getElementById("vorodiyeDaryafteAskShenaseh").value = "";
            
        } else {
            document.getElementById(
                "messageLogin"
            ).innerHTML = ``;
        }
    };

    // Send the data.
    xhr.send();
    for (const [key, payam] of Object.entries(javab)) {
        karbaran += `<option value="${key}">${payam}</option>`;
      }
}