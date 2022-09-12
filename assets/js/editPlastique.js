function editPlastique() {
    const btnEditPlastique = document.querySelectorAll(".btn_edit_plastique")
    const plastiqueName = document.getElementById("plastiqueName")
    const plastiqueDesc = document.getElementById("plastiqueDesc")
    const inpGrammage = document.getElementById("inpGrammage")
    const uniteSelect = document.getElementById("uniteSelect")


    const inputId = document.getElementById("idProd")
    const oldImage = document.getElementById("oldImage")

    const editPlastiqueForm = document.getElementById("editPlastiqueForm")


    btnEditPlastique.forEach(btn => {
        btn.addEventListener("click", e => {
            const id = e.target.dataset.id

            fetch(`${location.origin}/socapco_website/controlers/plastiques.php?action=read&id=${id}`)
                .then(responce => responce.json()).then(data => {
                    plastiqueName.value = data.name
                    plastiqueDesc.value = data.description
                    inputId.value = data.id_plastique
                    inpGrammage.value = data.grammage
                    uniteSelect.value = data.unite
                    oldImage.value = data.picture
                }).catch(error => console.log(error))
        })
    });


    editPlastiqueForm.addEventListener("submit", e => {
        e.preventDefault()
        let errorBoxEdit = document.getElementById("editError")
        let successBoxEdit = document.getElementById("editSuccess")

        let data = new FormData(editPlastiqueForm)

        fetch(`${location.origin}/socapco_website/controlers/plastiques.php?action=update`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
        }).then(responce => responce.json()).then(data => {
            if (!data.name) {
                plastiqueName.classList.add("border-danger")
            }
            else {
                plastiqueName.classList.remove("border-danger")
            }
            if (!data.description) {
                plastiqueDesc.classList.add("border-danger")
            }
            else {
                plastiqueDesc.classList.remove("border-danger")
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
editPlastique()