function editCategoryOnClick(event) {
    let id = event.dataset.gsId;
    let inputEditCategory = document.getElementById(
        `editCategoryInputId-${id}`
    );
    inputEditCategory.toggleAttribute("disabled");
    inputEditCategory.focus();
    event.innerHTML = `
    <i class="fas fa-edit"></i>`;
}

function editCategoryInputOnblur(event) {
    let id = event.dataset.gsInputId;
    let token = document.querySelector('meta[name="csrf-token"]').content;
    let newCategoryName = event.value;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        let response = JSON.parse(this.response);
        if(response.allah == 'ok'){
            event.toggleAttribute("disabled");
            document.getElementById(`editCategoryOnClick-${id}`).innerHTML = `
            <i class="fas fa-pencil-alt"></i>
              `;
        }
    };
    xhttp.open("POST", "/admin/dashboard/edit-category-list");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`_token=${token}&newCategoryName=${newCategoryName}&id=${id}`);
}
