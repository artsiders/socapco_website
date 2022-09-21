function addPlastique() {
    const addPlastiqueForm = document.getElementById("addPlastiqueForm")
    const uploadFileAdd = document.getElementById("uploadFileAdd")

    let errorBox = document.getElementById("addError")
    let successBox = document.getElementById("addSuccess")

    let imageLabel = document.getElementById("imageLabel")

    addPlastiqueForm.addEventListener("submit", e => {
        e.preventDefault()

        let file = uploadFileAdd.files[0]
        if (!file) {
            errorBox.classList.remove("hide")
            errorBox.innerHTML = "selectionner une image pour le produit"
            return;
        } else {
            let type = file.type;

            if (type != "image/jpeg" && type != "image/jpg" && type != "image/png") {
                errorBox.classList.remove("hide")
                errorBox.innerHTML = "le ficher selectionner n'est pas une image"
                return;
            } else {
                errorBox.classList.add("hide")
            }
        }

        new Compressor(file, {
            quality: 0.2,

            // The compression process is asynchronous,
            // which means you have to access the `result` in the `success` hook function.
            success(result) {
                const formData = new FormData(addPlastiqueForm);

                // The third parameter is required for server
                formData.append('plastique_image', result, result.name);

                fetch(`${location.origin}/socapco_website/controlers/plastiques.php?action=create`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'xmlhttprequest'
                    },
                    body: formData
                }).then(responce => responce.json()).then(data => {
                    if (!data.description) {
                        addPlastiqueForm.description.classList.add("border-danger")
                    }
                    else {
                        addPlastiqueForm.description.classList.remove("border-danger")
                    }
                    if (!data.image) {
                        imageLabel.classList.add("border-danger")
                    }
                    else {
                        imageLabel.classList.remove("border-danger")
                    }

                    if (data.msg == "") {
                        if (data.isOk) {
                            window.location.reload()
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

            },
            error(err) {
                console.log(err.message);
            },
        });
    })
}
addPlastique()
