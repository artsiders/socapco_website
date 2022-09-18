function addPlastique() {
    const addPlastiqueForm = document.getElementById("addPlastiqueForm")

    let errorBox = document.getElementById("addError")
    let successBox = document.getElementById("addSuccess")

    let imageLabel = document.getElementById("imageLabel")

    addPlastiqueForm.addEventListener("submit", e => {
        e.preventDefault()

        let data = new FormData(addPlastiqueForm)

        fetch(`${location.origin}/socapco_website/controlers/plastiques.php?action=create`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
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
    })
}
addPlastique()
