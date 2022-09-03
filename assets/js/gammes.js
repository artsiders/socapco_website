function addGamme() {
    const addGammeForm = document.getElementById('addGammeForm')

    let errorBox = document.getElementById("addError")
    let successBox = document.getElementById("addSuccess")

    addGammeForm.addEventListener("submit", e => {
        e.preventDefault()

        let data = new FormData(addGammeForm)

        fetch(`${location.origin}/socapco_website/controlers/gammes.php?action=create`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
        }).then(responce => responce.json()).then(data => {
            if (!data.gam_libele) {
                addGammeForm.gam_libele.classList.add("border-danger")
            }

            if (data.msg == "") {
                if (data.isOk) {
                    errorBox.classList.add("hide")
                    successBox.classList.remove("hide")
                    successBox.innerHTML = `gamme ajouter avec succé ! 
                    <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button>`;

                    addGammeForm.gam_libele.value = ""
                    addGammeForm.gam_libele.classList.remove("border-danger")
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

addGamme()
