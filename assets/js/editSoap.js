function editSoap() {
    const btnEditSoap = document.querySelectorAll(".btn_edit_soap")
    const soapName = document.getElementById("soapName")
    const soapDesc = document.getElementById("soapDesc")
    const inpGrammage = document.getElementById("inpGrammage")
    const uniteSelect = document.getElementById("uniteSelect")


    const inputId = document.getElementById("idProd")
    const oldImage = document.getElementById("oldImage")

    const editSoapForm = document.getElementById("editSoapForm")


    btnEditSoap.forEach(btn => {
        btn.addEventListener("click", e => {
            const id = e.target.dataset.id

            fetch(`${location.origin}/socapco_website/controlers/soaps.php?action=read&id=${id}`)
                .then(responce => responce.json()).then(data => {
                    soapName.value = data.name
                    soapDesc.value = data.description
                    inputId.value = data.id_soap
                    inpGrammage.value = data.grammage
                    uniteSelect.value = data.unite
                    oldImage.value = data.picture
                }).catch(error => console.log(error))
        })
    });


    editSoapForm.addEventListener("submit", e => {
        e.preventDefault()
        let errorBoxEdit = document.getElementById("editError")
        let successBoxEdit = document.getElementById("editSuccess")

        let data = new FormData(editSoapForm)

        fetch(`${location.origin}/socapco_website/controlers/soaps.php?action=update`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
        }).then(responce => responce.json()).then(data => {
            if (!data.name) {
                soapName.classList.add("border-danger")
            }
            else {
                soapName.classList.remove("border-danger")
            }
            if (!data.description) {
                soapDesc.classList.add("border-danger")
            }
            else {
                soapDesc.classList.remove("border-danger")
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
}
editSoap()