const btnEditProd = document.querySelectorAll(".btn_edit_prod")
const prodName = document.getElementById("prodName")
const prodDesc = document.getElementById("prodDesc")
const ProdIngre = document.getElementById("ProdIngre")

const seletGamme = document.getElementById("seletGamme")
const selectCat = document.getElementById("selectCat")
const selectEff = document.getElementById("selectEff")
const inpGrammage = document.getElementById("inpGrammage")
const editImportant = document.getElementById("editImportant")

const inputId = document.getElementById("idProd")
const oldImage = document.getElementById("oldImage")

const editSoapForm = document.getElementById("editSoapForm")


btnEditProd.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id

        fetch(`${location.origin}/socapco_website/controlers/get_prod.php?id=${id}`)
            .then(responce => responce.json()).then(data => {
                prodName.value = data.name
                prodDesc.value = data.description
                ProdIngre.value = data.ingredient
                inputId.value = data.id_product
                seletGamme.value = data.id_gamme
                selectCat.value = data.id_categorie
                selectEff.value = data.id_effect
                inpGrammage.value = data.grammage
                oldImage.value = data.picture
                data.important == 1 ? editImportant.checked = true : editImportant.checked = false
            }).catch(error => console.log(error))
    })
});


editSoapForm.addEventListener("submit", e => {
    e.preventDefault()
    let errorBoxEdit = document.getElementById("editError")
    let successBoxEdit = document.getElementById("editSuccess")

    let data = new FormData(editSoapForm)

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
                window.location.reload()
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
