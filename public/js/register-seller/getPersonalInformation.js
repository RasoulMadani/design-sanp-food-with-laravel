// in the name of allah

function getPersonalInformation() {
    for (const [key, value] of Object.entries(payam)) {
        if ((value != "")) {
            alert("لطفا همه ورودی ها رو کامل و درست پر کنید");
            return;
        }
    }

    let firstName = document.querySelector("input[name='firstName']").value;
    let lastName = document.querySelector("input[name='lastName']").value;
    let email = document.querySelector("input[name='email']").value;
    let phoneNumber = document.querySelector("input[name='phoneNumber']").value;
    let homePlace = document.querySelector("input[name='homePlace']").value;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        console.log(this.response);
        return;
    };
    xhttp.open("POST", "/public/register-seller/get-personal-information");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        `_token=${token}&firstName=${firstName}&lastName=${lastName}&email=${email}&phoneNumber=${phoneNumber}&homePlace=${homePlace}`
    );
}
