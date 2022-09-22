function editPlastique() {
    const btnEditPlastique = document.querySelectorAll(".btn_edit_plastique")
    const plastiqueDesc = document.getElementById("plastiqueDesc")
    const inpGrammage = document.getElementById("inpGrammage")
    const uniteSelect = document.getElementById("uniteSelect")
    const uploadFileEdit = document.getElementById("uploadFileEdit")


    const inputId = document.getElementById("idProd")
    const oldImage = document.getElementById("oldImage")

    const editPlastiqueForm = document.getElementById("editPlastiqueForm")


    btnEditPlastique.forEach(btn => {
        btn.addEventListener("click", e => {
            const id = e.target.dataset.id

            fetch(`${location.origin}/socapco_website/controlers/plastiques.php?action=read&id=${id}`)
                .then(responce => responce.json()).then(data => {
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
        const formData = new FormData(editPlastiqueForm);

        let file = uploadFileEdit.files[0]
        if (file) {
            let type = file.type;

            if (type != "image/jpeg" && type != "image/jpg" && type != "image/png") {
                errorBoxEdit.classList.remove("hide")
                errorBoxEdit.innerHTML = "le ficher selectionner n'est pas une image"
                return;
            } else {
                errorBoxEdit.classList.add("hide")
                new Compressor(file, {
                    quality: 0.2,
                    success(result) {
                        formData.append('image', result, result.name);
                        putData(formData)
                    },
                    error(err) {
                        console.log(err.message);
                    },
                });
            }
        } else {
            putData(formData)
        }


        function putData(formData) {
            fetch(`${location.origin}/socapco_website/controlers/plastiques.php?action=update`, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'xmlhttprequest'
                },
                body: formData
            }).then(responce => responce.json()).then(data => {
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
        }
    })
}
editPlastique()