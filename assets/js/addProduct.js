const addProductForm = document.getElementById("addProductForm")

let errorBox = document.getElementById("addError")
let successBox = document.getElementById("addSuccess")

let imageLabel = document.getElementById("imageLabel")

addProductForm.addEventListener("submit", e => {
    e.preventDefault()

    let data = new FormData(addProductForm)

    fetch(`${location.origin}/socapco_website/controlers/addProduct.php`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'xmlhttprequest'
        },
        body: data
    }).then(responce => responce.json()).then(data => {
        if (!data.name) {
            addProductForm.name.classList.add("border-danger")
        }
        else {
            addProductForm.name.classList.remove("border-danger")
        }
        if (!data.description) {
            addProductForm.description.classList.add("border-danger")
        }
        else {
            addProductForm.description.classList.remove("border-danger")
        }
        if (!data.image) {
            imageLabel.classList.add("border-danger")
        }
        else {
            imageLabel.classList.remove("border-danger")
        }

        if (data.msg == "") {
            if (data.isOk) {
                errorBox.classList.add("hide")
                successBox.classList.remove("hide")
                successBox.innerHTML = `produit ajouter avec succé ! 
                <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">×</button>`;

                addProductForm.name.value = ""
                addProductForm.description.value = ""
                addProductForm.image.value = ""
            } else {
                errorBox.classList.remove("hide")
                errorBox.innerHTML = "ERREUR <strong>500</strong>"
            }
        } else {
            errorBox.classList.remove("hide")
            errorBox.innerHTML = data.msg
            successBox.classList.add("hide")
        }
    })
})
