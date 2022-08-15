const btnEditProd = document.querySelectorAll(".btn_edit_prod")
const prodName = document.getElementById("prodName")
const prodDesc = document.getElementById("prodDesc")
const ProdIngre = document.getElementById("ProdIngre")

const inputId = document.getElementById("idProd")

const editProductForm = document.getElementById("editProductForm")


btnEditProd.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id

        fetch(`${location.origin}/socapco_website/controlers/get_prod.php?id=${id}`)
            .then(responce => responce.json()).then(data => {
                console.log(data);
                console.log(prodName);
                prodName.value = data.name
                prodDesc.value = data.description
                ProdIngre.value = data.ingredient
                inputId.value = data.id_product
            }).catch(error => console.log(error))
    })
});


editProductForm.addEventListener("submit", e => {
    e.preventDefault()
    let errorBoxEdit = document.getElementById("editError")
    let successBoxEdit = document.getElementById("editSuccess")

    let data = new FormData(editProductForm)

    fetch(`${location.origin}/socapco_website/controlers/editProduct.php`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'xmlhttprequest'
        },
        body: data
    }).then(responce => responce.json()).then(data => {
        if (!data.name) {
            prodName.classList.add("border-danger")
        }
        else {
            prodName.classList.remove("border-danger")
        }
        if (!data.description) {
            prodDesc.classList.add("border-danger")
        }
        else {
            prodDesc.classList.remove("border-danger")
        }

        if (data.msg == "") {
            if (data.isOk) {
                errorBoxEdit.classList.add("hide")
                successBoxEdit.classList.remove("hide")
                successBoxEdit.innerHTML = `produit modifier avec succé ! 
                <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">×</button>`;
            } else {
                errorBoxEdit.classList.remove("hide")
                errorBoxEdit.innerHTML = "ERREUR <strong>500</strong>"
            }
        } else {
            errorBoxEdit.classList.remove("hide")
            errorBoxEdit.innerHTML = data.msg
            successBoxEdit.classList.add("hide")
        }
    })
})
